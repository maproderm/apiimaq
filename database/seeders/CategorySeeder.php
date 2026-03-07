<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imaq_categories')->insert([
            'name'=>'Skin Care',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Ojos',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Rostro',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Labios',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Corporal & Cabello',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Herramientas & Acesorios',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Linea FX',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Palettes',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Kit',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Otros',
            'status'=>'1',
            'division_id'=>'3'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Envases',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Tapas',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Empaques Primarios',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Empaques Secundarios',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Etiquetas e Impresos',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Insumos de Producción',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Refacciones y Herramientas',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Kits de Envases',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Material de Mantenimiento',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Dosificadores',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Silla de montar',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Disc Top',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Sobretapa',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Atomizador',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Envase lleno sin decorar',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Envase sin llenar MPD',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Wippers',
            'status'=>'1',
            'division_id'=>'1'
        ] );
        DB::table('imaq_categories')->insert([
            'name'=>'Envase lleno clientes',
            'status'=>'1',
            'division_id'=>'1'
        ] );
    }
}
