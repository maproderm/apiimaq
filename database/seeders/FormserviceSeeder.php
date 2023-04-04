<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_form_services')->insert([
            'name'=>'Desarrollos',
            'status'=>1
        ] );
        DB::table('imaq_form_services')->insert([
            'name'=>'Diseños',
            'status'=>1
        ] );
        DB::table('imaq_form_services')->insert([
            'name'=>'Empaque',
            'status'=>1
        ] );
        DB::table('imaq_form_services')->insert([
            'name'=>'Envase',
            'status'=>1
        ] );
        DB::table('imaq_form_services')->insert([
            'name'=>'Impresión',
            'status'=>1
        ] );
        DB::table('imaq_form_services')->insert([
            'name'=>'Etiqueta',
            'status'=>1
        ] );
    }
}
