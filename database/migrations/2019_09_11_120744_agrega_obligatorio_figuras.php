<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaObligatorioFiguras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('figuras', function (Blueprint $table) {
              $table->boolean('esobligatorio')->nullable()->comment('Indica si la figura es obligatoria')->default(false);;
              $table->boolean('esobligatorio_UH')->nullable()->comment('Indica si la figura es obligatoria en unidades habitacionales')->default(false);;
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
           $table->dropColumn('esobligatorio');
           $table->dropColumn('esobligatorio_UH');
        });
    }
}
