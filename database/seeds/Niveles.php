<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Niveles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveles')->truncate();
        DB::table('niveles')->insert([
            'descripcion' => 'Nivel uno',
        ]);
        DB::table('niveles')->insert([
            'descripcion' => 'Nivel dos',
        ]);
        DB::table('niveles')->insert([
            'descripcion' => 'Nivel tres',
        ]);
        DB::table('niveles')->insert([
            'descripcion' => 'Nivel cuatro',
        ]);
    }
}
