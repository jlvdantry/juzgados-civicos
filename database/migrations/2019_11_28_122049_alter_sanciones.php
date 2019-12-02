<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSanciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('infracciones', function (Blueprint $table) {
            $table->string('n')->nullable()->comment('Acuerdo inicial Ley de Cultura Cívica');
            $table->string('o')->nullable()->comment('Acuerdo inicial Reglamento de Ley de Cultura Cívica');
            $table->string('p')->nullable()->comment('Radicación Ley de Cultura Cívica');
            $table->string('q')->nullable()->comment('Radicación Reglamento de Ley de Cultura Cívica');
            $table->string('r')->nullable()->comment('Radicación Ley de Cultura Cívica');
            $table->string('s')->nullable()->comment('Radicación Reglamento de Ley de Cultura Cívica');
            $table->string('t')->nullable()->comment('Recepción de Reporte Médico Ley de Cultura Cívica');
            $table->string('u')->nullable()->comment('Recepción de Reporte Médico Reglamento de Ley de Cultura Cívica');
            $table->string('v')->nullable()->comment('En caso de Envío a Centro Toxicologico Ley de Cultura Cívica');
            $table->string('w')->nullable()->comment('En caso de Envío a Centro Toxicologico Reglamento de Ley de Cultura Cívica');
            $table->string('x')->nullable()->comment('Acuerdo suspensión por tiempo de recuparación Ley de Cultura Cívica');
            $table->string('y')->nullable()->comment('Acuerdo suspensión por tiempo de recuparación Reglamento de Ley de Cultura Cívica');
            $table->string('z')->nullable()->comment('Inicio de Audiencia Ley de Cultura Cívica');
            $table->string('aa')->nullable()->comment('Inicio de Audiencia Constitución Política de los Estados Unidos Mexicanos');
            $table->string('ab')->nullable()->comment('Inicio de Audiencia Ley de Cultura Cívica');
            $table->string('ac')->nullable()->comment('Inicio de Audiencia Reglamento de Ley de Cultura Cívica');
            $table->string('ad')->nullable()->comment('Inicio de Audiencia Código Nacional de Procedimientos Penales');
            $table->string('ae')->nullable()->comment('Lectura de Boleta de Remisión Ley de Cultura Cívica');
            $table->string('af')->nullable()->comment('Ley de Cultura Cívica Declara Libremente si es que desea hacerlo');
            $table->string('ag')->nullable()->comment('Admisión y desahogo de pruebas Ley de Cultura Cívica');
            $table->string('ah')->nullable()->comment('Admisión y desahogo de pruebas Código Nacional de Procedimientos Penales');
            $table->string('ai')->nullable()->comment('Resolución Ley de Cultura Cívica');
            $table->string('aj')->nullable()->comment('Resolución Código Nacional de Procedimientos Penales');
            $table->string('ak')->nullable()->comment('Resuelve Ley de Cultura Cívica');
            $table->string('al')->nullable()->comment('Resuelve Reglamento de Ley de Cultura Cívica');
            $table->string('am')->nullable()->comment('Notificacion Ley de Cultura Cívica');
            $table->string('an')->nullable()->comment('Notificacion Reglamento de Ley de Cultura Cívica');
            $table->string('ao')->nullable()->comment('Pago de multa (En su caso) Ley de Cultura Cívica');
            $table->string('ap')->nullable()->comment('Pago de multa (En su caso)  Reglamento de Ley de Cultura Cívica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infracciones', function (Blueprint $table) {
            $table->dropcolumn('n');
            $table->dropcolumn('o');
            $table->dropcolumn('p');
            $table->dropcolumn('q');
            $table->dropcolumn('r');
            $table->dropcolumn('s');
            $table->dropcolumn('t');
            $table->dropcolumn('u');
            $table->dropcolumn('v');
            $table->dropcolumn('w');
            $table->dropcolumn('x');
            $table->dropcolumn('y');
            $table->dropcolumn('z');
            $table->dropcolumn('aa');
            $table->dropcolumn('ab');
            $table->dropcolumn('ac');
            $table->dropcolumn('ad');
            $table->dropcolumn('ae');
            $table->dropcolumn('af');
            $table->dropcolumn('ag');
            $table->dropcolumn('ah');
            $table->dropcolumn('ai');
            $table->dropcolumn('aj');
            $table->dropcolumn('ak');
            $table->dropcolumn('al');
            $table->dropcolumn('am');
            $table->dropcolumn('an');
            $table->dropcolumn('ao');
            $table->dropcolumn('ap');
        });
    }
}
