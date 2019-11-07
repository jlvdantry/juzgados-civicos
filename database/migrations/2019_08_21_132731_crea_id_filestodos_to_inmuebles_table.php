<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreaIdFilestodosToInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inmuebles', function (Blueprint $table) {
          $table->integer('id_file_0002')->nullable()->comment('Plan de reduccion de riesgos');
          $table->integer('id_file_0003')->nullable()->comment('Plan de contingencia');
          $table->integer('id_file_0004')->nullable()->comment('Plan de continuidad');
          $table->integer('id_file_0005')->nullable()->comment('Carta de Corresponsabilidad del Tercer Acreditado (Vigencia mínima 2 años)*');
          $table->integer('id_file_0006')->nullable()->comment('Carta de Responsabilidad expedida por el obligado*');
          $table->integer('id_file_0007')->nullable()->comment('Copia de Póliza de Seguro*');
          $table->integer('id_file_0008')->nullable()->comment('Evaluación de Riesgo-Vulnerabilidad del Establecimiento*');
          $table->integer('id_file_0009')->nullable()->comment('Dictamen de Seguridad Estructural firmado por un D.R.O. debidamente acreditado y con registro ante la Secretaria de Desarrollo Urbano y Vivienda*');
          $table->integer('id_file_0010')->nullable()->comment('Oficio de no modificación o cambios estructurales, firmado por el administrador o poseedor del inmueble*');
          $table->integer('id_file_0011')->nullable()->comment('Dictamen de instalación de gas LP o natural firmado por una unidad verificadora avalada y con registro en la SENER*');
          $table->integer('id_file_0012')->nullable()->comment('Prueba de presión en equipo hidrantes, firmada por la empresa que realice los trabajos.*');
          $table->integer('id_file_0013')->nullable()->comment('Carta bajo protesta de decir verdad indicando las características del Equipo de Alerta, Prevención y Combate de Incendios, firmada por el administrador o poseedor del inmueble*');
          $table->integer('id_file_0014')->nullable()->comment('Carta bajo protesta de decir verdad indicando las características del Equipo de Primeros Auxilios firmada por el administrador o poseedor del inmueble*');
          $table->integer('id_file_0015')->nullable()->comment('Carta bajo protesta de decir verdad indicando las características del Equipo de Alerta Sísmica firmada por el administrador o poseedor del inmueble*');
          $table->integer('id_file_0016')->nullable()->comment('Organigrama del Comité Interno de Protección Civil*');
          $table->integer('id_file_0017')->nullable()->comment('Calendario de Capacitación*');
          $table->integer('id_file_0018')->nullable()->comment('Bitácoras del Programa de Capacitación*');
          $table->integer('id_file_0019')->nullable()->comment('Cronograma y bitácora de simulacros*');
          $table->integer('id_file_0020')->nullable()->comment('Organigrama del Comité Interno de Protección Civil*');
          $table->integer('id_file_0021')->nullable()->comment('Calendario de Capacitación*');
          $table->integer('id_file_0022')->nullable()->comment('Bitácoras del Programa de Capacitación*');
          $table->integer('id_file_0023')->nullable()->comment('Cronograma y bitácora de simulacros*');
          $table->integer('id_file_0024')->nullable()->comment('Croquis de la ubicación del inmueble y sus alrededores*');
          $table->integer('id_file_0025')->nullable()->comment('Croquis general del centro de trabajo*');
          $table->integer('id_file_0026')->nullable()->comment('Croquis de distribución de áreas*');
          $table->integer('id_file_0027')->nullable()->comment('Croquis de ubicación de equipamiento a Grupos de Atención Especial*');
          $table->integer('id_file_0028')->nullable()->comment('Croquis de ubicación de botiquines de Primeros Auxilios*');
          $table->integer('id_file_0029')->nullable()->comment('Croquis de distribución de brigadistas*');
          $table->integer('id_file_0030')->nullable()->comment('Croquis de ubicación de equipos de alerta, prevención y combate de incendios*');
          $table->integer('id_file_0031')->nullable()->comment('Croquis de localización de riesgo eléctrico*');
          $table->integer('id_file_0032')->nullable()->comment('Croquis indicando la trayectoria de la Ruta de Evacuación*');
          $table->integer('id_file_0033')->nullable()->comment('Croquis de salidas y escaleras de emergencia*');
          $table->integer('id_file_0034')->nullable()->comment('Croquis de ubicación del sistema de alerta sísmica*');
          $table->integer('id_file_0035')->nullable()->comment('Croquis de ubicación de las Zonas de Menor Riesgo*');
          $table->integer('id_file_0036')->nullable()->comment('Croquis de la ubicación de las Zonas de Riesgo*');
          $table->boolean('pcd_sismo')->nullable()->comment('Procedimientos contemplados en el documento sismo');
          $table->boolean('pcd_inundacion')->nullable()->comment('Procedimientos contemplados en el documento inundacion');
          $table->boolean('pcd_amenazabomba')->nullable()->comment('Procedimientos contemplados en el documento Amenaza de bomba');
          $table->boolean('pcd_incendio')->nullable()->comment('Procedimientos contemplados en el documento Incendio');
          $table->boolean('pcd_erupcion')->nullable()->comment('Procedimientos contemplados en el documento Erupción volcanica');
          $table->boolean('pcd_restablecimiento')->nullable()->comment('Procedimientos contemplados en el documento Restablecimiento');
        });
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
