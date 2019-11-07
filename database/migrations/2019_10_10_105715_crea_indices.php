<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaIndices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement("create index ak1_inmuebles on inmuebles (alias)");
         DB::statement("create index ak2_inmuebles on inmuebles (id_alcaldia)");
         DB::statement("create index ak3_inmuebles on inmuebles (rfc,email_acreditado)");
         DB::statement("create index ak4_inmuebles on inmuebles (calle)");
         DB::statement("create index ak1_establecimientos on establecimientos (rfc,email_acreditado)");
         DB::statement("create index ak2_establecimientos on establecimientos (nombres)");
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
