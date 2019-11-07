<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Simulacros;
use App\Inmuebles;

class simulacrosController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               $simu=Simulacros::where('id','=',$id)->get();
               $inmu=Inmuebles::where('id','=',$simu[0]->id_inmueble)->get();
               if ($inmu->count()==0) {
                  return response()->json([ 'errors' => ['id' => 'La identificación del inmueble no existe']],429);
               }
               if ($inmu[0]->estatus==1) {
                  return response()->json([ 'errors' => ['id' => 'No se puede modificar el inmueble que tiene estatus de <b>capturado.']],430);
               }

               if ($simu->count()>0) {
                       $simu[0]->delete();
                       return response()->json([ 'data' => ['id' => 'el simulacro fue borrado']],200);
               } else {
                   return response()->json([ 'data' => ['id' => 'el ID no existe']],200);
               }
    }
}
