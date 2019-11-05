<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Niveles::class);
        $this->call(Colonias::class);
        $this->call(Alcaldias::class);
        $this->call(Perfiles::class);
        $this->call(Menus::class);
        $this->call(Users::class);
        $this->call(Perfiles_menus::class);
        $this->call(Perfiles_users::class);
        $this->call(Giros::class);
        $this->call(Figuras::class);
        $this->call(Tiposimulacros::class);
        $this->call(estatusrevision::class);
        $this->call(entidades::class);
        $this->call(puntosdereunion::class);
        $this->call(zonasgeotecnica::class);
        $this->call(tiposdeconstruccion::class);
        $this->call(tiposdecimentacion::class);
        $this->call(tiposdeestructura::class);
        $this->call(tiposdeestablecimiento::class);
        $this->call(File_tipos::class);
    }
}
