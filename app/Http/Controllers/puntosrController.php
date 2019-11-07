<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Puntos_de_reunion;
use App\Inmuebles;

class puntorController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               $inmu=Puntos_de_reunion::where('id','=',$id)->get();
               if ($inmu->count()==0) {
                   return response()->json([ 'data' => ['id' => 'el ID no existe']],200);
               }
               $inmue=Inmuebles::where('id','=',$inmu[0]->id_inmueble)->get();
               if ($inmue->count()==0) {
                  return response()->json([ 'errors' => ['id' => 'La identificación del inmueble no existe']],429);
               }
               if ($inmue[0]->estatus==1) {
                  return response()->json([ 'errors' => ['id' => 'No se puede modificar el inmueble que tiene estatus de <b>capturado.']],430);
               }

               if ($inmu->count()>0) {
                       $inmu[0]->delete();
                       return response()->json([ 'data' => $inmu[0]],200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID no existe']],200);
               }
    }
}
