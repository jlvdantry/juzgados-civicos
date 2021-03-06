<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilesMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('idperfil');
            $table->integer('idmenu');
            $table->integer('orden')->default(0)->comment('Indica el orden que se va a presentar dentro del menu de navegacion');
            $table->integer('mdefault')->default(0)->comment('Menu por default a presentar 1=default');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfiles_menus');
    }
}
