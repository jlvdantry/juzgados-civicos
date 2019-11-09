<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfractoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infractores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('idboleta')->comment('Id del numero de boleta');
            $table->string('nombre_I',30)->nullable()->comment('Nombre del infractor');
            $table->string('primer_apellido_I',30)->nullable()->comment('Primer apellido del infractor');
            $table->string('segundo_apellido_I',30)->nullable()->comment('Segundo apellido del infractor');
            $table->string('sexo',1)->nullable()->comment('F=femenino, M=masculino');
            $table->string('curp',18)->nullable()->comment('curp del infractor');
            $table->string('identidad',30)->nullable()->comment('Id del estado de nacimiento');
            $table->date('nacimiento')->nullable()->comment('Fecha de nacimientos');
            $table->string('calle_i')->nullable()->comment('Domicilio calle');
            $table->string('exterior_i')->nullable()->comment('Domicilio numero exterior');
            $table->string('interior_i')->nullable()->comment('Domicilio numero interior');
            $table->string('colonia_i')->nullable()->comment('Domicilio colonia');
            $table->string('id_alcaldia_i')->nullable()->comment('Domicilio id de la alcaldia');
            $table->integer('cp_i')->nullable()->comment('Domicilio codigo postal');
            $table->integer('createdby')->nullable()->comment('id del usuario que creo el registro');
            $table->integer('updatedby')->nullable()->comment('id del ultimo usuairo que modifico el registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infractores');
    }
}
