<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaSeleccionadoToInmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establecimientos', function (Blueprint $table) {
              $table->boolean('seleccionado')->nullable()->comment('Indica si el establecimiento fue seleccionado para inspeccionar');
              $table->boolean('verificado')->nullable()->comment('Indica si el establecimiento ya fue verificado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establecimientos', function (Blueprint $table) {
            //
        });
    }
}
