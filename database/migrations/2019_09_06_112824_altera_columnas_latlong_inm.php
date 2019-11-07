<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlteraColumnasLatlongInm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('ALTER TABLE inmuebles alter lat  type numeric(9,6); ');
         DB::statement('ALTER TABLE inmuebles alter long  type numeric(9,6); ');
         DB::statement('ALTER TABLE inmuebles alter lat_pr  type numeric(9,6); ');
         DB::statement('ALTER TABLE inmuebles alter long_pr  type numeric(9,6); ');

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
