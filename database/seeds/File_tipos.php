<?php

use Illuminate\Database\Seeder;

class File_tipos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sql = base_path('database/seeds/Inserta_file_tipos.sql');
         DB::unprepared(file_get_contents($sql));
    }
}
