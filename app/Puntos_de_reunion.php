<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class Puntos_de_reunion extends Model
{
    //
    protected $fillable = [
'id_inmueble', 'pr_ubicacion', 'pr_tipo', 'pr_otro', 'pr_m2_superficie', 'pr_capacidad', 'lat_pr', 'long_pr'
    ];
    public $table = 'puntos_de_reunion';

    public function getPuntobyID() {
        Log::debug('app/Puntos_de_reunion.php antes de select');
        $punto = Puntos_de_reunion::select('*')->where('id', $this->id)->get();
        Log::debug('app/Puntos_de_reunion.php despues de select');
        return $punto[0];
    }

    public function getPuntosbyInmueble($inmu) {
        $puntos = Puntos_de_reunion::select('*',DB::Raw('
                                       case when pr_tipo=\'C\' then \'Calle\'
                                            when pr_tipo=\'P\' then \'Parque\'
                                            when pr_tipo=\'J\' then \'Jardin\'
                                            when pr_tipo=\'CA\' then \'Camellon\'
                                            when pr_tipo=\'E\' then \'Estacionamiento\'
                                            when pr_tipo=\'O\' then \'Otro\'
                                            else \'No identificado\' end des_pr_tipo
                                   '))->where('id_inmueble', $inmu)->get();
        Log::debug('app/Puntos_de_reunion.php despues de select'.count($puntos));
        return $puntos;
    }


}
