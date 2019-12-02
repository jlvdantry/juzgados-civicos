<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInfractoresDeclaracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('infractores', function (Blueprint $table) {
            $table->text('declaracion')->nullable()->comment('declaración del presunto infractor ');
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
