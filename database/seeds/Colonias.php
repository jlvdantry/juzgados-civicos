<?php

use Illuminate\Database\Seeder;

class Colonias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sql = base_path('database/seeds/inserta_colonias.sql');
         DB::unprepared(file_get_contents($sql));
    }
}
