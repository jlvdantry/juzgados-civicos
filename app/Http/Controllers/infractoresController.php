<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boletas;
use App\Infractores;
use App\Files;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class infractoresController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               $inmu=Infractores::where('id','=',$id)->get();
               if ($inmu->count()==0) {
                   return response()->json([ 'data' => ['id' => 'el ID no existe']],200);
               }
               if ($inmu[0]->estatus==1) {
                  return response()->json([ 'errors' => ['id' => 'No se puede dar de baja un infractor de un expediente que ya esta <b>capturado.']],430);
               }

               if ($inmu->count()>0) {
                       $inmu[0]->delete();
                       return response()->json([ 'data' => $inmu[0]],200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID no existe']],200);
               }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($boleta)
    {
               $filtro = [];
               array_push($filtro,['idboleta','=',$boleta]);
               $datos = Infractores::getConcatalogos(\Auth::user(),$filtro);
               if (count($datos)>0) {
                       return response()->json($datos,200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID de la boleta no existe']],200);
               }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $boleta
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($boleta,$id)
    {
               $filtro = [];
               array_push($filtro,['id','=',$id]);
               $datos = Infractores::getConcatalogos(\Auth::user(),$filtro);
               if (count($datos)>0) {
                       return response()->json($datos,200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID del infractor no existe']],200);
               }
    }

    public function store(Request $request,$boleta)
    {
      if ($boleta=='' || $boleta==0) {
                return response()->json([ 'errors' => ['boleta_remision' => 'Debe de teclear primer el numero de boleta ']],428);
      }

      $inmu=Boletas::where(['id' => $boleta])->get();
      if ($inmu->count()==0) {
            return response()->json([ 'errors' => ['boleta_remision' => 'El número de boleta <b>'.$boleta.' no existe']],429);
      }
      if ($inmu[0]->estatus==1) {
            return response()->json([ 'errors' => ['id' => 'No puede dar de alta un infractor de una boleta que tiene estatus de <b>capturado']],430);
      }

      if (!$request->has('nombre_i')) {
                return response()->json([ 'errors' => ['nombre_i' => 'El primer dato que debe teclear es el nombre','seccion' => 'datosgenerales']],428);
      }
      $dato = new Infractores(
         [
        'nombre_i' => $request->get('nombre_i'),
        'idboleta' => $boleta
      ]);


        try {
            $dato->save();
            return response()->json($dato);  /* despues de queda de alta el inmueble dentro del rfc lo actualiza */
        } catch (\Exception $e) {
            Log::debug('InmueblesControler storage='.$e->getMessage());
            return response()->json($e->getMessage(),400);
        };
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $boleta, $id)
    {
      $inmu=Boletas::where('id','=',$boleta)->get();
      if ($inmu->count()==0) {
            return response()->json([ 'errors' => ['id' => 'La identificación de la boleta no existe']],429);
      }
      if ($inmu[0]->estatus==1) {
            return response()->json([ 'errors' => ['id' => 'No se puede modificar la boleta que tiene estatus de <b>capturado']],430);
      }

      $infra=Infractores::where('id','=',$id)->get();
      if ($infra->count()==0) {
            return response()->json([ 'errors' => ['id' => 'La identificación del infractor no existe']],429);
      }


      Log::debug('Entro en update='.$id);
      $data=[];
      $dataf=[];
      foreach($request->all() as $key => $val) {
          if (substr($key,0,8)=='id_file_') {
              $comos=$this->upload($request[$key],$id,substr($key,8));
              Log::debug(' infractoresController.php queregreso='.print_r($comos,true));
              if (array_key_exists('errors',$comos)) {
                   Log::debug(' infractoresController.php si encontro errors='.print_r($comos,true));
                   return response()->json($comos,431);
              }
              $data[$key]=$comos['id'];
              $dataf['filesystem_'.substr($key,8)]=$comos['filesystem'];
          }
      }
      if (count($data)>0) {
          $dato = $infra[0]->update($data);
      } else { $dato = $infra[0]->update($request->all()); }
      Log::debug('infractoresController.php Despues de realizar el update='.print_r($dato,true)." tipo de inmu=".gettype($inmu[0]));
      if ($dato==0) {
          return response()->json([ 'errors' => ['cambio' => 'Hubo problemas al actualizar los datos del infractor']],430);
      } else {
          $infra[0]['filesystem']=$dataf;
          return response()->json($infra[0],200);
      }
    }

    public function upload($archivo,$id,$tipofile)
    {
      Log::debug('infractoresController.php upload='.print_r($archivo,true));
      if ($archivo->getSize()>50000000) {
      //if ($archivo->getSize()>5000) {
          Log::debug('infractoresController.php se fue por el if='.print_r($archivo->getSize(),true));
          return [ 'errors' => ['file' => 'El tamano maximo por archivo es de 50MB']];
      }
      $x= new Files();
      return $x->upload($archivo,$id,$tipofile);
    }



}
