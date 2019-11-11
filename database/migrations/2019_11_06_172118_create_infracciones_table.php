<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infracciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('infraccion',100)->nullable()->comment('Descripcion de la infracción');
            $table->integer('articulo')->nullable()->comment('Numero de articulo')->default('0');
            $table->string('fraccion')->nullable()->comment('fraccion del articulo')->default('0');
            $table->text('descripcion',256)->nullable()->comment('Descripcion de larga de la infracción');
            $table->text('conciliacion',256)->nullable()->comment('Descripcion de concicliación');
            $table->text('aplicarsi',1000)->nullable()->comment('Descripción del porque de aplicarse la infracción');
            $table->string('tipo_sancion',3)->comment('Sanción aplicable de acuerdo al cataloog de sanciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infracciones');
    }
}
