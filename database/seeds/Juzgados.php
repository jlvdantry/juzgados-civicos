<?php

use Illuminate\Database\Seeder;

class Juzgados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sql = base_path('database/seeds/Inserta_juzgados.sql');
         DB::unprepared(file_get_contents($sql));
    }
}
