<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inmuebles;
use App\Establecimientos;
use App\Files;
use App\Simulacros;
use App\Comites;
use App\Zonasgeotecnica;
use App\Tiposdeconstruccion;
use App\Tiposdecimentacion;
use App\Tiposdeestructura;
use App\Tiposdeestablecimiento;
use App\Giros;
use App\Puntos_de_reunion;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Mail\NotificacionRegistro;
use Mail;
use DateTime;

class inmueblesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $filtro=array();
      if ($request->has('rfc')) {
        if (strlen($request->rfc)>0) {
           array_push($filtro,['inmu.rfc','like',"%$request->rfc%"]);
        }
      }
      if ($request->has('calle')) {
           array_push($filtro,['calle','like',"%$request->calle%"]);
      }
      if ($request->has('alias')) {
        if (strlen($request->alias)>0) {
           array_push($filtro,['alias','like',"%$request->alias%"]);
        }
      }
      if ($request->has('id_alcaldia')) {
        if (strlen($request->id_alcaldia)>0) {
           array_push($filtro,['id_alcaldia','=',"$request->id_alcaldia"]);
        }
      }

      Log::debug('InmueblesControler auth='.print_r($filtro,true));

      if (count($filtro)==0) {
         $datos = Inmuebles::getConcatalogosConLimite(\Auth::user());
         return response()->json($datos);
      } else {
         $datos = Inmuebles::getConcatalogosConLimite(\Auth::user(),$filtro);
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
    public function store(Request $request,$boleta)
    {

      if ($boleta=='' || $boleta==0) {
                return response()->json([ 'errors' => ['boleta_remision' => 'Debe de teclear primer el numero de boleta ']],428);
      }



      $inmu=Boletas::where(['boleta_remision' => $boleta])->get();
      if ($inmu->count()==0) {
            return response()->json([ 'errors' => ['boleta_remision' => 'El número de boleta <b>'.$boleta.' no existe']],429);
      }

      if (!$request->has('nombre_i')) {
                return response()->json([ 'errors' => ['nombre_i' => 'El primer dato que debe teclear es el nombre']],428);
      }
      $dato = new Infractores(
         [
        'nombre_i' => $request->get('nombre_i'),
      ]


        try {
            $dato->save();
            return response()->json($dato);  /* despues de queda de alta el inmueble dentro del rfc lo actualiza */
        } catch (\Exception $e) {
            Log::debug('InmueblesControler storage='.$e->getMessage());
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
          if(strlen($id)>11)  {   /* la consulta es por RFC */
               $inmu=Inmuebles::select('*',DB::Raw('case when coalesce(estatus,0)=0 then \'Capturando\' else \'Capturado\' end desestatus'.
                                                   ',trim(coalesce(calle,\'\')) || \' \'  || trim(coalesce(exterior,\'\')) || \' \' || trim(coalesce(interior,\'\')) calle_completa'))->where('rfc','=',$id)->get();
               if ($inmu->count()>0) {
                   Log::debug('inmueblesControler show email en establecimiento del acreditado='.print_r($inmu[0],true));
                   return response()->json($inmu,200);
               } else {
                   return response()->json([ 'data' => ['rfc' => 'No tiene inmuebles registrados el establecimiento']],200);
               }
          } else {
               $inmu=Inmuebles::select('*',DB::Raw('case when coalesce(estatus,0)=0 then \'Capturando\' else \'Capturado\' end desestatus'.
                                                   ',trim(coalesce(calle,\'\')) || \' \'  || trim(coalesce(exterior,\'\')) || \' \' || trim(coalesce(interior,\'\')) calle_completa'))->where('id','=',$id)->get();
               if ($inmu->count()>0) {
                       return response()->json($inmu[0],200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID del inmueble no existe']],200);
               }
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
      $inmu=Inmuebles::where('id','=',$id)->get();
      if ($inmu->count()==0) {
            return response()->json([ 'errors' => ['id' => 'La identificación del inmueble no existe']],429);
      }
      if ($inmu[0]->estatus==1) {
            return response()->json([ 'errors' => ['id' => 'No se puede modificar el inmueble que tiene estatus de <b>capturado']],430);
      }

      if (!$request->has('rfc')) {
                return response()->json([ 'errors' => ['rfc' => 'El RFC del inmueble no esta identificado y es obligatorio']],427);
      } else {
        if (strlen($request->get('rfc'))>13 || strlen($request->get('rfc'))<12) {
                return response()->json([ 'errors' => ['rfc' => 'El número de RFC debe contener entre 12 y 13 dígitos']],427);
        }
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

      if ($request->has('simulacros')) {
          $quef='0';
          if ($request->has('id_file_0040')) {
               $comos=$this->upload($request['id_file_0040'],$id,40);
               $quef=$comos['id'];
          }
          $dato = new Simulacros ( [
          'id_inmueble'=>$id,
          'fecha'=>$request->fecha,
          'id_tipodesimulacro'=>$request->id_tipodesimulacro,
          'hipotesis'=>$request->hipotesis,
          'id_file_0040'=> $quef
          ]);
          try {
            $dato->save();
            Log::debug('InmueblesControler despues de grabar un simulacro');
            return response()->json(array($dato->getSimulacrosbyID(),'id'=>$id),200);
          } catch (\Exception $e) {
            Log::debug('InmueblesControler storage='.$e->getMessage());
            return response()->json($e->getMessage(),400);
          };
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

      if ($request->has('puntosdereunion')) {
          Log::debug('Alta de un punto de reunion'.$id);
          $dato = new Puntos_de_reunion ( [
          'id_inmueble'=>$id,
          'pr_ubicacion'=>$request->pr_ubicacion,
          'pr_tipo'=>$request->pr_tipo,
          'pr_otro'=>$request->pr_otro,
          'pr_m2_superficie'=>$request->pr_m2_superficie,
          'pr_capacidad'=>$request->pr_capacidad,
          'lat_pr'=>$request->lat_pr,
          'long_pr'=>$request->long_pr
          ]);
          try {
            $dato->save();
            Log::debug('InmueblesControler despues de grabar un punto de reunion');
            return response()->json(array($dato->getPuntobyID(),'id'=>$id),200);
          } catch (\Exception $e) {
            return response()->json($e->getMessage(),400);
          };

      }

      if ($request->has('calle')) {
         $data['calle']=$request->calle;
      }
      if ($request->has('exterior')) {
         $data['exterior']=$request->exterior;
      }
      if ($request->has('interior')) {
         $data['interior']=$request->interior;
      }
      if ($request->has('rfc')) {
         $data['rfc']=$request->rfc;
      }
      if ($request->has('colonia')) {
         $data['colonia']=$request->colonia;
      }
      if ($request->has('id_alcaldia')) {
         $data['id_alcaldia']=$request->id_alcaldia;
      }
      if ($request->has('cp')) {
         $data['cp']=$request->cp;
      }
      if ($request->has('entrecalle')) {
         $data['entrecalle']=$request->entrecalle;
      }
      if ($request->has('ycalle')) {
         $data['ycalle']=$request->ycalle;
      }
      if ($request->has('aladerecha')) {
         $data['aladerecha']=$request->aladerecha;
      }
      if ($request->has('alaizquierda')) {
         $data['alaizquierda']=$request->alaizquierda;
      }
      if ($request->has('m2_terreno')) {
         $data['m2_terreno']=$request->m2_terreno;
      }
      if ($request->has('m2_construidos')) {
         $data['m2_construidos']=$request->m2_construidos;
      }
      if ($request->has('niveles_ocupados')) {
         $data['niveles_ocupados']=$request->niveles_ocupados;
      }
      if ($request->has('niveles_inmueble')) {
         $data['niveles_inmueble']=$request->niveles_inmueble;
      }
      if ($request->has('l_d')) {
         $data['l_d']=$request->l_d;
      }
      if ($request->has('l_a')) {
         $data['l_a']=$request->l_a;
      }
      if ($request->has('ma_d')) {
         $data['ma_d']=$request->ma_d;
      }
      if ($request->has('ma_a')) {
         $data['ma_a']=$request->ma_a;
      }
      if ($request->has('mi_d')) {
         $data['mi_d']=$request->mi_d;
      }
      if ($request->has('mi_a')) {
         $data['mi_a']=$request->mi_a;
      }
      if ($request->has('j_d')) {
         $data['j_d']=$request->j_d;
      }
      if ($request->has('j_a')) {
         $data['j_a']=$request->j_a;
      }
      if ($request->has('v_d')) {
         $data['v_d']=$request->v_d;
      }
      if ($request->has('v_a')) {
         $data['v_a']=$request->v_a;
      }
      if ($request->has('s_a')) {
         $data['s_a']=$request->s_a;
      }
      if ($request->has('s_d')) {
         $data['s_d']=$request->s_d;
      }
      if ($request->has('d_d')) {
         $data['d_d']=$request->d_d;
      }
      if ($request->has('d_a')) {
         $data['d_a']=$request->d_a;
      }
      if ($request->has('pantalla')) {
         $data['pantalla']=$request->pantalla;
      }
      if ($request->has('po_fija_esta')) {
         $data['po_fija_esta']=$request->po_fija_esta;
      }
      if ($request->has('po_fija_inmue')) {
         $data['po_fija_inmue']=$request->po_fija_inmue;
      }
      if ($request->has('po_flotante')) {
         $data['po_flotante']=$request->po_flotante;
      }
      if ($request->has('po_disca_fisica')) {
         $data['po_disca_fisica']=$request->po_disca_fisica;
      }
      if ($request->has('po_disca_visual')) {
         $data['po_disca_visual']=$request->po_disca_visual;
      }
      if ($request->has('po_disca_audi')) {
         $data['po_disca_audi']=$request->po_disca_audi;
      }
      if ($request->has('po_disca_intele')) {
         $data['po_disca_intele']=$request->po_disca_intele;
      }
      if ($request->has('po_disca_mental')) {
         $data['po_disca_mental']=$request->po_disca_mental;
      }
      if ($request->has('po_lactantes')) {
         $data['po_lactantes']=$request->po_lactantes;
      }
      if ($request->has('id_zonageotecnica')) {
         $data['id_zonageotecnica']=$request->id_zonageotecnica;
      }
      if ($request->has('id_tipodeconstruccion')) {
         $data['id_tipodeconstruccion']=$request->id_tipodeconstruccion;
      }
      if ($request->has('id_tipodecimentacion')) {
         $data['id_tipodecimentacion']=$request->id_tipodecimentacion;
      }
      if ($request->has('id_tipodeestructura')) {
         $data['id_tipodeestructura']=$request->id_tipodeestructura;
      }
      if ($request->has('cambioestructura')) {
         $data['cambioestructura']=$request->cambioestructura;
      }
      if ($request->has('fechadelcambio')) {
         $data['fechadelcambio']=$request->fechadelcambio;
         $datetime1 = new DateTime();
         $datetime2 = new DateTime($data['fechadelcambio']);
         $interval = $datetime1->diff($datetime2);
         $elapsed = $interval->format('%y');
         Log::debug(' elapsed='.$elapsed);
         if ($elapsed>50) {
          return response()->json([ 'errors' => ['Fecha del cambio' => 'La fecha del cambio no puede ser mayor a 50 años hacia atras']],430);
         }
      }
      if ($request->has('pr_ubicacion')) {
         $data['pr_ubicacion']=$request->pr_ubicacion;
      }
      if ($request->has('pr_tipo')) {
         $data['pr_tipo']=$request->pr_tipo;
      }
      if ($request->has('pr_otro')) {
         $data['pr_otro']=$request->pr_otro;
      }
      if ($request->has('pr_m2_superficie')) {
         $data['pr_m2_superficie']=$request->pr_m2_superficie;
      }
      if ($request->has('pr_capacidad')) {
         $data['pr_capacidad']=$request->pr_capacidad;
      }
      if ($request->has('alias')) {
          $inmualias=Inmuebles::where(     ['alias' => $request->alias],
                                  ['rfc' => $inmu[0]->rfc],
                                  ['email_acreditado' => $inmu[0]->email_acreditado]
                          )->get();
          if ($inmualias->count()>0) {
            return response()->json([ 'errors' => ['alias' => 'Ya existe un inmueble con el alias <b>'.$request->alias]],499);
         }
         $data['alias']=$request->alias;
      }
      if ($request->has('lat')) {
         $data['lat']=$request->lat;
      }
      if ($request->has('long')) {
         $data['long']=$request->long;
      }
      if ($request->has('lat_pr')) {
         $data['lat_pr']=$request->lat_pr;
      }
      if ($request->has('long_pr')) {
         $data['long_pr']=$request->long_pr;
      }
      if ($request->has('ce_maco')) {
         $data['ce_maco']=$request->ce_maco;
      }
      if ($request->has('ce_anocons')) {
         $data['ce_anocons']=$request->ce_anocons;
      }
      if ($request->has('ce_niveles_totales')) {
         $data['ce_niveles_totales']=$request->ce_niveles_totales;
      }
      if ($request->has('ce_in_hidrosanitarias')) {
         $data['ce_in_hidrosanitarias']=$request->ce_in_hidrosanitarias;
      }
      if ($request->has('ce_in_electricas')) {
         $data['ce_in_electricas']=$request->ce_in_electricas;
      }
      if ($request->has('ce_in_especiales')) {
         $data['ce_in_especiales']=$request->ce_in_especiales;
      }
      if ($request->has('ce_elevadores')) {
         $data['ce_elevadores']=$request->ce_elevadores;
      }
      if ($request->has('ce_crsp')) {
         $data['ce_crsp']=$request->ce_crsp;
      }
      if ($request->has('ce_matt')) {
         $data['ce_matt']=$request->ce_matt;
      }
      if ($request->has('estatus')) {
         $data['estatus']=$request->estatus;
      }
      if ($request->has('pcd_amenazabomba')) {
         $data['pcd_amenazabomba']=$request->pcd_amenazabomba;
      }
      if ($request->has('pcd_erupcion')) {
         $data['pcd_erupcion']=$request->pcd_erupcion;
      }
      if ($request->has('pcd_incendio')) {
         $data['pcd_incendio']=$request->pcd_incendio;
      }
      if ($request->has('pcd_inundacion')) {
         $data['pcd_inundacion']=$request->pcd_inundacion;
      }
      if ($request->has('pcd_restablecimiento')) {
         $data['pcd_restablecimiento']=$request->pcd_restablecimiento;
      }
      if ($request->has('pcd_sismo')) {
         $data['pcd_sismo']=$request->pcd_sismo;
      }
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
      $dato = $inmu[0]->update($data);
      Log::debug('inmueblesController.php Despues de realizar el update='.print_r($data,true)." tipo de inmu=".gettype($inmu[0]));
      if ($dato==0) {
          return response()->json([ 'errors' => ['cambio' => 'Hubo problemas al actualizar el inmueble']],430);
      } else {
          $inmu[0]['filesystem']=$dataf;
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
