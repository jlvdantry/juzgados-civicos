<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Establecimientos;
use App\Inmuebles;
use App\Simulacros;
use App\Comites;
use App\User;
use App\Puntos_de_reunion;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class establecimientosController extends Controller
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
           array_push($filtro,['rfc','like',"%$request->rfc%"]);
        }
      }
      if ($request->has('nombres')) {
        if (strlen($request->nombres)>0) {
           array_push($filtro,['nombres','like',"%$request->nombres%"]);
        }
      }
      if ($request->has('email_acreditado')) {
        if (strlen($request->email_acreditado)>0) {
           array_push($filtro,['email_acreditado','like',"%$request->email_acreditado%"]);
        }
      }
      Log::debug('EstablecimientosControler auth='.print_r($filtro,true));

      if (count($filtro)==0) {
         $datos = Establecimientos::getConcatalogosConLimite(\Auth::user());
         return response()->json($datos);
      } else {
         $datos = Establecimientos::getConcatalogosConLimite(\Auth::user(),$filtro);
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      if (!$request->has('email_acreditado')) {
                return response()->json([ 'errors' => ['email_acreditado' => 'No esta identificado el email del tercero acreditado']],425);
      };
      if (!$request->has('nombres')) {
                return response()->json([ 'errors' => ['nombres' => 'el nombre o razon social es obligatorio']],426);
      };

      if (!$request->has('rfc')) {
                return response()->json([ 'errors' => ['rfc' => 'el numero de RFC es obligatorio']],427);
      } else {
        if (strlen($request->get('rfc'))>13 || strlen($request->get('rfc'))<12) {
                return response()->json([ 'errors' => ['rfc' => 'el número de RFC debe contener entre 12 y 13 dígitos']],427);
        }
      }
      $dato = User::where('email','=',$request->get('email_acreditado'))->get();
      if ($dato->count()==0) {
                return response()->json([ 'errors' => ['email_acreditado' => 'No existe el email del tercero acreditado']],428);
      }

      $quedatos = [
        'nombres' => $request->get('nombres'),
        'ape_pat' => $request->get('ape_pat'),
        'ape_mat' => $request->get('ape_mat'),
        'rfc' => $request->get('rfc'),
        'folioacta' => $request->get('folioacta'),
        'numeroescritura' => $request->get('numeroescritura'),
        'numeronotario' => $request->get('numeronotario'),
        'id_giro' => $request->get('id_giro'),
        'tipopersona_' => $request->get('tipopersona_'),
        'tipopersona' => $request->get('tipopersona'),
        'nombres_rl' => ($request->get('tipopersona_')=='F' ? $request->get('nombres_rl') : $request->get('razon_social_rl')) ,
        'ape_pat_rl' => $request->get('ape_pat_rl'),
        'ape_mat_rl' => $request->get('ape_mat_rl'),
        'email_rl' => $request->get('email_rl'),
        'folioacta_rl' => $request->get('folioacta_rl'),
        'fechadeotorgamiento' => $request->get('fechadeotorgamiento'),
        'nombreexpide' => $request->get('nombreexpide'),
        'numeronotario_el' => $request->get('numeronotario_el'),
        'id_entidad' => $request->get('id_entidad'),
        'nombres_re' => $request->get('nombres_re'),
        'ape_pat_re' => $request->get('ape_pat_re'),
        'ape_mat_re' => $request->get('ape_mat_re'),
        'email_re' => $request->get('email_re'),
        'sector' => $request->get('sector'),
        'inmueblees' => $request->get('inmueblees'),
        'cartac_vigencia' => $request->get('cartac_vigencia'),
        'id_identificacion' => $request->get('id_identificacion'),
        'folioIdentificacion' => $request->get('folioIdentificacion'),
        'id_nacionalidad' => $request->get('id_nacionalidad'),
        'email_acreditado' => $request->get('email_acreditado'),
        'id_tipoestablecimiento' => $request->get('id_tipoestablecimiento')
      ];
      $dato = new Establecimientos($quedatos);
        try {
            $busca= [ 'rfc' => $request->get('rfc'),'email_acreditado' => $request->get('email_acreditado')];
            $datotel = Establecimientos::where($busca)->get();
            if ($datotel->count()>=1) {
                Log::debug('EstablecimientosControler quedatos='.print_r($quedatos,true));
                $datotel[0]->update($quedatos);
                return response()->json([ 'msg' => 'el establecimiento con RFC '.$request->get('rfc').' fue actualizado'],200);
            }

            $dato->save();
            return response()->json([ 'msg' => 'Se dio de alta el establecimiento con RFC '.$request->get('rfc')],200);
        } catch (\Exception $e) {
            Log::debug('EstablecimientosControler storage='.$e->getMessage());
            //return response()->json($e->getMessage(),400);
            return response()->json([ 'errors' => ['alta' => $e->getMessage()]],417);
        };


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$inm=0)
    {
          Log::debug('EstablecimientosControler show id='.$id." in=".$inm);
          if(strlen($id)>11)  {  /* la busqueda es por rfc */
               $inmu=Establecimientos::where('rfc','=',$id)->get();
               if ($inmu->count()>0) {
                   if ($inmu[0]['email_acreditado']==\Auth::user()->email) {
                       if ($inmu[0]['tipopersona_']=='M') {
                           $inmu[0]['razon_social_rl']=$inmu[0]['nombres_rl'];
                       }
                       return response()->json($inmu[0],200);
                   } else {
                       return response()->json([ 'errors' => ['rfc' => 'el RFC ya esta registrado con otro acreditado']],427);
                   }
               } else {
                   return response()->json([ 'data' => ['rfc' => 'el RFC no existe']],200);
               }
          } else {
               $esta=Establecimientos::where('id','=',$id)->get();
               if ($esta->count()>0) {
                   if ($esta[0]['tipopersona_']=='M') {
                           $esta[0]['razon_social_rl']=$esta[0]['nombres_rl'];
                   }
                   if ($inm>0) {
                      $inmx = new Inmuebles();
                      $rinmu=$inmx->getInmueblebyID($inm);
                      $esta[0]['rinmu']=$rinmu;
                      $simuc = new Simulacros();
                      $simu=$simuc->getSimulacrosbyInmueble($inm);
                      $esta[0]['simu']=$simu;
                      $comic = new Comites();
                      $comi=$comic->getComitesByInmueble($inm);
                      $esta[0]['comi']=$comi;
                      $puntor = new Puntos_de_reunion();
                      $punto=$puntor->getPuntosByInmueble($inm);
                      $esta[0]['punt']=$punto;
                   }
                   return response()->json($esta[0],200);
               } else {
                   return response()->json([ 'data' => ['rfc' => 'el ID no existe']],200);
               }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          if(strlen($id)>11)  {
               $inmu=Establecimientos::where('rfc','=',$id)->get();
               if ($inmu->count()>0) {
                   if ($inmu[0]['email_acreditado']==\Auth::user()->email) {
                       $inmu[0]->delete();
                       Log::debug('EstablecimientosControler show inmu='.print_r($inmu,true));
                       return response()->json([ 'data' => ['rfc' => 'el RFC fue borrado']],200);
                   } else {
                       return response()->json([ 'errors' => ['rfc' => 'el RFC ya esta registrado con otro acreditado']],427);
                   }
               } else {
                   return response()->json([ 'data' => ['rfc' => 'el RFC no existe']],200);
               }
          } else {
               $inmu=Establecimientos::where('id','=',$id)->get();
               if ($inmu->count()>0) {
                       $inmu[0]->delete();
                       return response()->json([ 'data' => ['rfc' => 'el inmueble fue borrado']],200);
               } else {
                   return response()->json([ 'data' => ['rfc' => 'el ID no existe']],200);
               }
          }
    }


    public function destroyRfcEmailA($rfc,$email)
    {
               $filtro=[ 'rfc' => $rfc, 'email_acreditado' => $email ];
               $esta=Establecimientos::where($filtro)->get();
               if ($esta->count()>0) {
                       Inmuebles::where($filtro)->delete();
                       $esta[0]->delete();
                       return response()->json([ 'data' => ['rfc' => 'el establecimiento fue borrado con todo y sus inmuebles']],200);
               } else {
                   return response()->json([ 'data' => ['rfc' => 'el establecimiento no esta registrado por el  acreditado con email '.$email ]],200);
               }
    }


    public function establecimientosIndex()
    {
        $establecimientos = DB::table('establecimientos')
        ->join('giros', 'giros.id', '=', 'establecimientos.id_giro')
        ->where('nivel_riesgo', '=', 'A')
        ->get();
        return view('secretaria.establecimientos-registrados-secretaria-todos')->with('establecimientos',$establecimientos);
    }

    public function busquedaEstablecimientoSolicitante($name, $rfc) {
        Log::debug('EstablecimientosControler name='.$name."rfc=".$rfc);
        $establecimientos = Establecimientos::where('nombres', 'like', '%' .$name. '%')
            ->orWhere('ape_pat', 'like', '%' .$name. '%')
            ->orWhere('rfc', 'like', '%' .$rfc. '%')
            ->get();
        $data = array();
        foreach ($establecimiento as $establecimiento) {
            $tercero = $establecimiento->getRegistrante()->getFullName();
            $solicitante = $establecimiento->getFullName();
            $rfc = $establecimiento->rfc;
            $seleccionado = $establecimiento->seleccionado;
            $data[] = [
                'tercero' => $tercero,
                'solicitante' => $solicitante,
                'rfc' => $rfc,
                'seleccionado' =>$seleccionado
            ];
        }
        return response()->json([ 'data' => $data], 200);
    }
}
