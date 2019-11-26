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
            $table->string('nombre_i',30)->nullable()->comment('Nombre del infractor');
            $table->string('primer_apellido_i',30)->nullable()->comment('Primer apellido del infractor');
            $table->string('segundo_apellido_i',30)->nullable()->comment('Segundo apellido del infractor');
            $table->string('sexo',1)->nullable()->comment('F=femenino, M=masculino');
            $table->string('curp',18)->nullable()->comment('curp del infractor');
            $table->integer('identidad')->nullable()->comment('Id del estado de nacimiento');
            $table->date('nacimiento')->nullable()->comment('Fecha de nacimientos');
            $table->string('calle_i')->nullable()->comment('Domicilio calle');
            $table->string('exterior_i')->nullable()->comment('Domicilio numero exterior');
            $table->string('interior_i')->nullable()->comment('Domicilio numero interior');
            $table->string('colonia_i')->nullable()->comment('Domicilio colonia');
            $table->integer('id_alcaldia_i')->nullable()->comment('Domicilio id de la alcaldia');
            $table->integer('cp_i')->nullable()->comment('Domicilio codigo postal');
            $table->integer('createdby')->nullable()->comment('id del usuario que creo el registro');
            $table->integer('updatedby')->nullable()->comment('id del ultimo usuario que modifico el registro');
            $table->integer('id_file_0001')->nullable()->comment('foto del infractor');
            $table->integer('idinfraccion')->nullable()->comment('Id de la infracción que cometio el infractor segun el juez');
            $table->integer('tiposancion')->nullable()->comment('1=sin sanción, 2=Por unidad de cuenta, 3=por servicio comunitario, 4=Arresto');
            $table->text('observaciones')->nullable()->comment('Observaciones a la sancion aplicada');
            $table->integer('sancionaplicada')->nullable()->comment('rango desde de la sancion seleccionada');
            $table->boolean('aplicacertificado')->nullable()->comment('Indica si aplica certificado medico true=si')->default(false);
            $table->integer('idmedico')->nullable()->comment('Id del medico que realizo el examen medico');
            $table->string('nombremedico',90)->nullable()->comment('Nombre del medicco');
            $table->text('resultado')->nullable()->comment('Resultado del examen medico');
            $table->text('prescripcion')->nullable()->comment('Prescripcion medica');
            $table->integer('tirilla')->nullable()->comment('Número de tirilla');
            $table->boolean('procesosupendido')->nullable()->comment('true=proceso suspendido')->default(false);
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
