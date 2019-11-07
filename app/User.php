<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Perfiles_users;
use App\Perfiles_menus;
use App\Alcaldias;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres', 'email', 'password','ape_pat','ape_mat','calle','rfc','sgirpc','id_nivel','vigencia','stps','exterior','interior'
         ,'colonia','id_alcaldia','cp','num_telefono','tipopersona','activo','cb','epmr','erv','rpar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();
        return $this->api_token;
    }
    public function getperfiles()
    {
         Log::debug('app/User.php id el usuarios='.$this->id);
        $perfiles = Perfiles_users::select('*',DB::Raw('(select descripcion from perfiles where perfiles.id=perfiles_users.idperfil) as desperfil'))->where('idusuario', '=', $this->id)->get();
         Log::debug('app/User.php cuantos perfiles='.count($perfiles));
        if (count($perfiles)==0) {
          return [ 'descripcion' => 'Sin perfil', 'desperfil' => 'Sin perfil' ] ;
        } else { 
          return $perfiles[0];
        }
    }

    public function getmenus($id)
    {
         Log::debug('app/User.php getmenus id el usuarios='.$this->id);
        $menus = Perfiles_menus::select('*',DB::Raw('(select descripcion from menus where menus.id=perfiles_menus.idmenu) as desmenu'.
                                                       ',(select componente from menus where menus.id=perfiles_menus.idmenu) as componente'
                                                       ))->where('idperfil', '=', $id)->get();
         Log::debug('app/User.php getmenus cuantos menus='.count($menus));
        if (count($menus)==0) {
          return [ 'descripcion' => 'Sin Menus' ] ;
        } else {
          return $menus;
        }
    }


    public static function estadistica($filtros)
    {
      $datos = DB::select('select (trim(coalesce(users.nombres,\'\')) || \' \' || trim(coalesce(users.ape_pat,\'\')) || \' \' || trim(coalesce(users.ape_mat,\'\'))) nombrecompleto '.
                          ', email '.
                          ', (select count(*) from establecimientos esta1 where users.email=esta1.email_acreditado) estable'.
                          ', (select count(*) from inmuebles inmu where users.email=inmu.email_acreditado ) inmu'.
                          ', (select count(*) from inmuebles inmu where users.email=inmu.email_acreditado and coalesce(estatus,0)=0) capturando'.
                          ', (select count(*) from inmuebles inmu where users.email=inmu.email_acreditado and coalesce(estatus,0)=1) capturados'.
                          ' from users '.
                          ' where (select count(*) from perfiles_users pu where pu.idusuario=users.id and idperfil=2)>0 '.
                          ' union all'.
                          ' select  '.
                          ' \'Total acreditados\' a '.
                          ',  cast(count(*) as varchar) email '.
                          ', sum(estable) estable, sum(inmu) inmu, sum(capturando) capturando, sum(capturados) capturados'.
                          ' from ('.
                          '    select (trim(coalesce(users.nombres,\'\')) || \' \' || trim(coalesce(users.ape_pat,\'\')) || \' \' || trim(coalesce(users.ape_mat,\'\'))) nombrecompleto '.
                          ', email '.
                          ', (select count(*) from establecimientos esta1 where users.email=esta1.email_acreditado) estable'.
                          ', (select count(*) from inmuebles inmu where users.email=inmu.email_acreditado ) inmu'.
                          ', (select count(*) from inmuebles inmu where users.email=inmu.email_acreditado and coalesce(estatus,0)=0) capturando'.
                          ', (select count(*) from inmuebles inmu where users.email=inmu.email_acreditado and coalesce(estatus,0)=1) capturados'.
                          ' from users '.
                          ' where (select count(*) from perfiles_users pu where pu.idusuario=users.id and idperfil=2)>0 '.
                          ' ) a '
                          );
      return $datos;
    }

    public static function getconCatalogosbyID($id)
    {
      $datos = DB::select('select users.*'.
                ',case when activo=0 then \'Pendiente\''.
                                               ' when activo=1 then \'Aceptado\''.
                                               ' when activo=2 then \'Rechazado\''.
                                               ' when activo=3 then \'Eliminado\''.
                                               ' else \'Desconocido\' end desactivo '.
                                  ', (trim(coalesce(nombres,\'\')) || \' \' || trim(coalesce(ape_pat,\'\')) || \' \' || trim(coalesce(ape_mat,\'\'))) nombrecompleto '.
                                  ',case '.
                                           ' when id_nivel=1 then \'Capacitación de brigadas de PC\''.
                                           ' when id_nivel=2 then \'Elaboración de programas internos para establecimientos o inmuebles de mediano riesgo\''.
                                           ' when id_nivel=3 then \'Elaboración de programas internos de PC para establecimientos o inmuebles de alto riesgo\''.
                                           ' when id_nivel=4 then \'Estudios de riesgo de vulnerabilidad\''.
                                           ' else \'Desconocido\' end desnivel '.
                                  ',(select descripcion from perfiles pe where pe.id in '.
                                          '(select idperfil from perfiles_users where idusuario=users.id) order by id desc limit 1) desperfil '.
                                  ',(select id from perfiles pe where pe.id in '.
                                         '(select idperfil from perfiles_users where idusuario=users.id) order by id desc limit 1) idperfil '.
                                  ',(select descripcion from alcaldias where id_cat_alcaldia = users.id_alcaldia) desalcaldia'.
                   ' from users where id=:id',['id' => $id]);
      Log::debug('app/User.php getconCatalogosbyID id='.print_r($datos[0],true));
      return $datos[0];
    }

    public function getFullName() {
        return $this->nombres.' '.$this->ape_pat;
    }

    public function getAlcaldia() {
        $alcaldia = Alcaldias::where('id_cat_alcaldia', '=', $this->id_alcaldia)->first();
        return $alcaldia ? $alcaldia->descripcion : '';
    }

}
