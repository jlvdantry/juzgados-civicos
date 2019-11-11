<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuzgadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juzgados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('idalcaldia')->comment('id de alcaldia de acuerdo al catalogo de alcaldias');
            $table->string('juzgado')->comment('Descripcion del juzgado');
            $table->string('direccion')->comment('Dirección donde se ubica el juzgado');
            $table->string('turno')->comment('Turno');
            $table->string('horario')->comment('horario de atencion');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juzgados');
    }
}
