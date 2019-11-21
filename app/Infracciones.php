<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Infracciones extends Model
{

     public static function getConcatalogos($filtro=[]) {
         $wlfiltro="";
         foreach ($filtro as $k => $v) {
               $wlfiltro.=" where ".$filtro[$k][0]." ".$filtro[$k][1]." '".$filtro[$k][2]."'";
         }
         $datos = DB::select('select * from (select infra.* '.
                                       ',sanciones.uc_desde '.
                                       ',sanciones.uc_hasta '.
                                       ',sanciones.servicio_desde '.
                                       ',sanciones.servicio_hasta '.
                                       ',sanciones.arresto_desde '.
                                       ',sanciones.arresto_hasta '.
                                       ',sanciones.id idsancion '.
                                       ',sanciones.sancion '.
                                       ' from infracciones infra'.
                                       ' left join sanciones on  infra.tipo_sancion=sanciones.sancion '.
                                       $wlfiltro.
                                       ' ) a ');
         Log::debug('app/infracciones.php getConcatalogos='.print_r($datos,true));
         return $datos;
     }
}
