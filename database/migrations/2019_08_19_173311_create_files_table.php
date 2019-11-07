<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('id_tipoArchivo')->nullable()->comment('id del tipo de archivo de acuerdo al catalog de tipos de archivos');
            $table->string('id_filesystem')->nullable()->comment('identificador del archivo dentro del file system');
            $table->string('nombre')->nullable()->comment('Nombre del archivo que seleecino el usuairo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
