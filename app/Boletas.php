<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Boletas extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    protected $fillable = [
'boleta_remision',
'placa1',
'areadeadscripcion_1',
'nombre_1',
'primer_apellido_1',
'segundo_apellido_1',
'placa2',
'areadeadscripcion_2',
'nombre_2',
'primer_apellido_2',
'segundo_apellido_2',
'id_mediotransporte_1',
'numerodepatrulla_1',
'id_mediotransporte_2',
'numerodepatrulla_2'

    ];
*/

protected $guarded = [];

   public static function getConcatalogosConLimite($user,$filtro=[]) {
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
                                       //',coalesce((select descripcion    from alcaldias alc where alc.id_cat_alcaldia=bole.id_alcaldia),\'\') desalcaldia '.
                                       ',case when coalesce(bole.estatus,0)=0 then \'Capturando\' else \'Capturado\' end desestatus'.
                                       ',coalesce(to_char(bole.diahechos,\'YYYY-MM-DD\'),\'\') diahechosS'.
                                       ',coalesce(to_char(bole.horahechos,\'HH:mm\'),\'\') horahechosS'.
                                       ',trim(coalesce(nombre_i,\'\')) || \' \' || trim(coalesce(primer_apellido_i,\'\')) || \' \' || trim(coalesce(segundo_apellido_i,\'\')) nombres'.
                                       ',coalesce(date_part(\'year\',age(nacimiento)),\'0\') edad'.
                                       ' ,coalesce(infra.sexo,\' \') as sexo '.
                                       ' from boletas bole'.
                                       ' left join infractores infra '.
                                       ' on bole.id=infra.idboleta '.
                                       //' and   inmu.email_acreditado=esta.email_acreditado '.
                                       $fila.$wlfiltro.
                                       ' ) a '.$fil);
         Log::debug('app/Inmuebles.php getConcatalogosConLimite='.print_r($datos,true));
         return $datos;
   }

}