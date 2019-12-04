<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Boletas extends Model
{
    use Notifiable;


protected $guarded = [];

   public static function getSiguienteexpediente($idjuzgado,$ano) {
       $folio = DB::select('select coalesce(max(expediente),0)+1 ultimo from boletas where idjuzgado='.$idjuzgado.' and diahechos between \''.$ano.'/01/01\''.
                            ' and \''.$ano.'/12/31\' and estatus=1'); 
       Log::debug('app/Boletas.php getSiguienteexpediente='.print_r($folio,true));
       return $folio[0]->ultimo;
   }
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
               if ($wlfiltro=="") {
                   $wlfiltro.=" where ".$filtro[$k][0]." ".$filtro[$k][1]." '".$filtro[$k][2]."'";
               } else {
                   $wlfiltro.=" or  ".$filtro[$k][0]." ".$filtro[$k][1]." '".$filtro[$k][2]."'";
               }
        }

         $datos = DB::select('select *,case when expediente=0 then \'0\' else desjuzgado||\'-\'||boleta_remision||\'-\'||lpad(expediente::varchar,6,\'0\') end '.
                                       ' noexpediente from (select bole.* '.
                                       ',coalesce((select descripcion from alcaldias alc where alc.id_cat_alcaldia=bole.id_alcaldia_h),\'\') desalcaldia '.
                                       ',coalesce((select juzgado from juzgados juz where juz.id=bole.idjuzgado),\'\') desjuzgado '.
                                       ',case when coalesce(bole.estatus,0)=0 then \'Capturando\' else \'Capturado\' end desestatus'.
                                       ',coalesce(to_char(bole.diahechos,\'YYYY-MM-DD\'),\'\') diahechosS'.
                                       ',coalesce(to_char(bole.horahechos,\'HH:mm\'),\'\') horahechosS'.
                                       ',trim(coalesce(nombre_i,\'\')) || \' \' || trim(coalesce(primer_apellido_i,\'\')) || \' \' || '.
                                       '       trim(coalesce(segundo_apellido_i,\'\')) nombres'.
                                       ',(select trim(coalesce(nombres,\'\')) || \' \' || trim(coalesce(ape_pat,\'\')) || \' \' || '.
                                       '       trim(coalesce(ape_mat,\'\')) from users usr where usr.id=bole.idjuez) nombrejuez '.
                                       ',(select trim(coalesce(nombres,\'\')) || \' \' || trim(coalesce(ape_pat,\'\')) || \' \' || '.
                                       '       trim(coalesce(ape_mat,\'\')) from users usr where usr.id=bole.idsecretario) nombresecretario '.
                                       ',coalesce(date_part(\'year\',age(nacimiento)),\'0\') edad'.
                                       ' ,coalesce(infra.sexo,\' \') as sexo '.
                                       ',coalesce((select descripcion from alcaldias alc where alc.id_cat_alcaldia=infra.id_alcaldia_i),\'\') desalcaldia_i '.
                                       ', infra.calle_i, infra.exterior_i, infra.interior_i, infra.colonia_i, infra.curp'.
                                       ', ones.infraccion, ones.articulo, ones.fraccion '.
                                       ',  infra.id idinfractor, infra.declaracion, infra.tirilla,infra.tiposancion,infra.sancionaplicada '.
                                       ',  ones.n, ones.o, ones.p, ones.q,  ones.r, ones.s, ones.t, ones.u,  ones.v, ones.w, ones.x, ones.y, ones.z'.
                                       ',  ones.aa, ones.ab, ones.ac, ones.ad,  ones.ae, ones.af, ones.ag, ones.ah,  ones.ai, ones.aj, ones.ak, ones.al, ones.am'.
                                       ',  ones.an, ones.ao '.
                                       ',  id_filesystem '.
                                       ' from boletas bole'.
                                       ' left join infractores infra on bole.id=infra.idboleta '.
                                       ' left join infracciones  ones on ones.id=infra.idinfraccion '.
                                       ' left join files  on files.id=infra.id_file_0001 '.
                                       //' and   inmu.email_acreditado=esta.email_acreditado '.
                                       $fila.$wlfiltro.
                                       ' ) a '.$fil.' order by created_at desc limit 100');
         Log::debug('app/Inmuebles.php getConcatalogosConLimite='.print_r($datos,true));
         return $datos;
   }

}
