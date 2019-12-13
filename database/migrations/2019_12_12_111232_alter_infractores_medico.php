<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInfractoresMedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('infractores', function (Blueprint $table) {
            $table->boolean('conlesiones')->nullable()->comment('tiene lesiones')->default(false);
            $table->date('dia_examen')->nullable()->comment('fecha en que se realizo examen medico');
            $table->time('hora_examen')->nullable()->comment('hora en que se realizo examen medico');
            $table->integer('edad_clinica')->nullable()->comment('Edad clinica del posible infractor')->default('0');
            $table->string('otro',50)->nullable()->comment('hora en que se realizo examen medico')->default('');
            $table->boolean('acepto_examen')->nullable()->comment('El infractor acepto realizar el examen')->default(false);
            $table->string('nombres_autorizzo',100)->nullable()->comment('Nombre del responsable que autoriza examen medico, solo en caso de que el infractor sea menor de edad')->default('');
            $table->boolean('padece_enfermedad')->nullable()->comment('Refiere padecer alguna enfermedad')->default(false);
            $table->string('especifique_enfermedad',254)->nullable()->comment('Especifique que enfermedad padece')->default('');
            $table->boolean('ingiere_medicamento')->nullable()->comment('Ingiere algun medicamento')->default(false);
            $table->string('especifique_medicamento',254)->nullable()->comment('Especifique que medicamento ingiere')->default('');
            $table->string('otros',254)->nullable()->comment('Otros antecedentes personales patológicos')->default('');
            $table->integer('cedulaprofesinal')->nullable()->comment('Numero de cedula profesional del medico')->default('0');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infractores', function (Blueprint $table) {
               $table->dropColumn('conlesiones');
               $table->dropColumn('dia_examen');
               $table->dropColumn('hora_examen');
               $table->dropColumn('edad_clinica');
               $table->dropColumn('otro');
               $table->dropColumn('acepto_examen');
               $table->dropColumn('nombres_autorizzo');
               $table->dropColumn('padece_enfermedad');
               $table->dropColumn('especifique_enfermedad');
               $table->dropColumn('ingiere_medicamento');
               $table->dropColumn('especifique_medicamento');
               $table->dropColumn('otros');
               $table->dropColumn('cedulaprofesinal');
        });
    }
}
