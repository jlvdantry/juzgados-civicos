<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVarioscamposInmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inmuebles', function (Blueprint $table) {
              $table->text('ce_maco')->nullable()->comment('Material de construccion');
              $table->integer('ce_anocons')->nullable()->comment('Año de construccion');
              $table->integer('ce_niveles_totales')->nullable()->comment('Niveles totales sobre y bajo el nivel de banqueta');
              $table->text('ce_in_hidrosanitarias')->nullable()->comment('descripción de las instalaciones hidrosanitarias');
              $table->text('ce_in_electricas')->nullable()->comment('descripción de las instalaciones electricas');
              $table->integer('ce_elevadores')->nullable()->comment('Cantidad de elevadores de personas y de carga');
              $table->text('ce_in_especiales')->nullable()->comment('Descripción de instalaciones especiales');
              $table->boolean('ce_crsp')->nullable()->comment('Cuenta con recipientes sujetos, a presión, recipientes criogenicos y generadores de vapor o calderas');
              $table->boolean('ce_matt')->nullable()->comment('Maneja, almacena, transforma y/o transporta materiales y sustancias quimicas peligroas');
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
           $table->dropColumn('ce_maco');
           $table->dropColumn('ce_anocons');
           $table->dropColumn('ce_niveles_totales');
           $table->dropColumn('ce_in_hidrosanitarias');
           $table->dropColumn('ce_in_electricas');
           $table->dropColumn('ce_elevadores');
           $table->dropColumn('ce_in_especiales');
           $table->dropColumn('ce_crsp');
           $table->dropColumn('ce_matt');
        });
    }
}
