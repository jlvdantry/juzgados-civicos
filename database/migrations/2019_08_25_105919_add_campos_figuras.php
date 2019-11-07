<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposFiguras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('figuras', function (Blueprint $table) {
              $table->boolean('unapersona')->nullable()->comment('Indica si el puesto es solo para una persona 0=no,1=si');
              $table->boolean('enpisos')->nullable()->comment('indica que el puesto puedo estar en varios pisos 0=no,1=si');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('figuras', function (Blueprint $table) {
        });
    }
}
