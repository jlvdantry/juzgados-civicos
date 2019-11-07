<?php

use Illuminate\Database\Seeder;

class tiposdecimentacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sql = base_path('database/seeds/Inserta_tiposdecimentacion.sql');
         DB::unprepared(file_get_contents($sql));
    }
}
