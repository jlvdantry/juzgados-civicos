<?php

use Illuminate\Database\Seeder;

class Sanciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sql = base_path('database/seeds/Inserta_sanciones.sql');
         DB::unprepared(file_get_contents($sql));
    }
}
