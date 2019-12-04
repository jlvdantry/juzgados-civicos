<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletas;
use App\Infractores;
use App\Infracciones;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Mail\NotificacionRegistro;
use Mail;
use DateTime;

class boletasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $filtro=array();

      if ($request->has('nombres')) {
        if (strlen($request->nombres)>0) {
           array_push($filtro,['infra.nombre_i','like',"%$request->nombres%"]);
           array_push($filtro,['infra.primer_apellido_i','like',"%$request->nombres%"]);
           array_push($filtro,['infra.segundo_apellido_i','like',"%$request->nombres%"]);
        }
      }

      Log::debug('boletasControler auth='.print_r($filtro,true));

      if (count($filtro)==0) {
         $datos = Boletas::getConcatalogosConLimite(\Auth::user());
         return response()->json($datos);
      } else {
         $datos = Boletas::getConcatalogosConLimite(\Auth::user(),$filtro);
         return response()->json($datos);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Log::debug('boletasControler store request='.print_r($request->rfc,true));

      if (!$request->has('boleta_remision')) {
                return response()->json([ 'errors' => ['boleta_remision' => 'Debe de teclear primer el numero de boleta ']],428);
      }

      $inmu=Boletas::where(     ['boleta_remision' => $request->boleta_remision]
                          )->get();
      if ($inmu->count()>0) {
            return response()->json([ 'errors' => ['boleta_remision' => 'Ya existe una boleta con el numero <b>'.$request->boleta_remision, 'seccion' => 'policias']],429);
      }

      $dato = new Boletas(
         [
        'boleta_remision' => $request->get('boleta_remision'),
        'createdby' => \Auth::user()->id
      ]
         );
        try {
            $dato->save();
            //return $this->update($request,$dato['id']);  /* despues de queda de alta el inmueble dentro del rfc lo actualiza */
            return response()->json($dato,200);
        } catch (\Exception $e) {
            Log::debug('BoletasControler storage='.$e->getMessage());
            return response()->json($e->getMessage(),400);
        };

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
               $filtro = [];
               array_push($filtro,['bole.id','=',$id]);
               $datos = Boletas::getConcatalogosConLimite(\Auth::user(),$filtro);
               if (count($datos)>0) {
                       return response()->json($datos,200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID de la boleta no existe']],200);
               }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRfcEmailA($rfc,$email)
    {
               $filtro=[];
               array_push($filtro,['inmu.rfc','like',"%$rfc%"]);
               array_push($filtro,['inmu.email_acreditado','like',"%$email%"]);

               $inmu=Inmuebles::getConcatalogosConLimite(\Auth::user(),$filtro);
               if (count($inmu)>0) {
                   Log::debug('inmueblesControler show email en establecimiento del acreditado='.print_r($inmu[0],true));
                   return response()->json($inmu,200);
               } else {
                   return response()->json([ 'data' => ['rfc' => 'El rfc '.$rfc.' con el email del acreditado '.$email.' no tiene inmuebles']],200);
               }

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      Log::debug('Entro en update='.$id);
      $data = array();
      $dataf = array();
      $comos = array();
      $inmu  = array();
      $inmu=Boletas::where('id','=',$id)->get();
      if ($inmu->count()==0) {
            return response()->json([ 'errors' => ['id' => 'La identificación de la boleta no existe']],429);
      }
      if ($inmu[0]->estatus==1) {
            return response()->json([ 'errors' => ['id' => 'No se puede modificar la boleta que tiene estatus de <b>capturado']],430);
      }

      if ($request->has('estatus')) {
         if ($request->estatus==1) {
                   Log::debug('boletasController.ph quiere terminar captura='.print_r($inmu[0],true));
                   if ($inmu[0]['placa1']=="") {
                      return response()->json([ 'errors' => ['placa1' => 'Falta teclear la placa del policia uno', 'seccion' => 'policias']],430);
                   }
                   if ($inmu[0]['areadeadscripcion_1']=="") {
                      return response()->json([ 'errors' => ['areadeadscripcion_1' => 'Falta el área de adscripción del policia uno']],430);
                   }
                   if ($inmu[0]['nombre_1']=="") {
                      return response()->json([ 'errors' => ['nombre_1' => 'Falta teclear el nombre del policia uno']],430);
                   }
                   if ($inmu[0]['primer_apellido_1']=="") {
                      return response()->json([ 'errors' => ['primer_apellido_1' => 'Falta teclear el primer apellido del policia uno']],430);
                   }
                   if ($inmu[0]['id_mediotransporte_1']=="") {
                      return response()->json([ 'errors' => ['id_mediotransporte_1' => 'Falta registrar el medio de transporte del policia uno']],430);
                   }
                   if ($inmu[0]['numerodepatrulla_1']=="") {
                      return response()->json([ 'errors' => ['numerodepatrulla_1' => 'Falta registrar el número de patrulla del policia uno']],430);
                   }

                   if ($inmu[0]['placa2']=="") {
                      return response()->json([ 'errors' => ['placa2' => 'Falta teclear la placa del policia dos']],430);
                   }
                   if ($inmu[0]['areadeadscripcion_2']=="") {
                      return response()->json([ 'errors' => ['areadeadscripcion_2' => 'Falta el área de adscripción del policia dos']],430);
                   }
                   if ($inmu[0]['nombre_2']=="") {
                      return response()->json([ 'errors' => ['nombre_2' => 'Falta teclear el nombre del policia dos']],430);
                   }
                   if ($inmu[0]['primer_apellido_2']=="") {
                      return response()->json([ 'errors' => ['primer_apellido_2' => 'Falta teclear el primer apellido del policia dos']],430);
                   }
                   if ($inmu[0]['id_mediotransporte_2']=="") {
                      return response()->json([ 'errors' => ['id_mediotransporte_2' => 'Falta registrar el medio de transporte del policia dos']],430);
                   }
                   if ($inmu[0]['numerodepatrulla_2']=="") {
                      return response()->json([ 'errors' => ['numerodepatrulla_2' => 'Falta registrar el número de patrulla del policia dos']],430);
                   }
                   if ($inmu[0]['diahechos']=="") {
                      return response()->json([ 'errors' => ['diahechos' => 'Falta registrar la fecha en que sucedieron los hechos', 'seccion' => 'b_motivo' ]],430);
                   } else {
                      $datetime1 = new DateTime();
                      $datetime2 = new DateTime($inmu[0]["diahechos"]);
                      $interval = $datetime1->diff($datetime2);
                      $elapsed = $interval->format('%Rd');
                      Log::debug('boletasController.ph tiempo elapsed mayor a 50='.$elapsed.' "diahecho"='.$inmu[0]["diahechos"]);
                      if ($datetime2 > $datetime1) {
                         return response()->json([ 'errors' => ['diahechos' => 'La fecha de hecho debe ser del dia de hoy']],430);
                      }
                   }
                   if ($inmu[0]['horahechos']=="") {
                      return response()->json([ 'errors' => ['horahechos' => 'Falta registrar la hora en que sucedieron los hechos', 'seccion' => 'b_motivo' ]],430);
                   } 
                   if ($inmu[0]['id_alcaldia_h']=="") {
                      return response()->json([ 'errors' => ['id_alcaldia_h' => 'Falta seleccionar la alcaldia donde fueron los hechos'
                                                           , 'seccion' => 'b_motivo' ]],430);
                   } 
                   if ($inmu[0]['motivo']=="") {
                      return response()->json([ 'errors' => ['motivo' => 'Falta detallar el motivo por el que se realiza la presentación'
                                                           , 'seccion' => 'b_motivo' ]],430);
                   } 
                   $filtro=[];
                   array_push($filtro,['bole.idboleta','=',$id]);
                   $inf = new Infractores();
                   $infras=$inf->getConcatalogos(\Auth::user(),$filtro);
                   if (count($infras)==0) {
                          return response()->json([ 'errors' => ['infractores' => 'Al menos debe de registrar un infractor', 'seccion' => 'infractores' ]],444);
                   }

                   foreach ($infras as $infra) {
                      Log::debug('boletasController.ph infra='.print_r($infra,true));
                      if ($infra->primer_apellido_i=="") {
                         return response()->json([ 'errors' => ['primer_apellido_i' => 'Falta registrar el primer apellido del infractor <br><b>'.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }
                      if ($infra->sexo=="") {
                         return response()->json([ 'errors' => ['sexo' => 'Falta seleccionar el sexo del infractor <br><b>'.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }
                      if ($infra->curp!="") {
                          if (!$this->validate_curp($infra->curp)) {
                             return response()->json([ 'errors' => ['curp' => 'El curp del infractor '.$infra->nombre_i.' esta erroneo'
                                                            , 'seccion' => 'infractores' ]],444);
                          }
                      }

                      if ($infra->declaracion=="") {
                             return response()->json([ 'errors' => ['declaracion' => 'Falta tecelar la declaración del infractor '.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }

                      if ($infra->nacimiento!="") {
                         $edad=$this->edad($infra->nacimiento);
                         if ($edad<13) {
                            return response()->json([ 'errors' => ['nacimiento' => 'La edad del infractor es menor a 13 años '.$infra->nombre_i." ".$edad
                                                            , 'seccion' => 'infractores' ]],444);
                         }
                      } 
                      if ($infra->aplicacertificado==false) {
                         if ($infra->nombremedico=="") {
                            return response()->json([ 'errors' => ['idinfraccion' => 'Falta registrar el nombre del médico que examino al infractor  <br><b>'
                                                                  .$infra->nombre_i , 'seccion' => 'infractores' ]],444);
                         }
                         if ($infra->tirilla=="") {
                            return response()->json([ 'errors' => ['idinfraccion' => 'Falta registrar el número de tirilla del infractor  <br><b>'
                                                                .$infra->nombre_i , 'seccion' => 'infractores' ]],444);
                         }
                         if ($infra->resultado=="") {
                            return response()->json([ 'errors' => ['idinfraccion' => 'Falta registrar el resultado del examen médico del infractor  <br><b>'
                                                               .$infra->nombre_i , 'seccion' => 'infractores' ]],444);
                         }
                         if ($infra->prescripcion=="") {
                            return response()->json([ 'errors' => ['idinfraccion' => 'Falta escribir la preescripción médica del infractor  <br><b>'.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                         }
                      }
                      if ($infra->procesosupendido==true) {
                            return response()->json([ 'errors' => ['idinfraccion' => 'El proceso esta supendido del infractor <br><b>'.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }
                 
                      if ($infra->idinfraccion=="") {
                         return response()->json([ 'errors' => ['idinfraccion' => 'Falta registrar la infraccion al infractor '.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }
                      if ($infra->tiposancion=="") {
                         return response()->json([ 'errors' => ['infractores' => 'Falta seleccionar el tipo de sancion para el infractor '.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }
                      if ($infra->sancionaplicada==="" ) {
                         return response()->json([ 'errors' => ['sancionaplicada' => 'Falta teclear la sancion del infractor <br><b>'.$infra->nombre_i
                                                            , 'seccion' => 'infractores' ]],444);
                      }
                      $filtro=[];
                      array_push($filtro,['infra.id','=',$infra->idinfraccion]);
                      $ff = new Infracciones();
                      $ffda=$ff->getConcatalogos($filtro);
                      if (count($ffda)==0) {
                          return response()->json([ 'errors' => ['infractores' => 'Erros sistema no encuentra la infracción del infractor '.$infra->nombre_i
                                                             , 'seccion' => 'infractores' ]],444);
                      }
                      if ($infra->tiposancion==2) {
                          if ($infra->sancionaplicada<$ffda[0]->uc_desde || $infra->sancionaplicada>$ffda[0]->uc_hasta) {
                             return response()->json([ 'errors' => ['sancionaplicada' => 
                                                       'La sanción aplicada esta fuera del rango del tipo de infracción del infractor <br><b>'.$infra->nombre_i
                                                     , 'seccion' => 'infraccionysancion' ]],444);
                          }
                      }
                      if ($infra->tiposancion==3) {
                          if ($infra->sancionaplicada<$ffda[0]->servicio_desde || $infra->sancionaplicada>$ffda[0]->servicio_hasta) {
                             return response()->json([ 'errors' => ['sancionaplicada' =>
                                                       'La sanción aplicada esta fuera del rango del tipo de infracción del infractor <br><b>'.$infra->nombre_i
                                                     , 'seccion' => 'infraccionysancion' ]],444);
                          }
                      }
                      if ($infra->tiposancion==4) {
                          if ($infra->sancionaplicada<$ffda[0]->arresto_desde || $infra->sancionaplicada>$ffda[0]->arresto_hasta) {
                             return response()->json([ 'errors' => ['sancionaplicada' =>
                                                       'La sanción aplicada esta fuera del rango del tipo de infracción del infractor <br><b>'.$infra->nombre_i
                                                     , 'seccion' => 'infraccionysancion' ]],444);
                          }
                      }

                   }
                   if ($inmu[0]['idjuez']=="") {
                      return response()->json([ 'errors' => ['idjuez' => 'Falta seleccionar que juez va a firmar'
                                                           , 'seccion' => 'b_quienfirma' ]],430);
                   }
                   if ($inmu[0]['idsecretario']=="") {
                      return response()->json([ 'errors' => ['idjuez' => 'Falta seleccionar que secretario va a firmar'
                                                           , 'seccion' => 'b_quienfirma' ]],430);
                   }
                   if ($inmu[0]['expediente']==0) {
                       Log::debug('boletasController.php expediente en cero='.print_r(\Auth::user()->idjuzgado,true));
                       $data['expediente']=Boletas::getSiguienteexpediente(\Auth::user()->idjuzgado,substr($inmu[0]['diahechos'],0,4));
                   }
                   $data['idjuzgado']=\Auth::user()->idjuzgado;
         }
      }

      Log::debug('BoletasControler '.print_r($request->all(),true));
      $data['updatedby']=\Auth::user()->id;
      $dato = $inmu[0]->update($request->all());
      $dato = $inmu[0]->update($data);
      Log::debug('boletasController.php Despues de realizar el update='.print_r($dato,true)." tipo de inmu=".gettype($inmu[0]));
      if ($dato==0) {
          return response()->json([ 'errors' => ['cambio' => 'Hubo problemas al actualizar el inmueble']],430);
      } else {
          return response()->json($inmu[0],200);
      }


    }

    public function damefolio($inmu) {
    }

    public function upload($archivo,$id,$tipofile)
    {
      Log::debug(' inmueblesController.php upload='.print_r($archivo->getSize(),true));
      if ($archivo->getSize()>50000000) {
      //if ($archivo->getSize()>5000) {
          Log::debug(' inmueblesController.php se fue por el if='.print_r($archivo->getSize(),true));
          return [ 'errors' => ['file' => 'El tamano maximo por archivo es de 50MB']];
      }
      $x= new Files();
      return $x->upload($archivo,$id,$tipofile);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               $inmu=Inmuebles::where('id','=',$id)->get();
               if ($inmu->count()>0) {
                       $inmu[0]->delete();
                       return response()->json([ 'data' => ['id' => 'el inmueble fue borrado']],200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID no existe']],200);
               }
    }

    public function inmueblesByEstablecimientos($rfc) {
      $inmuebles = Inmuebles::where('rfc', '=', $rfc)->get();
      return view('secretaria.inmuebles-registrados-secretaria')->with('inmuebles', $inmuebles);
    }

    public function detalleInmueble($id) {
      $inmueble = Inmuebles::where('id', '=', $id)->first();
      $establecimiento = Establecimientos::where([
        ['rfc', '=', $inmueble->rfc],
        ['email_acreditado', '=', $inmueble->email_acreditado],
      ])->get();
      $tipoEstablecimiento = Tiposdeestablecimiento::where('id', '=', $establecimiento[0]->id_tipoestablecimiento)->first();
      $giro = Giros::where('id', '=', $establecimiento[0]->id_giro)->first();
      $zona = Zonasgeotecnica::where('id', '=', $inmueble->id_zonageotecnica)->first();
      $tipoConstruccion = Tiposdeconstruccion::where('id', '=', $inmueble->id_tipodeconstruccion)->first();
      $tipoCimentacion = Tiposdecimentacion::where('id', '=', $inmueble->id_tipodecimentacion)->first();
      $tipoEstructura = Tiposdeestructura::where('id', '=', $inmueble->id_tipodeestructura)->first();
      $simulacros = Simulacros::where('id_inmueble', '=', $inmueble->id)->get();
      $puntosr = Puntos_de_reunion::where('id_inmueble', '=', $inmueble->id)->get();
      $comitesGeneral = $inmueble->getComitesByAgrupacion('Coordinación general');
      $comitesJefaturas = $inmueble->getComitesByAgrupacion('Jefaturas');
      $brigadistaAuxilios = $inmueble->getComitesByAgrupacion('Brigadistas primeros auxilios');
      $brigadistasEvacuacion = $inmueble->getComitesByAgrupacion('Brigadistas de evacuación');
      $brigadistasPrevencion = $inmueble->getComitesByAgrupacion('Brigadistas de prevención, combate y extinción de incendios.');
      $brigadistasComunicacion = $inmueble->getComitesByAgrupacion('Brigadistas de comunicación');
      $brigadistasGAE = $inmueble->getComitesByAgrupacion('Brigadistas de apoyo especial (GAE)');
      $brigadistasApoyo = $inmueble->getComitesByAgrupacion('Brigadistas de grupo de apoyo psicosocial');
      $brigadistasMultifuncional = $inmueble->getComitesByAgrupacion('Brigadistas de multifuncional');
      Log::debug('pp/Http/Controllers/inmueblesController.ph brigadistasMultifuncional='.print_r($brigadistasMultifuncional,true));
      $data = array(
        'inmueble' => $inmueble,
        'establecimiento' => $establecimiento,
        'zona' => $zona,
        'tipoEstablecimiento' => $tipoEstablecimiento,
        'giro' => $giro,
        'tipoConstruccion' => $tipoConstruccion,
        'tipoCimentacion' => $tipoCimentacion,
        'tipoEstructura' => $tipoEstructura,
        'simulacros' => $simulacros,
        'general' => $comitesGeneral,
        'jefaturas' => $comitesJefaturas,
        'briAux' => $brigadistaAuxilios,
        'briEva' => $brigadistasEvacuacion,
        'briPre' => $brigadistasPrevencion,
        'briCom' => $brigadistasComunicacion,
        'briGAE' => $brigadistasGAE,
        'briApo' => $brigadistasApoyo,
        'briMul' => $brigadistasMultifuncional,
        'puntosr' => $puntosr,
      );
      return view('secretaria.establecimientos-secretarias')->with('data', $data);
    }

    function validate_curp($valor) {     
     if(strlen($valor)==18){         
        $letras     = substr($valor, 0, 4);
        $numeros    = substr($valor, 4, 6);         
        $sexo       = substr($valor, 10, 1);
        $mxState    = substr($valor, 11, 2); 
        $letras2    = substr($valor, 13, 3); 
        $homoclave  = substr($valor, 16, 2);
        if(ctype_alpha($letras) && ctype_alpha($letras2) && ctype_digit($numeros) && ctype_digit($homoclave) && $this->is_mx_state($mxState) && $this->is_sexo_curp($sexo)){ 
            return true; 
        }         
        return false;
     }else{
         return false; 
     } 
    }
    function is_mx_state($state){     
      $mxStates = [         
        'AS','BS','CL','CS','DF','GT',         
        'HG','MC','MS','NL','PL','QR',         
        'SL','TC','TL','YN','NE','BC',         
        'CC','CM','CH','DG','GR','JC',         
        'MN','NT','OC','QT','SP','SR',         
        'TS','VZ','ZS'     
      ];     
      if(in_array(strtoupper($state),$mxStates)){         
        return true;     
      }     
      return false; 
    }
    function is_sexo_curp($sexo){     
      $sexoCurp = ['H','M'];     
      if(in_array(strtoupper($sexo),$sexoCurp)){         
       return true;     
      }     
      return false; 
    }
    function edad($fecha) { 
       $tiempo = strtotime($fecha); 
       $ahora = time(); 
       $edad = ($ahora-$tiempo)/(60*60*24*365.25); 
       $edad = floor($edad); 
       return $edad; 
    } 
}
