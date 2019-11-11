<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('boleta_remision',20)->unique()->comment('Número de boleta de remisión de los policias');
            $table->integer('placa1')->nullable()->comment('Número de placa del policia 1');
            $table->string('areadeadscripcion_1',30)->nullable()->comment('Area de adscripción del policia 1')->default('');
            $table->string('nombre_1',30)->nullable()->comment('Nombre del policia 1')->default('');
            $table->string('primer_apellido_1',30)->nullable()->comment('Primer apellido del policia 1')->default('');
            $table->string('segundo_apellido_1',30)->nullable()->comment('Segundo apellido del policia 1')->default('');
            $table->integer('placa2')->nullable()->comment('Número de placa del policia 2');
            $table->string('areadeadscripcion_2',30)->nullable()->comment('Area de adscripción del policia 2');
            $table->string('nombre_2',30)->nullable()->comment('Nombre del policia 2');
            $table->string('primer_apellido_2',30)->nullable()->comment('Primer apellido del policia 2');
            $table->string('segundo_apellido_2',30)->nullable()->comment('Segundo apellido del policia 2');
            $table->integer('id_mediotransporte_1')->nullable()->comment('Id del medio de transporte de acuerdo al catalogo de transporte 1');
            $table->string('numerodepatrulla_1',10)->nullable()->comment('Numero de patrulla 1');
            $table->integer('id_mediotransporte_2')->nullable()->comment('Id del medio de transporte de acuerdo al catalogo de transporte 2');
            $table->string('numerodepatrulla_2',10)->nullable()->comment('Numero de patrulla 2');
            $table->integer('estatus')->nullable()->comment('0=capturando,1=concluido')->default(0);
            $table->integer('expediente')->nullable()->comment('secuencia del id del expediente')->default(0);
            $table->integer('idjuzgado')->nullable()->comment('id del juzgado de acuerdo al catalogo de juzgados');
            $table->integer('createdby')->nullable()->comment('id del usuario que creo el registro');
            $table->integer('updatedby')->nullable()->comment('id del ultimo usuairo que modifico el registro');
            $table->date('diahechos')->nullable()->comment('fecha en que ocurrieron los hechos');
            $table->time('horahechos')->nullable()->comment('hora en que ocurrieron los hechos');
            $table->string('calle_h',40)->nullable()->comment('calle donde ocurrieron los hechos')->default('');
            $table->string('exterior_h',10)->nullable()->comment('numero exterior donde ocurrieron los hechos')->default('');
            $table->string('interior_h',10)->nullable()->comment('numero interior donde ocurrieron los hechos')->default('');
            $table->string('colonia_h')->nullable()->comment('colonia donde ocurrieron los hechos')->default('');
            $table->string('id_alcaldia_h')->nullable()->comment('Alcaldia donde ocurrieron los hechos')->default('');
            $table->integer('cp_h')->nullable()->comment('Codigo postal donde ocurrieron los hechos')->default(0);
            $table->text('motivo')->nullable()->comment('motivo de la presentación')->default('');
            $table->text('objetos')->nullable()->comment('objetos de la rpesentación')->default('');
            $table->string('ip_alta',39)->nullable()->comment('motivo de la presentación')->default('');
            $table->string('ip_cambio',39)->nullable()->comment('objetos de la rpesentación')->default('');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletas');
    }
}
