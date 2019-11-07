<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregacamposNombresestablecimiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establecimientos', function (Blueprint $table) {
            $table->string('nombres')->nullable()->comment('Nombres del establecimiento');
            $table->string('ape_pat')->nullable()->comment('Apellido paterno ');
            $table->string('ape_mat')->nullable()->comment('Apellido materno ');
            $table->dropColumn('razonsocial');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
