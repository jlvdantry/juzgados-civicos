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
        $this->call(Colonias::class);
        $this->call(Alcaldias::class);
        $this->call(Perfiles::class);
        $this->call(Menus::class);
        $this->call(Users::class);
        $this->call(Perfiles_menus::class);
        $this->call(Perfiles_users::class);
        $this->call(entidades::class);
        $this->call(Sanciones::class);
        $this->call(Infracciones::class);
        $this->call(Juzgados::class);
    }
}
