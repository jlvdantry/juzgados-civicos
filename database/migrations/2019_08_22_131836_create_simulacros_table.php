<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimulacrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulacros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_inmueble')->comment('Id del inmueble donde se realizo el simulacro');
            $table->date('fecha')->nullable()->comment('Fecha en que se realizo el simulacro');;
            $table->integer('id_tipodesimulacro')->nullable()->comment('Id del tipo de simulacro');;
            $table->text('hipotesis')->nullable()->comment('Hipotesis del simulacro');;
            $table->integer('id_file_0040')->nullable()->comment('Identificación del numero de archivo');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('simulacros');
    }
}
