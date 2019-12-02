<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBoletasEntrecalleycalee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boletas', function (Blueprint $table) {
            $table->text('entrecalle_h',100)->nullable()->comment('entre que calles ocurrieron los hechos');
            $table->text('ycalle_h',100)->nullable()->comment('y que calles ocurrieron los hechos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boletas', function (Blueprint $table) {
            //
        });
    }
}
