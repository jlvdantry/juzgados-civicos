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
            $table->string('areadeadscripcion_1',30)->nullable()->comment('Area de adscripción del policia 1');
            $table->string('nombre_1',30)->nullable()->comment('Nombre del policia 1');
            $table->string('primer_apellido_1',30)->nullable()->comment('Primer apellido del poliica 1');
            $table->string('segundo_apellido_1',30)->nullable()->comment('Segundo apellido del poliica 1');
            $table->integer('placa2')->nullable()->comment('Número de placa del policia 2');
            $table->string('areadeadscripcion_2',30)->nullable()->comment('Area de adscripción del policia 2');
            $table->string('nombre_2',30)->nullable()->comment('Nombre del policia 2');
            $table->string('primer_apellido_2',30)->nullable()->comment('Primer apellido del policia 2');
            $table->string('segundo_apellido_2',30)->nullable()->comment('Segundo apellido del policia 2');
            $table->integer('id_mediotransporte')->nullable()->comment('Id del medio de transporte de acuerdo al catalogo de transporte');
            $table->string('numerodepatrulla,10')->nullable()->comment('Numero de patrulla');
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
