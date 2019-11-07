<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreausuarioROOT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement("INSERT INTO public.users (nombres,email,password,api_token,activo) VALUES ('ROOT','root@hotmail.com','\$2y\$10\$FaVhS.ExNOpMSxMvBGuXhOBjD9eT.PeYsRL.t93TZpNIRHdSErBJu','ax3oc7UP2Qy1cFTaWMcG4aHqFLH3N6BwfjyI4bzSF4QanPeMyYYH2PwUtUZG',1);");
         DB::statement("INSERT INTO public.perfiles_users (idperfil,idusuario) VALUES ((select id from public.perfiles where descripcion='Administrador'),(select id from public.users where email='root@hotmail.com'));");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::statement("delete from public.perfles_users where idusuario=(select id from users where email='root@hotmail.com');");
         DB::statement("delete from public.users where email='root@hotmail.com';");
    }
}
