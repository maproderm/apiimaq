<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('imaq_division')->insert([
            'name'=>'Almacén IMAQ 1',
            'abrv'=>'IMAQ1'
        ] );

        DB::table('imaq_division')->insert([
            'name'=>'Materia Prima',
            'abrv'=>'MPRIMA'
        ] );

        DB::table('imaq_division')->insert([
            'name'=>'Producto Terminado',
            'abrv'=>'MPD'
        ] );

        DB::table('imaq_division')->insert([
            'name'=>'Almacén IMAQ 2',
            'abrv'=>'IMAQ2'
        ] );
    }
}
