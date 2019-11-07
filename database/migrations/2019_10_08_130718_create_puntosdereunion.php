<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntosdereunion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puntos_de_reunion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_inmueble')->comment('Id del inmueble donde esta el punto de reunion');
            $table->string('pr_ubicacion')->nullable()->comment('punto de reunion ubicacion');
            $table->string('pr_tipo',2)->nullable()->comment('C=calle, P=parque, J=jardin CA=camellon,E=estacionamiento,O=otro');
            $table->decimal('pr_m2_superficie',7,2)->comment('Puntos de reunion Metros cuadrado superficie')->default(0);
            $table->decimal('pr_capacidad',7,2)->comment('Capacidad contemplada de personas')->default(0);
            $table->string('pr_otro')->nullable()->comment('Se especifico otro punto de reunion')->default('');
            $table->decimal('lat_pr',10,8)->nullable()->comment('Latitud donde se ubica el punto de reunion');
            $table->decimal('long_pr',11,8)->nullable()->comment('longitud donde se ubica el punto de reunion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('puntos_de_reunion');
    }
}
