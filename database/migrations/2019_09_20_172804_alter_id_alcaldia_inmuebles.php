<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIdAlcaldiaInmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inmuebles', function (Blueprint $table) {
         DB::statement('ALTER TABLE inmuebles alter id_alcaldia  type numeric(6) USING id_alcaldia::numeric(6);');
         //DB::statement('ALTER TABLE inmuebles alter id_alcaldia  type numeric(6) ;');
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
            //
        });
    }
}
