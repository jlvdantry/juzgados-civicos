<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterIdalcaldiaBoletas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement('ALTER TABLE boletas alter id_alcaldia_h  drop default; ');
         DB::statement('update boletas set id_alcaldia_h=0 where id_alcaldia_h=\'\'; ');
         DB::statement('ALTER TABLE boletas alter id_alcaldia_h  type numeric(10) USING id_alcaldia_h::numeric(10,0); ');
         DB::statement('ALTER TABLE boletas alter id_alcaldia_h  set default \'0\'; ');
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
