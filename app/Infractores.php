<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Infractores extends Model
{
protected $guarded = [];

public static function getConcatalogos($user,$filtro=[]) {
         $wlfiltro="";
         $perfil=$user->getperfiles()->desperfil;
         $fil=' ';
         $fila=' ';
/*
         if ($perfil=='Alcaldia') {
               $fil='  where  nivel_riesgo not in(\'A\')';
               $fila=' and id_alcaldia in('.$user->id_alcaldia.') and inmu.estatus=1';
         }
         if ($perfil=='Tercero Acreditado') {
               $fila=' and inmu.email_acreditado in(\''.$user->email.'\') ';
         }
         if ($perfil=='Admon'
                 || $perfil=='Protección civil'
                        ) {
               $fil=' ';
               $fila=' ';
         }
*/
        foreach ($filtro as $k => $v) {
               $wlfiltro.=" where ".$filtro[$k][0]." ".$filtro[$k][1]." '".$filtro[$k][2]."'";
        }

         $datos = DB::select('select * from (select bole.* '.
                                       ',coalesce((select descripcion    from entidades alc where alc.id=bole.identidad),\'\') desentidad '.
                                       ',trim(coalesce(nombre_i,\'\')) || \' \' || trim(coalesce(primer_apellido_i,\'\')) || \' \' 
                                        || trim(coalesce(segundo_apellido_i,\'\')) nombre_completo'.
                                       ',coalesce(date_part(\'year\',age(nacimiento)),\'0\') edad'.
                                       ',coalesce(sexo,\'\') sexon'.
                                       ',(select id_filesystem from files f where f.id=bole.id_file_0001) as filesystem_0001 '.
                                       ',(select estatus from boletas bo where bo.id=bole.idboleta) estatus '.
                                       ', conlesiones'.
                                       ' from infractores bole'.
                                       $fila.$wlfiltro.
                                       ' ) a '.$fil);
         Log::debug('app/infractors.php getConcatalogosConLimite='.print_r($datos,true));
         return $datos;
     }
}
