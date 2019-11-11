<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletas;
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

      $inmu=Boletas::where(     ['boleta_remision' => $request->alias]
                          )->get();
      if ($inmu->count()>0) {
            return response()->json([ 'errors' => ['boleta_remision' => 'Ya existe una boleta con el numero <b>'.$request->boleta_remision]],429);
      }



      $dato = new Boletas(
         [
        'boleta_remision' => $request->get('boleta_remision'),
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
                   //return response()->json($inmu[0],200);
                   Log::debug('inmueblesController.ph quiere terminar captura='.print_r($inmu[0]['cambioestructura'],true));
                   if ($inmu[0]['cambioestructura']===true) {
                      Log::debug('inmueblesController.ph si entro en cambio de estructura=');
                      //$data['fechadelcambio']=$inmu[0]["fechadelcambio"];
                      $datetime1 = new DateTime();
                      $datetime2 = new DateTime($inmu[0]["fechadelcambio"]);
                      $interval = $datetime1->diff($datetime2);
                      $elapsed = $interval->format('%y');
                      if ($elapsed>50) {
                         Log::debug('inmueblesController.ph tiempo elapsed mayor a 50='.$elapsed );
                         return response()->json([ 'errors' => ['Fecha del cambio' => 'En la seccion de [Construccion y estructura].  La fecha del cambio no puede ser mayor a 50 años hacia atras']],430);
                      }
                   }

                   $xx = new Inmuebles();

                   $pr = new Puntos_de_reunion();
                   $falta=$pr->getPuntosbyInmueble($id);
                   if (count($falta)<1) {
                          return response()->json([ 'errors' => ['Faltan registrar puntos de reunión' => ["descripcion" => "Por lo menos se debe de registrar un punto de reunión"] ]],444);
                   }

                   $falta=$xx->getDocumentosfaltantesbyID($id);
                   if (count($falta)>0) {
                          return response()->json([ 'errors' => ['Faltan documentos' => $falta[0]]],444);
                   }
                   $si = new Simulacros();
                   $falta=$si->getSimulacrosbyInmueble($id);
                   if (count($falta)<1) {
                          return response()->json([ 'errors' => ['Faltan registrar simulacros' => ["descripcion" => "Por lo menos se debe de registrar un simulacro"] ]],444);
                   }
                   $filtro= [ 'rfc' => $inmu[0]->rfc, 'email_acreditado' => $inmu[0]->email_acreditado];
                   $datose = Establecimientos::where($filtro)->get();
                   if ($datose->count()==0) {
                      return response()->json([ 'errors' => ['rfc' => 'No existe un establecimiento con el rfc "'.
                                                   $request->get('rfc').'" para el acreditado con el email '.$request->get('email_acreditado')]],428);
                   }
                   if ($datose[0]->id_tipoestablecimiento==3) {  /* preguna por unidad habitacional */
                      $falta=$xx->getFigurasfaltantesUHbyID($id);
                      if (count($falta)>0) {
                          return response()->json([ 'errors' => ['Faltan puestos por definir en el Comité Interno<p>' => $falta[0]]],445);
                      }
                   } else {
                      $falta=$xx->getFigurasfaltantesbyID($id);
                      if (count($falta)>0) {
                          return response()->json([ 'errors' => ['Faltan puestos por definir en el Comité Interno<p>' => $falta[0]]],445);
                      }
                   }
                   Mail::to($datose[0]->email_acreditado)->send(new NotificacionRegistro($inmu[0]));
         }

      }

      if ($request->has('comites')) {
          Log::debug('Alta de un comite'.$id);
          $dato = new Comites ( [
          'id_inmueble'=>$id,
          'nombres'=>$request->nombres,
          'id_figuras'=>$request->id_figuras,
          'ape_pat'=>$request->ape_pat,
          'ape_mat'=>$request->ape_mat,
          'curp'=>$request->curp,
          'ape_mat'=>$request->ape_mat,
          'curp'=>$request->curp,
          'cargo'=>$request->cargo,
          $comos=$this->upload($request['id_file_0041'],$id,41),
          'id_file_0041'=>$comos['id']
          ]);
          try {
            $dato->save();
            Log::debug('InmueblesControler despues de grabar un comite');
            return response()->json(array($dato->getComitesbyID(),'id'=>$id),200);
          } catch (\Exception $e) {
            return response()->json($e->getMessage(),400);
          };
      }

      Log::debug('BoletasControler '.print_r($request->all(),true));
      if ($request->has('placa1')) {
         $data['placa1']=$request->placa1;
      }
      if ($request->has('areadeadscripcion_1')) {
         $data['areadeadscripcion_1']=$request->areadeadscripcion_1;
      }
/*
      foreach($request->all() as $key => $val) {
          if (substr($key,0,8)=='id_file_') {
              $comos=$this->upload($request[$key],$id,substr($key,8));
              Log::debug(' inmueblesController.php queregreso='.print_r($comos,true));
              if (array_key_exists('errors',$comos)) {
                   Log::debug(' inmueblesController.php si encontro errors='.print_r($comos,true));
                   return response()->json($comos,431);
              } 
              $data[$key]=$comos['id'];
              $dataf['filesystem_'.substr($key,8)]=$comos['filesystem'];
          }
      }
*/
      $dato = $inmu[0]->update($request->all());
      Log::debug('inmueblesController.php Despues de realizar el update='.print_r($dato,true)." tipo de inmu=".gettype($inmu[0]));
      if ($dato==0) {
          return response()->json([ 'errors' => ['cambio' => 'Hubo problemas al actualizar el inmueble']],430);
      } else {
          //$inmu[0]['filesystem']=$dataf;
          return response()->json($inmu[0],200);
      }


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
}
