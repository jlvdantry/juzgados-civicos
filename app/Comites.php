<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Figuras;
use App\Files;


class Comites extends Model
{

    use Notifiable;
    //
    protected $fillable = [
'id_inmueble','id_figuras','nombres','ape_pat','ape_mat','curp','cargo','id_file_0041'
    ];

    public function getComitesbyID() {
        Log::debug('app/Comites.php antes de select');
        $comites = Comites::select('*',DB::Raw('(select descripcion || \'-\' || agrupacion from figuras ts where ts.id=comites.id_figuras) as descomites
                                   , (select id_filesystem from files f where f.id=comites.id_file_0041) as filesystem'))->where('id', $this->id)->get();
        Log::debug('app/Comites.php despues de select');
        return $comites[0];
    }

    public function getComitesbyInmueble($inmu) {
        Log::debug('app/Comites.php antes de select');
        $comites = Comites::select('*',DB::Raw('(select descripcion || \'-\' || agrupacion from figuras ts where ts.id=comites.id_figuras) as descomites
                                   ,(select unapersona from figuras ts where ts.id=comites.id_figuras) as unapersona 
                                   , (select id_filesystem from files f where f.id=comites.id_file_0041) as filesystem'))->where('id_inmueble', $inmu)->get();
        Log::debug('app/Comites.php despues de select'.count($comites));
        return $comites;
    }

    public function getFigura() {
        return Figuras::where('id', '=', $this->id_figuras)->first();
    }

    public function getConstancia() {
        return Files::where('id', '=', $this->id_file_0041)->first();   
    }
}
