<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_form_lines')->insert([
            'name'=>'Capilares',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Sanitizante',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Línea Industrial',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Línea Facial',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Cremas faciales',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Concentrados',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Hidratantes faciales',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Nutritivos',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Regeneradores',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Antiarrugas',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Contorno de ojos',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Cremas despigmentantes',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Tónicos',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Peeling',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Linea Corporal',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Anti estrías',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Anticelulíticas',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Cremas y aceites para masaje',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Reafirmantes',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Hidratantes',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Geles y cremas conductoras para aparatología',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Cremas manos y pies',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Exfoliantes corporales',
            'status'=>1
        ] );
        DB::table('imaq_form_lines')->insert([
            'name'=>'Mascarillas',
            'status'=>1
        ] );

    }
}
