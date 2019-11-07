<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCalleDefaultInmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inmuebles', function (Blueprint $table) {
         DB::statement("ALTER TABLE inmuebles alter calle set default '';");
         DB::statement("ALTER TABLE inmuebles alter exterior set default '';");
         DB::statement("ALTER TABLE inmuebles alter interior set default '';");
         DB::statement("update inmuebles set calle='' where coalesce(calle,'')='';");
         DB::statement("update inmuebles set exterior='' where coalesce(exterior,'')='';");
         DB::statement("update inmuebles set interior='' where coalesce(interior,'')='';");
         
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
