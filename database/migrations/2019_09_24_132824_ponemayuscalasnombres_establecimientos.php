<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PonemayuscalasnombresEstablecimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('establecimientos', function (Blueprint $table) {
               //
        });
         DB::statement('update establecimientos set nombres=upper(nombres),ape_pat=upper(ape_pat), ape_mat=upper(ape_mat);');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('establecimientos', function (Blueprint $table) {
            //
        });
    }
}
