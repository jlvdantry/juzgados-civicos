<?php
namespace App\Helpers;
use App\Colonias;
use App\Giros;
class Creajsons {
   function coloniasJ () {
      $datos = Colonias::all();
      $filename = base_path()."/resources/js/components/colonias.js";
         $handle = fopen($filename, 'w+');
      $map = $datos->map(function($items){
            $data['value'] = $items->id_colonia;
            $data['label'] = $items->colonia.' C.P. '.$items->codigo_postal;
            return $data;
      });
      $x=" export const  Colonias = ".$map->toJson().";";
         fputs($handle, $x);
         fclose($handle);
         echo $filename;
   }
   function giros () {
      $datos = Giros::all();
      $filename = base_path()."/resources/js/components/giros.js";
         $handle = fopen($filename, 'w+');
      $map = $datos->map(function($items){
            $data['value'] = $items->id;
            $data['label'] = $items->clave_scian.' '.$items->descripcion;
            return $data;
      });
      $x=" export const  Giros = ".$map->toJson().";";
         fputs($handle, $x);
         fclose($handle);
         echo $filename;
   }
}
?>

