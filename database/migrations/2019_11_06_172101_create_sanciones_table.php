<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSancionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('sancion',3)->comment('Tipo de sancion');
            $table->integer('uc_desde')->nullable()->comment('Unidad de cuenta desde');
            $table->integer('uc_hasta')->nullable()->comment('Unidad de cuenta hasta');
            $table->integer('servicio_desde')->nullable()->comment('Horas de servicio comunitario desde');
            $table->integer('servicio_hasta')->nullable()->comment('Horas de servicio comunitario hasta');
            $table->integer('arresto_desde')->nullable()->comment('Horas de arresto desde');
            $table->integer('arresto_hasta')->nullable()->comment('Horas de arresto hasta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanciones');
    }
}
