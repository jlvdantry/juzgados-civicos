<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AñadeCampoIDPerfilesMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perfiles_menus', function (Blueprint $table) {
              $table->string('idh')->nullable()->comment('Id del menu dentro del nav, por si se incluye logica al nav en el js')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perfiles_menus', function (Blueprint $table) {
            //
        });
    }
}
