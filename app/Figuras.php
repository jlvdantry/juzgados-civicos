<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Figuras extends Model
{
    public function getFiguras() {
          $figuras = DB::select("select id,descripcion || '-' || agrupacion || case when esobligatorio=true then ' (OBLIGATORIO)' else '' end  as descripcion,unapersona from figuras " );
          return $figuras;
    }

    public function getFigurasbyID($id) {
           Log::debug('app/Figuras.php id='.$id);
          $figuras = DB::select("select  id,descripcion || '-' || agrupacion || case when esobligatorio=true then ' (OBLIGATORIO)' else '' end descripcion,unapersona from figuras where id=:id" ,['id' => $id]);
          return $figuras;
    }


}
