<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('descripcion',1000);
            $table->string('clasificacion')->comment('clasificacion del giro');
            $table->string('clave_scian');
            $table->string('nivel_riesgo',2)->comment('E= EXENTO,B= BAJO RIESGO,M= MEDIANO RIESGO,A= ALTO RIESGO,NA= NO APLICA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giros');
    }
}
