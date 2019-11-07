<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_inmueble')->comment('Id del inmueble a la que pertenence el comite');
            $table->integer('id_figuras')->comment('Id de la figura de la persona dentro del comite de acuerdo al catalgoo de figuras');
            $table->integer('id_agrupacion')->nullable()->comment('Agrupacion de las figuras del comite');
            $table->string('nombres')->comment('Nombres de la figura');
            $table->string('ape_pat')->comment('primer apellido de la figura');
            $table->string('ape_mat')->nullable()->comment('segundo  apellido de la figura');
            $table->string('cargo')->comment('cargo que tiene dentro del inmueble');
            $table->string('curp',18)->comment('curp de la persona');
            $table->integer('id_file_0041')->nullable()->comment('id de la constancia de capacitación');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comites');
    }
}
