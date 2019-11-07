<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMasFilesInmuebvles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inmuebles', function (Blueprint $table) {
              $table->integer('id_file_0037')->nullable()->comment('Acta Constitutiva de la Integración del Comité Interno Actualizado');
              $table->integer('id_file_0038')->nullable()->comment('Agregar Programa Anual de Mantenimiento a las Instalaciones (Eléctricas, Gas L.P, Sistemas fijos, etc.)');
              $table->integer('id_file_0039')->nullable()->comment('Carta responsiva de Extintores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inmuebles', function (Blueprint $table) {
           $table->dropColumn('id_file_0037');
           $table->dropColumn('id_file_0038');
           $table->dropColumn('id_file_0039');
        });
    }
}
