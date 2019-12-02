<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInfractoresVarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('infractores', function (Blueprint $table) {
            $table->text('ocupacion',40)->nullable()->comment('ocupacion del  infractor ');
            $table->text('identificacion',40)->nullable()->comment('con que documento se identifico el  infractor ');
            $table->text('entrecalle',100)->nullable()->comment('entre que calles esta el domicilio del  infractor ');
            $table->text('ycalle',100)->nullable()->comment('y que calles esta el domicilio del  infractor ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infractores', function (Blueprint $table) {
            //
        });
    }
}
