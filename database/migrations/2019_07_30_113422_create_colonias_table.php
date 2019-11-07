<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonias', function (Blueprint $table) {
            $table->bigIncrements('id_colonia');
            $table->string('colonia');
            $table->string('codigo_postal',5);
            $table->smallinteger('id_cat_alcaldia');
            $table->boolean('baja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colonias');
    }
}
