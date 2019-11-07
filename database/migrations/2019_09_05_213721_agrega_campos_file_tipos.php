<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaCamposFileTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('file_tipos', function (Blueprint $table) {
              $table->integer('orden')->nullable()->comment('orden de los archivos en la vista');
              $table->string('agrupacion')->nullable()->comment('Agrupacion del archivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_tipos', function (Blueprint $table) {
           $table->dropColumn('orden');
           $table->dropColumn('agrupacion');
        });
    }
}
