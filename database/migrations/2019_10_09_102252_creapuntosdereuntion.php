<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Creapuntosdereuntion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement("INSERT INTO public.puntos_de_reunion (id_inmueble,pr_ubicacion,pr_tipo,pr_m2_superficie,pr_capacidad,pr_otro,lat_pr,long_pr) 
                        select id,coalesce(pr_ubicacion,''),pr_tipo,coalesce(pr_m2_superficie,0),coalesce(pr_capacidad,0),pr_otro,lat_pr,long_pr from inmuebles where pr_ubicacion!=''
                        and (select count(*) from public.puntos_de_reunion where id_inmueble=inmuebles.id)=0
                        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
