<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBoletasJuez extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boletas', function (Blueprint $table) {
            $table->integer('idjuez')->nullable()->comment('id del juez que califica la infracción, de acuerdo al catalogo de usuarios');
            $table->integer('idsecretario')->nullable()->comment('id del secretario , de acuerdo al catalogo de usuarios');
            $table->string('ip_alta')->nullable()->comment('ip desde donde se dio de alta la boleta');
            $table->string('ip_cambio')->nullable()->comment('ip desde donde se efectuo el ultimo cambio');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boletas', function (Blueprint $table) {
            //
        });
    }
}
