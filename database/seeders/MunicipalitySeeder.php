<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('list_municipalities')->insert([
        'id'=>1,
        'state_id'=>1,
        'key'=>'001',
        'name'=>'Aguascalientes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2,
        'state_id'=>1,
        'key'=>'002',
        'name'=>'Asientos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>3,
        'state_id'=>1,
        'key'=>'003',
        'name'=>'Calvillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>4,
        'state_id'=>1,
        'key'=>'004',
        'name'=>'Cosío',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>5,
        'state_id'=>1,
        'key'=>'005',
        'name'=>'Jesús María',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>6,
        'state_id'=>1,
        'key'=>'006',
        'name'=>'Pabellón de Arteaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>7,
        'state_id'=>1,
        'key'=>'007',
        'name'=>'Rincón de Romos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>8,
        'state_id'=>1,
        'key'=>'008',
        'name'=>'San José de Gracia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>9,
        'state_id'=>1,
        'key'=>'009',
        'name'=>'Tepezalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>10,
        'state_id'=>1,
        'key'=>'010',
        'name'=>'El Llano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>11,
        'state_id'=>1,
        'key'=>'011',
        'name'=>'San Francisco de los Romo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>12,
        'state_id'=>2,
        'key'=>'001',
        'name'=>'Ensenada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>13,
        'state_id'=>2,
        'key'=>'002',
        'name'=>'Mexicali',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>14,
        'state_id'=>2,
        'key'=>'003',
        'name'=>'Tecate',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>15,
        'state_id'=>2,
        'key'=>'004',
        'name'=>'Tijuana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>16,
        'state_id'=>2,
        'key'=>'005',
        'name'=>'Playas de Rosarito',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>17,
        'state_id'=>3,
        'key'=>'001',
        'name'=>'Comondú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>18,
        'state_id'=>3,
        'key'=>'002',
        'name'=>'Mulegé',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>19,
        'state_id'=>3,
        'key'=>'003',
        'name'=>'La Paz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>20,
        'state_id'=>3,
        'key'=>'008',
        'name'=>'Los Cabos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>21,
        'state_id'=>3,
        'key'=>'009',
        'name'=>'Loreto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>22,
        'state_id'=>4,
        'key'=>'001',
        'name'=>'Calkiní',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>23,
        'state_id'=>4,
        'key'=>'002',
        'name'=>'Campeche',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>24,
        'state_id'=>4,
        'key'=>'003',
        'name'=>'Carmen',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>25,
        'state_id'=>4,
        'key'=>'004',
        'name'=>'Champotón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>26,
        'state_id'=>4,
        'key'=>'005',
        'name'=>'Hecelchakán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>27,
        'state_id'=>4,
        'key'=>'006',
        'name'=>'Hopelchén',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>28,
        'state_id'=>4,
        'key'=>'007',
        'name'=>'Palizada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>29,
        'state_id'=>4,
        'key'=>'008',
        'name'=>'Tenabo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>30,
        'state_id'=>4,
        'key'=>'009',
        'name'=>'Escárcega',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>31,
        'state_id'=>4,
        'key'=>'010',
        'name'=>'Calakmul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>32,
        'state_id'=>4,
        'key'=>'011',
        'name'=>'Candelaria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>33,
        'state_id'=>5,
        'key'=>'001',
        'name'=>'Abasolo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>34,
        'state_id'=>5,
        'key'=>'002',
        'name'=>'Acuña',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>35,
        'state_id'=>5,
        'key'=>'003',
        'name'=>'Allende',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>36,
        'state_id'=>5,
        'key'=>'004',
        'name'=>'Arteaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>37,
        'state_id'=>5,
        'key'=>'005',
        'name'=>'Candela',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>38,
        'state_id'=>5,
        'key'=>'006',
        'name'=>'Castaños',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>39,
        'state_id'=>5,
        'key'=>'007',
        'name'=>'Cuatro Ciénegas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>40,
        'state_id'=>5,
        'key'=>'008',
        'name'=>'Escobedo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>41,
        'state_id'=>5,
        'key'=>'009',
        'name'=>'Francisco I. Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>42,
        'state_id'=>5,
        'key'=>'010',
        'name'=>'Frontera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>43,
        'state_id'=>5,
        'key'=>'011',
        'name'=>'General Cepeda',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>44,
        'state_id'=>5,
        'key'=>'012',
        'name'=>'Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>45,
        'state_id'=>5,
        'key'=>'013',
        'name'=>'Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>46,
        'state_id'=>5,
        'key'=>'014',
        'name'=>'Jiménez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>47,
        'state_id'=>5,
        'key'=>'015',
        'name'=>'Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>48,
        'state_id'=>5,
        'key'=>'016',
        'name'=>'Lamadrid',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>49,
        'state_id'=>5,
        'key'=>'017',
        'name'=>'Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>50,
        'state_id'=>5,
        'key'=>'018',
        'name'=>'Monclova',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>51,
        'state_id'=>5,
        'key'=>'019',
        'name'=>'Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>52,
        'state_id'=>5,
        'key'=>'020',
        'name'=>'Múzquiz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>53,
        'state_id'=>5,
        'key'=>'021',
        'name'=>'Nadadores',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>54,
        'state_id'=>5,
        'key'=>'022',
        'name'=>'Nava',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>55,
        'state_id'=>5,
        'key'=>'023',
        'name'=>'Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>56,
        'state_id'=>5,
        'key'=>'024',
        'name'=>'Parras',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>57,
        'state_id'=>5,
        'key'=>'025',
        'name'=>'Piedras Negras',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>58,
        'state_id'=>5,
        'key'=>'026',
        'name'=>'Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>59,
        'state_id'=>5,
        'key'=>'027',
        'name'=>'Ramos Arizpe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>60,
        'state_id'=>5,
        'key'=>'028',
        'name'=>'Sabinas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>61,
        'state_id'=>5,
        'key'=>'029',
        'name'=>'Sacramento',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>62,
        'state_id'=>5,
        'key'=>'030',
        'name'=>'Saltillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>63,
        'state_id'=>5,
        'key'=>'031',
        'name'=>'San Buenaventura',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>64,
        'state_id'=>5,
        'key'=>'032',
        'name'=>'San Juan de Sabinas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>65,
        'state_id'=>5,
        'key'=>'033',
        'name'=>'San Pedro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>66,
        'state_id'=>5,
        'key'=>'034',
        'name'=>'Sierra Mojada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>67,
        'state_id'=>5,
        'key'=>'035',
        'name'=>'Torreón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>68,
        'state_id'=>5,
        'key'=>'036',
        'name'=>'Viesca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>69,
        'state_id'=>5,
        'key'=>'037',
        'name'=>'Villa Unión',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>70,
        'state_id'=>5,
        'key'=>'038',
        'name'=>'Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>71,
        'state_id'=>6,
        'key'=>'001',
        'name'=>'Armería',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>72,
        'state_id'=>6,
        'key'=>'002',
        'name'=>'Colima',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>73,
        'state_id'=>6,
        'key'=>'003',
        'name'=>'Comala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>74,
        'state_id'=>6,
        'key'=>'004',
        'name'=>'Coquimatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>75,
        'state_id'=>6,
        'key'=>'005',
        'name'=>'Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>76,
        'state_id'=>6,
        'key'=>'006',
        'name'=>'Ixtlahuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>77,
        'state_id'=>6,
        'key'=>'007',
        'name'=>'Manzanillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>78,
        'state_id'=>6,
        'key'=>'008',
        'name'=>'Minatitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>79,
        'state_id'=>6,
        'key'=>'009',
        'name'=>'Tecomán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>80,
        'state_id'=>6,
        'key'=>'010',
        'name'=>'Villa de Álvarez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>81,
        'state_id'=>7,
        'key'=>'001',
        'name'=>'Acacoyagua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>82,
        'state_id'=>7,
        'key'=>'002',
        'name'=>'Acala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>83,
        'state_id'=>7,
        'key'=>'003',
        'name'=>'Acapetahua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>84,
        'state_id'=>7,
        'key'=>'004',
        'name'=>'Altamirano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>85,
        'state_id'=>7,
        'key'=>'005',
        'name'=>'Amatán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>86,
        'state_id'=>7,
        'key'=>'006',
        'name'=>'Amatenango de la Frontera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>87,
        'state_id'=>7,
        'key'=>'007',
        'name'=>'Amatenango del Valle',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>88,
        'state_id'=>7,
        'key'=>'008',
        'name'=>'Angel Albino Corzo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>89,
        'state_id'=>7,
        'key'=>'009',
        'name'=>'Arriaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>90,
        'state_id'=>7,
        'key'=>'010',
        'name'=>'Bejucal de Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>91,
        'state_id'=>7,
        'key'=>'011',
        'name'=>'Bella Vista',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>92,
        'state_id'=>7,
        'key'=>'012',
        'name'=>'Berriozábal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>93,
        'state_id'=>7,
        'key'=>'013',
        'name'=>'Bochil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>94,
        'state_id'=>7,
        'key'=>'014',
        'name'=>'El Bosque',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>95,
        'state_id'=>7,
        'key'=>'015',
        'name'=>'Cacahoatán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>96,
        'state_id'=>7,
        'key'=>'016',
        'name'=>'Catazajá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>97,
        'state_id'=>7,
        'key'=>'017',
        'name'=>'Cintalapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>98,
        'state_id'=>7,
        'key'=>'018',
        'name'=>'Coapilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>99,
        'state_id'=>7,
        'key'=>'019',
        'name'=>'Comitán de Domínguez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>100,
        'state_id'=>7,
        'key'=>'020',
        'name'=>'La Concordia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>101,
        'state_id'=>7,
        'key'=>'021',
        'name'=>'Copainalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>102,
        'state_id'=>7,
        'key'=>'022',
        'name'=>'Chalchihuitán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>103,
        'state_id'=>7,
        'key'=>'023',
        'name'=>'Chamula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>104,
        'state_id'=>7,
        'key'=>'024',
        'name'=>'Chanal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>105,
        'state_id'=>7,
        'key'=>'025',
        'name'=>'Chapultenango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>106,
        'state_id'=>7,
        'key'=>'026',
        'name'=>'Chenalhó',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>107,
        'state_id'=>7,
        'key'=>'027',
        'name'=>'Chiapa de Corzo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>108,
        'state_id'=>7,
        'key'=>'028',
        'name'=>'Chiapilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>109,
        'state_id'=>7,
        'key'=>'029',
        'name'=>'Chicoasén',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>110,
        'state_id'=>7,
        'key'=>'030',
        'name'=>'Chicomuselo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>111,
        'state_id'=>7,
        'key'=>'031',
        'name'=>'Chilón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>112,
        'state_id'=>7,
        'key'=>'032',
        'name'=>'Escuintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>113,
        'state_id'=>7,
        'key'=>'033',
        'name'=>'Francisco León',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>114,
        'state_id'=>7,
        'key'=>'034',
        'name'=>'Frontera Comalapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>115,
        'state_id'=>7,
        'key'=>'035',
        'name'=>'Frontera Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>116,
        'state_id'=>7,
        'key'=>'036',
        'name'=>'La Grandeza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>117,
        'state_id'=>7,
        'key'=>'037',
        'name'=>'Huehuetán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>118,
        'state_id'=>7,
        'key'=>'038',
        'name'=>'Huixtán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>119,
        'state_id'=>7,
        'key'=>'039',
        'name'=>'Huitiupán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>120,
        'state_id'=>7,
        'key'=>'040',
        'name'=>'Huixtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>121,
        'state_id'=>7,
        'key'=>'041',
        'name'=>'La Independencia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>122,
        'state_id'=>7,
        'key'=>'042',
        'name'=>'Ixhuatán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>123,
        'state_id'=>7,
        'key'=>'043',
        'name'=>'Ixtacomitán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>124,
        'state_id'=>7,
        'key'=>'044',
        'name'=>'Ixtapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>125,
        'state_id'=>7,
        'key'=>'045',
        'name'=>'Ixtapangajoya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>126,
        'state_id'=>7,
        'key'=>'046',
        'name'=>'Jiquipilas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>127,
        'state_id'=>7,
        'key'=>'047',
        'name'=>'Jitotol',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>128,
        'state_id'=>7,
        'key'=>'048',
        'name'=>'Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>129,
        'state_id'=>7,
        'key'=>'049',
        'name'=>'Larráinzar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>130,
        'state_id'=>7,
        'key'=>'050',
        'name'=>'La Libertad',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>131,
        'state_id'=>7,
        'key'=>'051',
        'name'=>'Mapastepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>132,
        'state_id'=>7,
        'key'=>'052',
        'name'=>'Las Margaritas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>133,
        'state_id'=>7,
        'key'=>'053',
        'name'=>'Mazapa de Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>134,
        'state_id'=>7,
        'key'=>'054',
        'name'=>'Mazatán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>135,
        'state_id'=>7,
        'key'=>'055',
        'name'=>'Metapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>136,
        'state_id'=>7,
        'key'=>'056',
        'name'=>'Mitontic',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>137,
        'state_id'=>7,
        'key'=>'057',
        'name'=>'Motozintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>138,
        'state_id'=>7,
        'key'=>'058',
        'name'=>'Nicolás Ruíz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>139,
        'state_id'=>7,
        'key'=>'059',
        'name'=>'Ocosingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>140,
        'state_id'=>7,
        'key'=>'060',
        'name'=>'Ocotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>141,
        'state_id'=>7,
        'key'=>'061',
        'name'=>'Ocozocoautla de Espinosa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>142,
        'state_id'=>7,
        'key'=>'062',
        'name'=>'Ostuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>143,
        'state_id'=>7,
        'key'=>'063',
        'name'=>'Osumacinta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>144,
        'state_id'=>7,
        'key'=>'064',
        'name'=>'Oxchuc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>145,
        'state_id'=>7,
        'key'=>'065',
        'name'=>'Palenque',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>146,
        'state_id'=>7,
        'key'=>'066',
        'name'=>'Pantelhó',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>147,
        'state_id'=>7,
        'key'=>'067',
        'name'=>'Pantepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>148,
        'state_id'=>7,
        'key'=>'068',
        'name'=>'Pichucalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>149,
        'state_id'=>7,
        'key'=>'069',
        'name'=>'Pijijiapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>150,
        'state_id'=>7,
        'key'=>'070',
        'name'=>'El Porvenir',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>151,
        'state_id'=>7,
        'key'=>'071',
        'name'=>'Villa Comaltitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>152,
        'state_id'=>7,
        'key'=>'072',
        'name'=>'Pueblo Nuevo Solistahuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>153,
        'state_id'=>7,
        'key'=>'073',
        'name'=>'Rayón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>154,
        'state_id'=>7,
        'key'=>'074',
        'name'=>'Reforma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>155,
        'state_id'=>7,
        'key'=>'075',
        'name'=>'Las Rosas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>156,
        'state_id'=>7,
        'key'=>'076',
        'name'=>'Sabanilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>157,
        'state_id'=>7,
        'key'=>'077',
        'name'=>'Salto de Agua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>158,
        'state_id'=>7,
        'key'=>'078',
        'name'=>'San Cristóbal de las Casas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>159,
        'state_id'=>7,
        'key'=>'079',
        'name'=>'San Fernando',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>160,
        'state_id'=>7,
        'key'=>'080',
        'name'=>'Siltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>161,
        'state_id'=>7,
        'key'=>'081',
        'name'=>'Simojovel',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>162,
        'state_id'=>7,
        'key'=>'082',
        'name'=>'Sitalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>163,
        'state_id'=>7,
        'key'=>'083',
        'name'=>'Socoltenango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>164,
        'state_id'=>7,
        'key'=>'084',
        'name'=>'Solosuchiapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>165,
        'state_id'=>7,
        'key'=>'085',
        'name'=>'Soyaló',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>166,
        'state_id'=>7,
        'key'=>'086',
        'name'=>'Suchiapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>167,
        'state_id'=>7,
        'key'=>'087',
        'name'=>'Suchiate',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>168,
        'state_id'=>7,
        'key'=>'088',
        'name'=>'Sunuapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>169,
        'state_id'=>7,
        'key'=>'089',
        'name'=>'Tapachula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>170,
        'state_id'=>7,
        'key'=>'090',
        'name'=>'Tapalapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>171,
        'state_id'=>7,
        'key'=>'091',
        'name'=>'Tapilula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>172,
        'state_id'=>7,
        'key'=>'092',
        'name'=>'Tecpatán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>173,
        'state_id'=>7,
        'key'=>'093',
        'name'=>'Tenejapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>174,
        'state_id'=>7,
        'key'=>'094',
        'name'=>'Teopisca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>175,
        'state_id'=>7,
        'key'=>'096',
        'name'=>'Tila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>176,
        'state_id'=>7,
        'key'=>'097',
        'name'=>'Tonalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>177,
        'state_id'=>7,
        'key'=>'098',
        'name'=>'Totolapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>178,
        'state_id'=>7,
        'key'=>'099',
        'name'=>'La Trinitaria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>179,
        'state_id'=>7,
        'key'=>'100',
        'name'=>'Tumbalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>180,
        'state_id'=>7,
        'key'=>'101',
        'name'=>'Tuxtla Gutiérrez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>181,
        'state_id'=>7,
        'key'=>'102',
        'name'=>'Tuxtla Chico',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>182,
        'state_id'=>7,
        'key'=>'103',
        'name'=>'Tuzantán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>183,
        'state_id'=>7,
        'key'=>'104',
        'name'=>'Tzimol',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>184,
        'state_id'=>7,
        'key'=>'105',
        'name'=>'Unión Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>185,
        'state_id'=>7,
        'key'=>'106',
        'name'=>'Venustiano Carranza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>186,
        'state_id'=>7,
        'key'=>'107',
        'name'=>'Villa Corzo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>187,
        'state_id'=>7,
        'key'=>'108',
        'name'=>'Villaflores',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>188,
        'state_id'=>7,
        'key'=>'109',
        'name'=>'Yajalón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>189,
        'state_id'=>7,
        'key'=>'110',
        'name'=>'San Lucas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>190,
        'state_id'=>7,
        'key'=>'111',
        'name'=>'Zinacantán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>191,
        'state_id'=>7,
        'key'=>'112',
        'name'=>'San Juan Cancuc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>192,
        'state_id'=>7,
        'key'=>'113',
        'name'=>'Aldama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>193,
        'state_id'=>7,
        'key'=>'114',
        'name'=>'Benemérito de las Américas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>194,
        'state_id'=>7,
        'key'=>'115',
        'name'=>'Maravilla Tenejapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>195,
        'state_id'=>7,
        'key'=>'116',
        'name'=>'Marqués de Comillas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>196,
        'state_id'=>7,
        'key'=>'117',
        'name'=>'Montecristo de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>197,
        'state_id'=>7,
        'key'=>'118',
        'name'=>'San Andrés Duraznal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>198,
        'state_id'=>7,
        'key'=>'119',
        'name'=>'Santiago el Pinar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>199,
        'state_id'=>8,
        'key'=>'001',
        'name'=>'Ahumada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>200,
        'state_id'=>8,
        'key'=>'002',
        'name'=>'Aldama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>201,
        'state_id'=>8,
        'key'=>'003',
        'name'=>'Allende',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>202,
        'state_id'=>8,
        'key'=>'004',
        'name'=>'Aquiles Serdán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>203,
        'state_id'=>8,
        'key'=>'005',
        'name'=>'Ascensión',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>204,
        'state_id'=>8,
        'key'=>'006',
        'name'=>'Bachíniva',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>205,
        'state_id'=>8,
        'key'=>'007',
        'name'=>'Balleza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>206,
        'state_id'=>8,
        'key'=>'008',
        'name'=>'Batopilas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>207,
        'state_id'=>8,
        'key'=>'009',
        'name'=>'Bocoyna',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>208,
        'state_id'=>8,
        'key'=>'010',
        'name'=>'Buenaventura',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>209,
        'state_id'=>8,
        'key'=>'011',
        'name'=>'Camargo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>210,
        'state_id'=>8,
        'key'=>'012',
        'name'=>'Carichí',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>211,
        'state_id'=>8,
        'key'=>'013',
        'name'=>'Casas Grandes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>212,
        'state_id'=>8,
        'key'=>'014',
        'name'=>'Coronado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>213,
        'state_id'=>8,
        'key'=>'015',
        'name'=>'Coyame del Sotol',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>214,
        'state_id'=>8,
        'key'=>'016',
        'name'=>'La Cruz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>215,
        'state_id'=>8,
        'key'=>'017',
        'name'=>'Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>216,
        'state_id'=>8,
        'key'=>'018',
        'name'=>'Cusihuiriachi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>217,
        'state_id'=>8,
        'key'=>'019',
        'name'=>'Chihuahua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>218,
        'state_id'=>8,
        'key'=>'020',
        'name'=>'Chínipas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>219,
        'state_id'=>8,
        'key'=>'021',
        'name'=>'Delicias',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>220,
        'state_id'=>8,
        'key'=>'022',
        'name'=>'Dr. Belisario Domínguez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>221,
        'state_id'=>8,
        'key'=>'023',
        'name'=>'Galeana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>222,
        'state_id'=>8,
        'key'=>'024',
        'name'=>'Santa Isabel',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>223,
        'state_id'=>8,
        'key'=>'025',
        'name'=>'Gómez Farías',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>224,
        'state_id'=>8,
        'key'=>'026',
        'name'=>'Gran Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>225,
        'state_id'=>8,
        'key'=>'027',
        'name'=>'Guachochi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>226,
        'state_id'=>8,
        'key'=>'028',
        'name'=>'Guadalupe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>227,
        'state_id'=>8,
        'key'=>'029',
        'name'=>'Guadalupe y Calvo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>228,
        'state_id'=>8,
        'key'=>'030',
        'name'=>'Guazapares',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>229,
        'state_id'=>8,
        'key'=>'031',
        'name'=>'Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>230,
        'state_id'=>8,
        'key'=>'032',
        'name'=>'Hidalgo del Parral',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>231,
        'state_id'=>8,
        'key'=>'033',
        'name'=>'Huejotitán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>232,
        'state_id'=>8,
        'key'=>'034',
        'name'=>'Ignacio Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>233,
        'state_id'=>8,
        'key'=>'035',
        'name'=>'Janos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>234,
        'state_id'=>8,
        'key'=>'036',
        'name'=>'Jiménez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>235,
        'state_id'=>8,
        'key'=>'037',
        'name'=>'Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>236,
        'state_id'=>8,
        'key'=>'038',
        'name'=>'Julimes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>237,
        'state_id'=>8,
        'key'=>'039',
        'name'=>'López',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>238,
        'state_id'=>8,
        'key'=>'040',
        'name'=>'Madera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>239,
        'state_id'=>8,
        'key'=>'041',
        'name'=>'Maguarichi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>240,
        'state_id'=>8,
        'key'=>'042',
        'name'=>'Manuel Benavides',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>241,
        'state_id'=>8,
        'key'=>'043',
        'name'=>'Matachí',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>242,
        'state_id'=>8,
        'key'=>'044',
        'name'=>'Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>243,
        'state_id'=>8,
        'key'=>'045',
        'name'=>'Meoqui',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>244,
        'state_id'=>8,
        'key'=>'046',
        'name'=>'Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>245,
        'state_id'=>8,
        'key'=>'047',
        'name'=>'Moris',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>246,
        'state_id'=>8,
        'key'=>'048',
        'name'=>'Namiquipa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>247,
        'state_id'=>8,
        'key'=>'049',
        'name'=>'Nonoava',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>248,
        'state_id'=>8,
        'key'=>'050',
        'name'=>'Nuevo Casas Grandes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>249,
        'state_id'=>8,
        'key'=>'051',
        'name'=>'Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>250,
        'state_id'=>8,
        'key'=>'052',
        'name'=>'Ojinaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>251,
        'state_id'=>8,
        'key'=>'053',
        'name'=>'Praxedis G. Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>252,
        'state_id'=>8,
        'key'=>'054',
        'name'=>'Riva Palacio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>253,
        'state_id'=>8,
        'key'=>'055',
        'name'=>'Rosales',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>254,
        'state_id'=>8,
        'key'=>'056',
        'name'=>'Rosario',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>255,
        'state_id'=>8,
        'key'=>'057',
        'name'=>'San Francisco de Borja',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>256,
        'state_id'=>8,
        'key'=>'058',
        'name'=>'San Francisco de Conchos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>257,
        'state_id'=>8,
        'key'=>'059',
        'name'=>'San Francisco del Oro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>258,
        'state_id'=>8,
        'key'=>'060',
        'name'=>'Santa Bárbara',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>259,
        'state_id'=>8,
        'key'=>'061',
        'name'=>'Satevó',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>260,
        'state_id'=>8,
        'key'=>'062',
        'name'=>'Saucillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>261,
        'state_id'=>8,
        'key'=>'063',
        'name'=>'Temósachic',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>262,
        'state_id'=>8,
        'key'=>'064',
        'name'=>'El Tule',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>263,
        'state_id'=>8,
        'key'=>'065',
        'name'=>'Urique',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>264,
        'state_id'=>8,
        'key'=>'066',
        'name'=>'Uruachi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>265,
        'state_id'=>8,
        'key'=>'067',
        'name'=>'Valle de Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>266,
        'state_id'=>9,
        'key'=>'002',
        'name'=>'Azcapotzalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>267,
        'state_id'=>9,
        'key'=>'003',
        'name'=>'Coyoacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>268,
        'state_id'=>9,
        'key'=>'004',
        'name'=>'Cuajimalpa de Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>269,
        'state_id'=>9,
        'key'=>'005',
        'name'=>'Gustavo A. Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>270,
        'state_id'=>9,
        'key'=>'006',
        'name'=>'Iztacalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>271,
        'state_id'=>9,
        'key'=>'007',
        'name'=>'Iztapalapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>272,
        'state_id'=>9,
        'key'=>'008',
        'name'=>'La Magdalena Contreras',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>273,
        'state_id'=>9,
        'key'=>'009',
        'name'=>'Milpa Alta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>274,
        'state_id'=>9,
        'key'=>'010',
        'name'=>'Álvaro Obregón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>275,
        'state_id'=>9,
        'key'=>'011',
        'name'=>'Tláhuac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>276,
        'state_id'=>9,
        'key'=>'012',
        'name'=>'Tlalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>277,
        'state_id'=>9,
        'key'=>'013',
        'name'=>'Xochimilco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>278,
        'state_id'=>9,
        'key'=>'014',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>279,
        'state_id'=>9,
        'key'=>'015',
        'name'=>'Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>280,
        'state_id'=>9,
        'key'=>'016',
        'name'=>'Miguel Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>281,
        'state_id'=>9,
        'key'=>'017',
        'name'=>'Venustiano Carranza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>282,
        'state_id'=>10,
        'key'=>'001',
        'name'=>'Canatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>283,
        'state_id'=>10,
        'key'=>'002',
        'name'=>'Canelas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>284,
        'state_id'=>10,
        'key'=>'003',
        'name'=>'Coneto de Comonfort',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>285,
        'state_id'=>10,
        'key'=>'004',
        'name'=>'Cuencamé',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>286,
        'state_id'=>10,
        'key'=>'005',
        'name'=>'Durango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>287,
        'state_id'=>10,
        'key'=>'006',
        'name'=>'General Simón Bolívar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>288,
        'state_id'=>10,
        'key'=>'007',
        'name'=>'Gómez Palacio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>289,
        'state_id'=>10,
        'key'=>'008',
        'name'=>'Guadalupe Victoria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>290,
        'state_id'=>10,
        'key'=>'009',
        'name'=>'Guanaceví',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>291,
        'state_id'=>10,
        'key'=>'010',
        'name'=>'Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>292,
        'state_id'=>10,
        'key'=>'011',
        'name'=>'Indé',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>293,
        'state_id'=>10,
        'key'=>'012',
        'name'=>'Lerdo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>294,
        'state_id'=>10,
        'key'=>'013',
        'name'=>'Mapimí',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>295,
        'state_id'=>10,
        'key'=>'014',
        'name'=>'Mezquital',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>296,
        'state_id'=>10,
        'key'=>'015',
        'name'=>'Nazas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>297,
        'state_id'=>10,
        'key'=>'016',
        'name'=>'Nombre de Dios',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>298,
        'state_id'=>10,
        'key'=>'017',
        'name'=>'Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>299,
        'state_id'=>10,
        'key'=>'018',
        'name'=>'El Oro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>300,
        'state_id'=>10,
        'key'=>'019',
        'name'=>'Otáez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>301,
        'state_id'=>10,
        'key'=>'020',
        'name'=>'Pánuco de Coronado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>302,
        'state_id'=>10,
        'key'=>'021',
        'name'=>'Peñón Blanco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>303,
        'state_id'=>10,
        'key'=>'022',
        'name'=>'Poanas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>304,
        'state_id'=>10,
        'key'=>'023',
        'name'=>'Pueblo Nuevo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>305,
        'state_id'=>10,
        'key'=>'024',
        'name'=>'Rodeo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>306,
        'state_id'=>10,
        'key'=>'025',
        'name'=>'San Bernardo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>307,
        'state_id'=>10,
        'key'=>'026',
        'name'=>'San Dimas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>308,
        'state_id'=>10,
        'key'=>'027',
        'name'=>'San Juan de Guadalupe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>309,
        'state_id'=>10,
        'key'=>'028',
        'name'=>'San Juan del Río',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>310,
        'state_id'=>10,
        'key'=>'029',
        'name'=>'San Luis del Cordero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>311,
        'state_id'=>10,
        'key'=>'030',
        'name'=>'San Pedro del Gallo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>312,
        'state_id'=>10,
        'key'=>'031',
        'name'=>'Santa Clara',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>313,
        'state_id'=>10,
        'key'=>'032',
        'name'=>'Santiago Papasquiaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>314,
        'state_id'=>10,
        'key'=>'033',
        'name'=>'Súchil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>315,
        'state_id'=>10,
        'key'=>'034',
        'name'=>'Tamazula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>316,
        'state_id'=>10,
        'key'=>'035',
        'name'=>'Tepehuanes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>317,
        'state_id'=>10,
        'key'=>'036',
        'name'=>'Tlahualilo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>318,
        'state_id'=>10,
        'key'=>'037',
        'name'=>'Topia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>319,
        'state_id'=>10,
        'key'=>'038',
        'name'=>'Vicente Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>320,
        'state_id'=>10,
        'key'=>'039',
        'name'=>'Nuevo Ideal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>321,
        'state_id'=>11,
        'key'=>'001',
        'name'=>'Abasolo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>322,
        'state_id'=>11,
        'key'=>'002',
        'name'=>'Acámbaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>323,
        'state_id'=>11,
        'key'=>'003',
        'name'=>'San Miguel de Allende',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>324,
        'state_id'=>11,
        'key'=>'004',
        'name'=>'Apaseo el Alto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>325,
        'state_id'=>11,
        'key'=>'005',
        'name'=>'Apaseo el Grande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>326,
        'state_id'=>11,
        'key'=>'006',
        'name'=>'Atarjea',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>327,
        'state_id'=>11,
        'key'=>'007',
        'name'=>'Celaya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>328,
        'state_id'=>11,
        'key'=>'008',
        'name'=>'Manuel Doblado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>329,
        'state_id'=>11,
        'key'=>'009',
        'name'=>'Comonfort',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>330,
        'state_id'=>11,
        'key'=>'010',
        'name'=>'Coroneo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>331,
        'state_id'=>11,
        'key'=>'011',
        'name'=>'Cortazar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>332,
        'state_id'=>11,
        'key'=>'012',
        'name'=>'Cuerámaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>333,
        'state_id'=>11,
        'key'=>'013',
        'name'=>'Doctor Mora',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>334,
        'state_id'=>11,
        'key'=>'014',
        'name'=>'Dolores Hidalgo Cuna de la Independencia Nacional',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>335,
        'state_id'=>11,
        'key'=>'015',
        'name'=>'Guanajuato',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>336,
        'state_id'=>11,
        'key'=>'016',
        'name'=>'Huanímaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>337,
        'state_id'=>11,
        'key'=>'017',
        'name'=>'Irapuato',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>338,
        'state_id'=>11,
        'key'=>'018',
        'name'=>'Jaral del Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>339,
        'state_id'=>11,
        'key'=>'019',
        'name'=>'Jerécuaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>340,
        'state_id'=>11,
        'key'=>'020',
        'name'=>'León',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>341,
        'state_id'=>11,
        'key'=>'021',
        'name'=>'Moroleón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>342,
        'state_id'=>11,
        'key'=>'022',
        'name'=>'Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>343,
        'state_id'=>11,
        'key'=>'023',
        'name'=>'Pénjamo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>344,
        'state_id'=>11,
        'key'=>'024',
        'name'=>'Pueblo Nuevo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>345,
        'state_id'=>11,
        'key'=>'025',
        'name'=>'Purísima del Rincón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>346,
        'state_id'=>11,
        'key'=>'026',
        'name'=>'Romita',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>347,
        'state_id'=>11,
        'key'=>'027',
        'name'=>'Salamanca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>348,
        'state_id'=>11,
        'key'=>'028',
        'name'=>'Salvatierra',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>349,
        'state_id'=>11,
        'key'=>'029',
        'name'=>'San Diego de la Unión',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>350,
        'state_id'=>11,
        'key'=>'030',
        'name'=>'San Felipe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>351,
        'state_id'=>11,
        'key'=>'031',
        'name'=>'San Francisco del Rincón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>352,
        'state_id'=>11,
        'key'=>'032',
        'name'=>'San José Iturbide',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>353,
        'state_id'=>11,
        'key'=>'033',
        'name'=>'San Luis de la Paz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>354,
        'state_id'=>11,
        'key'=>'034',
        'name'=>'Santa Catarina',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>355,
        'state_id'=>11,
        'key'=>'035',
        'name'=>'Santa Cruz de Juventino Rosas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>356,
        'state_id'=>11,
        'key'=>'036',
        'name'=>'Santiago Maravatío',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>357,
        'state_id'=>11,
        'key'=>'037',
        'name'=>'Silao de la Victoria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>358,
        'state_id'=>11,
        'key'=>'038',
        'name'=>'Tarandacuao',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>359,
        'state_id'=>11,
        'key'=>'039',
        'name'=>'Tarimoro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>360,
        'state_id'=>11,
        'key'=>'040',
        'name'=>'Tierra Blanca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>361,
        'state_id'=>11,
        'key'=>'041',
        'name'=>'Uriangato',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>362,
        'state_id'=>11,
        'key'=>'042',
        'name'=>'Valle de Santiago',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>363,
        'state_id'=>11,
        'key'=>'043',
        'name'=>'Victoria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>364,
        'state_id'=>11,
        'key'=>'044',
        'name'=>'Villagrán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>365,
        'state_id'=>11,
        'key'=>'045',
        'name'=>'Xichú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>366,
        'state_id'=>11,
        'key'=>'046',
        'name'=>'Yuriria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>367,
        'state_id'=>12,
        'key'=>'001',
        'name'=>'Acapulco de Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>368,
        'state_id'=>12,
        'key'=>'002',
        'name'=>'Ahuacuotzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>369,
        'state_id'=>12,
        'key'=>'003',
        'name'=>'Ajuchitlán del Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>370,
        'state_id'=>12,
        'key'=>'004',
        'name'=>'Alcozauca de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>371,
        'state_id'=>12,
        'key'=>'005',
        'name'=>'Alpoyeca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>372,
        'state_id'=>12,
        'key'=>'006',
        'name'=>'Apaxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>373,
        'state_id'=>12,
        'key'=>'007',
        'name'=>'Arcelia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>374,
        'state_id'=>12,
        'key'=>'008',
        'name'=>'Atenango del Río',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>375,
        'state_id'=>12,
        'key'=>'009',
        'name'=>'Atlamajalcingo del Monte',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>376,
        'state_id'=>12,
        'key'=>'010',
        'name'=>'Atlixtac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>377,
        'state_id'=>12,
        'key'=>'011',
        'name'=>'Atoyac de Álvarez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>378,
        'state_id'=>12,
        'key'=>'012',
        'name'=>'Ayutla de los Libres',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>379,
        'state_id'=>12,
        'key'=>'013',
        'name'=>'Azoyú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>380,
        'state_id'=>12,
        'key'=>'014',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>381,
        'state_id'=>12,
        'key'=>'015',
        'name'=>'Buenavista de Cuéllar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>382,
        'state_id'=>12,
        'key'=>'016',
        'name'=>'Coahuayutla de José María Izazaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>383,
        'state_id'=>12,
        'key'=>'017',
        'name'=>'Cocula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>384,
        'state_id'=>12,
        'key'=>'018',
        'name'=>'Copala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>385,
        'state_id'=>12,
        'key'=>'019',
        'name'=>'Copalillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>386,
        'state_id'=>12,
        'key'=>'020',
        'name'=>'Copanatoyac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>387,
        'state_id'=>12,
        'key'=>'021',
        'name'=>'Coyuca de Benítez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>388,
        'state_id'=>12,
        'key'=>'022',
        'name'=>'Coyuca de Catalán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>389,
        'state_id'=>12,
        'key'=>'023',
        'name'=>'Cuajinicuilapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>390,
        'state_id'=>12,
        'key'=>'024',
        'name'=>'Cualác',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>391,
        'state_id'=>12,
        'key'=>'025',
        'name'=>'Cuautepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>392,
        'state_id'=>12,
        'key'=>'026',
        'name'=>'Cuetzala del Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>393,
        'state_id'=>12,
        'key'=>'027',
        'name'=>'Cutzamala de Pinzón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>394,
        'state_id'=>12,
        'key'=>'028',
        'name'=>'Chilapa de Álvarez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>395,
        'state_id'=>12,
        'key'=>'029',
        'name'=>'Chilpancingo de los Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>396,
        'state_id'=>12,
        'key'=>'030',
        'name'=>'Florencio Villarreal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>397,
        'state_id'=>12,
        'key'=>'031',
        'name'=>'General Canuto A. Neri',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>398,
        'state_id'=>12,
        'key'=>'032',
        'name'=>'General Heliodoro Castillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>399,
        'state_id'=>12,
        'key'=>'033',
        'name'=>'Huamuxtitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>400,
        'state_id'=>12,
        'key'=>'034',
        'name'=>'Huitzuco de los Figueroa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>401,
        'state_id'=>12,
        'key'=>'035',
        'name'=>'Iguala de la Independencia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>402,
        'state_id'=>12,
        'key'=>'036',
        'name'=>'Igualapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>403,
        'state_id'=>12,
        'key'=>'037',
        'name'=>'Ixcateopan de Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>404,
        'state_id'=>12,
        'key'=>'038',
        'name'=>'Zihuatanejo de Azueta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>405,
        'state_id'=>12,
        'key'=>'039',
        'name'=>'Juan R. Escudero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>406,
        'state_id'=>12,
        'key'=>'040',
        'name'=>'Leonardo Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>407,
        'state_id'=>12,
        'key'=>'041',
        'name'=>'Malinaltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>408,
        'state_id'=>12,
        'key'=>'042',
        'name'=>'Mártir de Cuilapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>409,
        'state_id'=>12,
        'key'=>'043',
        'name'=>'Metlatónoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>410,
        'state_id'=>12,
        'key'=>'044',
        'name'=>'Mochitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>411,
        'state_id'=>12,
        'key'=>'045',
        'name'=>'Olinalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>412,
        'state_id'=>12,
        'key'=>'046',
        'name'=>'Ometepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>413,
        'state_id'=>12,
        'key'=>'047',
        'name'=>'Pedro Ascencio Alquisiras',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>414,
        'state_id'=>12,
        'key'=>'048',
        'name'=>'Petatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>415,
        'state_id'=>12,
        'key'=>'049',
        'name'=>'Pilcaya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>416,
        'state_id'=>12,
        'key'=>'050',
        'name'=>'Pungarabato',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>417,
        'state_id'=>12,
        'key'=>'051',
        'name'=>'Quechultenango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>418,
        'state_id'=>12,
        'key'=>'052',
        'name'=>'San Luis Acatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>419,
        'state_id'=>12,
        'key'=>'053',
        'name'=>'San Marcos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>420,
        'state_id'=>12,
        'key'=>'054',
        'name'=>'San Miguel Totolapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>421,
        'state_id'=>12,
        'key'=>'055',
        'name'=>'Taxco de Alarcón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>422,
        'state_id'=>12,
        'key'=>'056',
        'name'=>'Tecoanapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>423,
        'state_id'=>12,
        'key'=>'057',
        'name'=>'Técpan de Galeana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>424,
        'state_id'=>12,
        'key'=>'058',
        'name'=>'Teloloapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>425,
        'state_id'=>12,
        'key'=>'059',
        'name'=>'Tepecoacuilco de Trujano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>426,
        'state_id'=>12,
        'key'=>'060',
        'name'=>'Tetipac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>427,
        'state_id'=>12,
        'key'=>'061',
        'name'=>'Tixtla de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>428,
        'state_id'=>12,
        'key'=>'062',
        'name'=>'Tlacoachistlahuaca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>429,
        'state_id'=>12,
        'key'=>'063',
        'name'=>'Tlacoapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>430,
        'state_id'=>12,
        'key'=>'064',
        'name'=>'Tlalchapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>431,
        'state_id'=>12,
        'key'=>'065',
        'name'=>'Tlalixtaquilla de Maldonado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>432,
        'state_id'=>12,
        'key'=>'066',
        'name'=>'Tlapa de Comonfort',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>433,
        'state_id'=>12,
        'key'=>'067',
        'name'=>'Tlapehuala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>434,
        'state_id'=>12,
        'key'=>'068',
        'name'=>'La Unión de Isidoro Montes de Oca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>435,
        'state_id'=>12,
        'key'=>'069',
        'name'=>'Xalpatláhuac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>436,
        'state_id'=>12,
        'key'=>'070',
        'name'=>'Xochihuehuetlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>437,
        'state_id'=>12,
        'key'=>'071',
        'name'=>'Xochistlahuaca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>438,
        'state_id'=>12,
        'key'=>'072',
        'name'=>'Zapotitlán Tablas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>439,
        'state_id'=>12,
        'key'=>'073',
        'name'=>'Zirándaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>440,
        'state_id'=>12,
        'key'=>'074',
        'name'=>'Zitlala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>441,
        'state_id'=>12,
        'key'=>'075',
        'name'=>'Eduardo Neri',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>442,
        'state_id'=>12,
        'key'=>'076',
        'name'=>'Acatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>443,
        'state_id'=>12,
        'key'=>'077',
        'name'=>'Marquelia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>444,
        'state_id'=>12,
        'key'=>'078',
        'name'=>'Cochoapa el Grande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>445,
        'state_id'=>12,
        'key'=>'079',
        'name'=>'José Joaquín de Herrera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>446,
        'state_id'=>12,
        'key'=>'080',
        'name'=>'Juchitán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>447,
        'state_id'=>12,
        'key'=>'081',
        'name'=>'Iliatenco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>448,
        'state_id'=>13,
        'key'=>'001',
        'name'=>'Acatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>449,
        'state_id'=>13,
        'key'=>'002',
        'name'=>'Acaxochitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>450,
        'state_id'=>13,
        'key'=>'003',
        'name'=>'Actopan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>451,
        'state_id'=>13,
        'key'=>'004',
        'name'=>'Agua Blanca de Iturbide',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>452,
        'state_id'=>13,
        'key'=>'005',
        'name'=>'Ajacuba',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>453,
        'state_id'=>13,
        'key'=>'006',
        'name'=>'Alfajayucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>454,
        'state_id'=>13,
        'key'=>'007',
        'name'=>'Almoloya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>455,
        'state_id'=>13,
        'key'=>'008',
        'name'=>'Apan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>456,
        'state_id'=>13,
        'key'=>'009',
        'name'=>'El Arenal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>457,
        'state_id'=>13,
        'key'=>'010',
        'name'=>'Atitalaquia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>458,
        'state_id'=>13,
        'key'=>'011',
        'name'=>'Atlapexco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>459,
        'state_id'=>13,
        'key'=>'012',
        'name'=>'Atotonilco el Grande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>460,
        'state_id'=>13,
        'key'=>'013',
        'name'=>'Atotonilco de Tula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>461,
        'state_id'=>13,
        'key'=>'014',
        'name'=>'Calnali',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>462,
        'state_id'=>13,
        'key'=>'015',
        'name'=>'Cardonal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>463,
        'state_id'=>13,
        'key'=>'016',
        'name'=>'Cuautepec de Hinojosa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>464,
        'state_id'=>13,
        'key'=>'017',
        'name'=>'Chapantongo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>465,
        'state_id'=>13,
        'key'=>'018',
        'name'=>'Chapulhuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>466,
        'state_id'=>13,
        'key'=>'019',
        'name'=>'Chilcuautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>467,
        'state_id'=>13,
        'key'=>'020',
        'name'=>'Eloxochitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>468,
        'state_id'=>13,
        'key'=>'021',
        'name'=>'Emiliano Zapata',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>469,
        'state_id'=>13,
        'key'=>'022',
        'name'=>'Epazoyucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>470,
        'state_id'=>13,
        'key'=>'023',
        'name'=>'Francisco I. Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>471,
        'state_id'=>13,
        'key'=>'024',
        'name'=>'Huasca de Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>472,
        'state_id'=>13,
        'key'=>'025',
        'name'=>'Huautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>473,
        'state_id'=>13,
        'key'=>'026',
        'name'=>'Huazalingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>474,
        'state_id'=>13,
        'key'=>'027',
        'name'=>'Huehuetla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>475,
        'state_id'=>13,
        'key'=>'028',
        'name'=>'Huejutla de Reyes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>476,
        'state_id'=>13,
        'key'=>'029',
        'name'=>'Huichapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>477,
        'state_id'=>13,
        'key'=>'030',
        'name'=>'Ixmiquilpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>478,
        'state_id'=>13,
        'key'=>'031',
        'name'=>'Jacala de Ledezma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>479,
        'state_id'=>13,
        'key'=>'032',
        'name'=>'Jaltocán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>480,
        'state_id'=>13,
        'key'=>'033',
        'name'=>'Juárez Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>481,
        'state_id'=>13,
        'key'=>'034',
        'name'=>'Lolotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>482,
        'state_id'=>13,
        'key'=>'035',
        'name'=>'Metepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>483,
        'state_id'=>13,
        'key'=>'036',
        'name'=>'San Agustín Metzquititlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>484,
        'state_id'=>13,
        'key'=>'037',
        'name'=>'Metztitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>485,
        'state_id'=>13,
        'key'=>'038',
        'name'=>'Mineral del Chico',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>486,
        'state_id'=>13,
        'key'=>'039',
        'name'=>'Mineral del Monte',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>487,
        'state_id'=>13,
        'key'=>'040',
        'name'=>'La Misión',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>488,
        'state_id'=>13,
        'key'=>'041',
        'name'=>'Mixquiahuala de Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>489,
        'state_id'=>13,
        'key'=>'042',
        'name'=>'Molango de Escamilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>490,
        'state_id'=>13,
        'key'=>'043',
        'name'=>'Nicolás Flores',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>491,
        'state_id'=>13,
        'key'=>'044',
        'name'=>'Nopala de Villagrán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>492,
        'state_id'=>13,
        'key'=>'045',
        'name'=>'Omitlán de Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>493,
        'state_id'=>13,
        'key'=>'046',
        'name'=>'San Felipe Orizatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>494,
        'state_id'=>13,
        'key'=>'047',
        'name'=>'Pacula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>495,
        'state_id'=>13,
        'key'=>'048',
        'name'=>'Pachuca de Soto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>496,
        'state_id'=>13,
        'key'=>'049',
        'name'=>'Pisaflores',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>497,
        'state_id'=>13,
        'key'=>'050',
        'name'=>'Progreso de Obregón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>498,
        'state_id'=>13,
        'key'=>'051',
        'name'=>'Mineral de la Reforma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>499,
        'state_id'=>13,
        'key'=>'052',
        'name'=>'San Agustín Tlaxiaca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>500,
        'state_id'=>13,
        'key'=>'053',
        'name'=>'San Bartolo Tutotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>501,
        'state_id'=>13,
        'key'=>'054',
        'name'=>'San Salvador',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>502,
        'state_id'=>13,
        'key'=>'055',
        'name'=>'Santiago de Anaya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>503,
        'state_id'=>13,
        'key'=>'056',
        'name'=>'Santiago Tulantepec de Lugo Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>504,
        'state_id'=>13,
        'key'=>'057',
        'name'=>'Singuilucan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>505,
        'state_id'=>13,
        'key'=>'058',
        'name'=>'Tasquillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>506,
        'state_id'=>13,
        'key'=>'059',
        'name'=>'Tecozautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>507,
        'state_id'=>13,
        'key'=>'060',
        'name'=>'Tenango de Doria',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>508,
        'state_id'=>13,
        'key'=>'061',
        'name'=>'Tepeapulco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>509,
        'state_id'=>13,
        'key'=>'062',
        'name'=>'Tepehuacán de Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>510,
        'state_id'=>13,
        'key'=>'063',
        'name'=>'Tepeji del Río de Ocampo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>511,
        'state_id'=>13,
        'key'=>'064',
        'name'=>'Tepetitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>512,
        'state_id'=>13,
        'key'=>'065',
        'name'=>'Tetepango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>513,
        'state_id'=>13,
        'key'=>'066',
        'name'=>'Villa de Tezontepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>514,
        'state_id'=>13,
        'key'=>'067',
        'name'=>'Tezontepec de Aldama',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>515,
        'state_id'=>13,
        'key'=>'068',
        'name'=>'Tianguistengo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>516,
        'state_id'=>13,
        'key'=>'069',
        'name'=>'Tizayuca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>517,
        'state_id'=>13,
        'key'=>'070',
        'name'=>'Tlahuelilpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>518,
        'state_id'=>13,
        'key'=>'071',
        'name'=>'Tlahuiltepa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>519,
        'state_id'=>13,
        'key'=>'072',
        'name'=>'Tlanalapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>520,
        'state_id'=>13,
        'key'=>'073',
        'name'=>'Tlanchinol',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>521,
        'state_id'=>13,
        'key'=>'074',
        'name'=>'Tlaxcoapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>522,
        'state_id'=>13,
        'key'=>'075',
        'name'=>'Tolcayuca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>523,
        'state_id'=>13,
        'key'=>'076',
        'name'=>'Tula de Allende',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>524,
        'state_id'=>13,
        'key'=>'077',
        'name'=>'Tulancingo de Bravo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>525,
        'state_id'=>13,
        'key'=>'078',
        'name'=>'Xochiatipan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>526,
        'state_id'=>13,
        'key'=>'079',
        'name'=>'Xochicoatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>527,
        'state_id'=>13,
        'key'=>'080',
        'name'=>'Yahualica',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>528,
        'state_id'=>13,
        'key'=>'081',
        'name'=>'Zacualtipán de Ángeles',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>529,
        'state_id'=>13,
        'key'=>'082',
        'name'=>'Zapotlán de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>530,
        'state_id'=>13,
        'key'=>'083',
        'name'=>'Zempoala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>531,
        'state_id'=>13,
        'key'=>'084',
        'name'=>'Zimapán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>532,
        'state_id'=>14,
        'key'=>'001',
        'name'=>'Acatic',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>533,
        'state_id'=>14,
        'key'=>'002',
        'name'=>'Acatlán de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>534,
        'state_id'=>14,
        'key'=>'003',
        'name'=>'Ahualulco de Mercado',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>535,
        'state_id'=>14,
        'key'=>'004',
        'name'=>'Amacueca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>536,
        'state_id'=>14,
        'key'=>'005',
        'name'=>'Amatitán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>537,
        'state_id'=>14,
        'key'=>'006',
        'name'=>'Ameca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>538,
        'state_id'=>14,
        'key'=>'007',
        'name'=>'San Juanito de Escobedo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>539,
        'state_id'=>14,
        'key'=>'008',
        'name'=>'Arandas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>540,
        'state_id'=>14,
        'key'=>'009',
        'name'=>'El Arenal',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>541,
        'state_id'=>14,
        'key'=>'010',
        'name'=>'Atemajac de Brizuela',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>542,
        'state_id'=>14,
        'key'=>'011',
        'name'=>'Atengo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>543,
        'state_id'=>14,
        'key'=>'012',
        'name'=>'Atenguillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>544,
        'state_id'=>14,
        'key'=>'013',
        'name'=>'Atotonilco el Alto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>545,
        'state_id'=>14,
        'key'=>'014',
        'name'=>'Atoyac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>546,
        'state_id'=>14,
        'key'=>'015',
        'name'=>'Autlán de Navarro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>547,
        'state_id'=>14,
        'key'=>'016',
        'name'=>'Ayotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>548,
        'state_id'=>14,
        'key'=>'017',
        'name'=>'Ayutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>549,
        'state_id'=>14,
        'key'=>'018',
        'name'=>'La Barca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>550,
        'state_id'=>14,
        'key'=>'019',
        'name'=>'Bolaños',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>551,
        'state_id'=>14,
        'key'=>'020',
        'name'=>'Cabo Corrientes',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>552,
        'state_id'=>14,
        'key'=>'021',
        'name'=>'Casimiro Castillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>553,
        'state_id'=>14,
        'key'=>'022',
        'name'=>'Cihuatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>554,
        'state_id'=>14,
        'key'=>'023',
        'name'=>'Zapotlán el Grande',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>555,
        'state_id'=>14,
        'key'=>'024',
        'name'=>'Cocula',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>556,
        'state_id'=>14,
        'key'=>'025',
        'name'=>'Colotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>557,
        'state_id'=>14,
        'key'=>'026',
        'name'=>'Concepción de Buenos Aires',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>558,
        'state_id'=>14,
        'key'=>'027',
        'name'=>'Cuautitlán de García Barragán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>559,
        'state_id'=>14,
        'key'=>'028',
        'name'=>'Cuautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>560,
        'state_id'=>14,
        'key'=>'029',
        'name'=>'Cuquío',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>561,
        'state_id'=>14,
        'key'=>'030',
        'name'=>'Chapala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>562,
        'state_id'=>14,
        'key'=>'031',
        'name'=>'Chimaltitán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>563,
        'state_id'=>14,
        'key'=>'032',
        'name'=>'Chiquilistlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>564,
        'state_id'=>14,
        'key'=>'033',
        'name'=>'Degollado',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>565,
        'state_id'=>14,
        'key'=>'034',
        'name'=>'Ejutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>566,
        'state_id'=>14,
        'key'=>'035',
        'name'=>'Encarnación de Díaz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>567,
        'state_id'=>14,
        'key'=>'036',
        'name'=>'Etzatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>568,
        'state_id'=>14,
        'key'=>'037',
        'name'=>'El Grullo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>569,
        'state_id'=>14,
        'key'=>'038',
        'name'=>'Guachinango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>570,
        'state_id'=>14,
        'key'=>'039',
        'name'=>'Guadalajara',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>571,
        'state_id'=>14,
        'key'=>'040',
        'name'=>'Hostotipaquillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>572,
        'state_id'=>14,
        'key'=>'041',
        'name'=>'Huejúcar',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>573,
        'state_id'=>14,
        'key'=>'042',
        'name'=>'Huejuquilla el Alto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>574,
        'state_id'=>14,
        'key'=>'043',
        'name'=>'La Huerta',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>575,
        'state_id'=>14,
        'key'=>'044',
        'name'=>'Ixtlahuacán de los Membrillos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>576,
        'state_id'=>14,
        'key'=>'045',
        'name'=>'Ixtlahuacán del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>577,
        'state_id'=>14,
        'key'=>'046',
        'name'=>'Jalostotitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>578,
        'state_id'=>14,
        'key'=>'047',
        'name'=>'Jamay',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>579,
        'state_id'=>14,
        'key'=>'048',
        'name'=>'Jesús María',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>580,
        'state_id'=>14,
        'key'=>'049',
        'name'=>'Jilotlán de los Dolores',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>581,
        'state_id'=>14,
        'key'=>'050',
        'name'=>'Jocotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>582,
        'state_id'=>14,
        'key'=>'051',
        'name'=>'Juanacatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>583,
        'state_id'=>14,
        'key'=>'052',
        'name'=>'Juchitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>584,
        'state_id'=>14,
        'key'=>'053',
        'name'=>'Lagos de Moreno',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>585,
        'state_id'=>14,
        'key'=>'054',
        'name'=>'El Limón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>586,
        'state_id'=>14,
        'key'=>'055',
        'name'=>'Magdalena',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>587,
        'state_id'=>14,
        'key'=>'056',
        'name'=>'Santa María del Oro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>588,
        'state_id'=>14,
        'key'=>'057',
        'name'=>'La Manzanilla de la Paz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>589,
        'state_id'=>14,
        'key'=>'058',
        'name'=>'Mascota',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>590,
        'state_id'=>14,
        'key'=>'059',
        'name'=>'Mazamitla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>591,
        'state_id'=>14,
        'key'=>'060',
        'name'=>'Mexticacán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>592,
        'state_id'=>14,
        'key'=>'061',
        'name'=>'Mezquitic',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>593,
        'state_id'=>14,
        'key'=>'062',
        'name'=>'Mixtlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>594,
        'state_id'=>14,
        'key'=>'063',
        'name'=>'Ocotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>595,
        'state_id'=>14,
        'key'=>'064',
        'name'=>'Ojuelos de Jalisco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>596,
        'state_id'=>14,
        'key'=>'065',
        'name'=>'Pihuamo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>597,
        'state_id'=>14,
        'key'=>'066',
        'name'=>'Poncitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>598,
        'state_id'=>14,
        'key'=>'067',
        'name'=>'Puerto Vallarta',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>599,
        'state_id'=>14,
        'key'=>'068',
        'name'=>'Villa Purificación',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>600,
        'state_id'=>14,
        'key'=>'069',
        'name'=>'Quitupan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>601,
        'state_id'=>14,
        'key'=>'070',
        'name'=>'El Salto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>602,
        'state_id'=>14,
        'key'=>'071',
        'name'=>'San Cristóbal de la Barranca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>603,
        'state_id'=>14,
        'key'=>'072',
        'name'=>'San Diego de Alejandría',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>604,
        'state_id'=>14,
        'key'=>'073',
        'name'=>'San Juan de los Lagos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>605,
        'state_id'=>14,
        'key'=>'074',
        'name'=>'San Julián',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>606,
        'state_id'=>14,
        'key'=>'075',
        'name'=>'San Marcos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>607,
        'state_id'=>14,
        'key'=>'076',
        'name'=>'San Martín de Bolaños',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>608,
        'state_id'=>14,
        'key'=>'077',
        'name'=>'San Martín Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>609,
        'state_id'=>14,
        'key'=>'078',
        'name'=>'San Miguel el Alto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>610,
        'state_id'=>14,
        'key'=>'079',
        'name'=>'Gómez Farías',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>611,
        'state_id'=>14,
        'key'=>'080',
        'name'=>'San Sebastián del Oeste',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>612,
        'state_id'=>14,
        'key'=>'081',
        'name'=>'Santa María de los Ángeles',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>613,
        'state_id'=>14,
        'key'=>'082',
        'name'=>'Sayula',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>614,
        'state_id'=>14,
        'key'=>'083',
        'name'=>'Tala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>615,
        'state_id'=>14,
        'key'=>'084',
        'name'=>'Talpa de Allende',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>616,
        'state_id'=>14,
        'key'=>'085',
        'name'=>'Tamazula de Gordiano',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>617,
        'state_id'=>14,
        'key'=>'086',
        'name'=>'Tapalpa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>618,
        'state_id'=>14,
        'key'=>'087',
        'name'=>'Tecalitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>619,
        'state_id'=>14,
        'key'=>'088',
        'name'=>'Tecolotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>620,
        'state_id'=>14,
        'key'=>'089',
        'name'=>'Techaluta de Montenegro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>621,
        'state_id'=>14,
        'key'=>'090',
        'name'=>'Tenamaxtlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>622,
        'state_id'=>14,
        'key'=>'091',
        'name'=>'Teocaltiche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>623,
        'state_id'=>14,
        'key'=>'092',
        'name'=>'Teocuitatlán de Corona',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>624,
        'state_id'=>14,
        'key'=>'093',
        'name'=>'Tepatitlán de Morelos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>625,
        'state_id'=>14,
        'key'=>'094',
        'name'=>'Tequila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>626,
        'state_id'=>14,
        'key'=>'095',
        'name'=>'Teuchitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>627,
        'state_id'=>14,
        'key'=>'096',
        'name'=>'Tizapán el Alto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>628,
        'state_id'=>14,
        'key'=>'097',
        'name'=>'Tlajomulco de Zúñiga',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>629,
        'state_id'=>14,
        'key'=>'098',
        'name'=>'San Pedro Tlaquepaque',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>630,
        'state_id'=>14,
        'key'=>'099',
        'name'=>'Tolimán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>631,
        'state_id'=>14,
        'key'=>'100',
        'name'=>'Tomatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>632,
        'state_id'=>14,
        'key'=>'101',
        'name'=>'Tonalá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>633,
        'state_id'=>14,
        'key'=>'102',
        'name'=>'Tonaya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>634,
        'state_id'=>14,
        'key'=>'103',
        'name'=>'Tonila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>635,
        'state_id'=>14,
        'key'=>'104',
        'name'=>'Totatiche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>636,
        'state_id'=>14,
        'key'=>'105',
        'name'=>'Tototlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>637,
        'state_id'=>14,
        'key'=>'106',
        'name'=>'Tuxcacuesco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>638,
        'state_id'=>14,
        'key'=>'107',
        'name'=>'Tuxcueca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>639,
        'state_id'=>14,
        'key'=>'108',
        'name'=>'Tuxpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>640,
        'state_id'=>14,
        'key'=>'109',
        'name'=>'Unión de San Antonio',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>641,
        'state_id'=>14,
        'key'=>'110',
        'name'=>'Unión de Tula',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>642,
        'state_id'=>14,
        'key'=>'111',
        'name'=>'Valle de Guadalupe',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>643,
        'state_id'=>14,
        'key'=>'112',
        'name'=>'Valle de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>644,
        'state_id'=>14,
        'key'=>'113',
        'name'=>'San Gabriel',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>645,
        'state_id'=>14,
        'key'=>'114',
        'name'=>'Villa Corona',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>646,
        'state_id'=>14,
        'key'=>'115',
        'name'=>'Villa Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>647,
        'state_id'=>14,
        'key'=>'116',
        'name'=>'Villa Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>648,
        'state_id'=>14,
        'key'=>'117',
        'name'=>'Cañadas de Obregón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>649,
        'state_id'=>14,
        'key'=>'118',
        'name'=>'Yahualica de González Gallo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>650,
        'state_id'=>14,
        'key'=>'119',
        'name'=>'Zacoalco de Torres',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>651,
        'state_id'=>14,
        'key'=>'120',
        'name'=>'Zapopan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>652,
        'state_id'=>14,
        'key'=>'121',
        'name'=>'Zapotiltic',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>653,
        'state_id'=>14,
        'key'=>'122',
        'name'=>'Zapotitlán de Vadillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>654,
        'state_id'=>14,
        'key'=>'123',
        'name'=>'Zapotlán del Rey',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>655,
        'state_id'=>14,
        'key'=>'124',
        'name'=>'Zapotlanejo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>656,
        'state_id'=>14,
        'key'=>'125',
        'name'=>'San Ignacio Cerro Gordo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>657,
        'state_id'=>15,
        'key'=>'001',
        'name'=>'Acambay de Ruíz Castañeda',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>658,
        'state_id'=>15,
        'key'=>'002',
        'name'=>'Acolman',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>659,
        'state_id'=>15,
        'key'=>'003',
        'name'=>'Aculco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>660,
        'state_id'=>15,
        'key'=>'004',
        'name'=>'Almoloya de Alquisiras',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>661,
        'state_id'=>15,
        'key'=>'005',
        'name'=>'Almoloya de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>662,
        'state_id'=>15,
        'key'=>'006',
        'name'=>'Almoloya del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>663,
        'state_id'=>15,
        'key'=>'007',
        'name'=>'Amanalco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>664,
        'state_id'=>15,
        'key'=>'008',
        'name'=>'Amatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>665,
        'state_id'=>15,
        'key'=>'009',
        'name'=>'Amecameca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>666,
        'state_id'=>15,
        'key'=>'010',
        'name'=>'Apaxco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>667,
        'state_id'=>15,
        'key'=>'011',
        'name'=>'Atenco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>668,
        'state_id'=>15,
        'key'=>'012',
        'name'=>'Atizapán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>669,
        'state_id'=>15,
        'key'=>'013',
        'name'=>'Atizapán de Zaragoza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>670,
        'state_id'=>15,
        'key'=>'014',
        'name'=>'Atlacomulco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>671,
        'state_id'=>15,
        'key'=>'015',
        'name'=>'Atlautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>672,
        'state_id'=>15,
        'key'=>'016',
        'name'=>'Axapusco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>673,
        'state_id'=>15,
        'key'=>'017',
        'name'=>'Ayapango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>674,
        'state_id'=>15,
        'key'=>'018',
        'name'=>'Calimaya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>675,
        'state_id'=>15,
        'key'=>'019',
        'name'=>'Capulhuac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>676,
        'state_id'=>15,
        'key'=>'020',
        'name'=>'Coacalco de Berriozábal',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>677,
        'state_id'=>15,
        'key'=>'021',
        'name'=>'Coatepec Harinas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>678,
        'state_id'=>15,
        'key'=>'022',
        'name'=>'Cocotitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>679,
        'state_id'=>15,
        'key'=>'023',
        'name'=>'Coyotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>680,
        'state_id'=>15,
        'key'=>'024',
        'name'=>'Cuautitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>681,
        'state_id'=>15,
        'key'=>'025',
        'name'=>'Chalco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>682,
        'state_id'=>15,
        'key'=>'026',
        'name'=>'Chapa de Mota',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>683,
        'state_id'=>15,
        'key'=>'027',
        'name'=>'Chapultepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>684,
        'state_id'=>15,
        'key'=>'028',
        'name'=>'Chiautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>685,
        'state_id'=>15,
        'key'=>'029',
        'name'=>'Chicoloapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>686,
        'state_id'=>15,
        'key'=>'030',
        'name'=>'Chiconcuac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>687,
        'state_id'=>15,
        'key'=>'031',
        'name'=>'Chimalhuacán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>688,
        'state_id'=>15,
        'key'=>'032',
        'name'=>'Donato Guerra',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>689,
        'state_id'=>15,
        'key'=>'033',
        'name'=>'Ecatepec de Morelos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>690,
        'state_id'=>15,
        'key'=>'034',
        'name'=>'Ecatzingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>691,
        'state_id'=>15,
        'key'=>'035',
        'name'=>'Huehuetoca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>692,
        'state_id'=>15,
        'key'=>'036',
        'name'=>'Hueypoxtla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>693,
        'state_id'=>15,
        'key'=>'037',
        'name'=>'Huixquilucan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>694,
        'state_id'=>15,
        'key'=>'038',
        'name'=>'Isidro Fabela',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>695,
        'state_id'=>15,
        'key'=>'039',
        'name'=>'Ixtapaluca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>696,
        'state_id'=>15,
        'key'=>'040',
        'name'=>'Ixtapan de la Sal',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>697,
        'state_id'=>15,
        'key'=>'041',
        'name'=>'Ixtapan del Oro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>698,
        'state_id'=>15,
        'key'=>'042',
        'name'=>'Ixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>699,
        'state_id'=>15,
        'key'=>'043',
        'name'=>'Xalatlaco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>700,
        'state_id'=>15,
        'key'=>'044',
        'name'=>'Jaltenco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>701,
        'state_id'=>15,
        'key'=>'045',
        'name'=>'Jilotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>702,
        'state_id'=>15,
        'key'=>'046',
        'name'=>'Jilotzingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>703,
        'state_id'=>15,
        'key'=>'047',
        'name'=>'Jiquipilco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>704,
        'state_id'=>15,
        'key'=>'048',
        'name'=>'Jocotitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>705,
        'state_id'=>15,
        'key'=>'049',
        'name'=>'Joquicingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>706,
        'state_id'=>15,
        'key'=>'050',
        'name'=>'Juchitepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>707,
        'state_id'=>15,
        'key'=>'051',
        'name'=>'Lerma',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>708,
        'state_id'=>15,
        'key'=>'052',
        'name'=>'Malinalco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>709,
        'state_id'=>15,
        'key'=>'053',
        'name'=>'Melchor Ocampo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>710,
        'state_id'=>15,
        'key'=>'054',
        'name'=>'Metepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>711,
        'state_id'=>15,
        'key'=>'055',
        'name'=>'Mexicaltzingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>712,
        'state_id'=>15,
        'key'=>'056',
        'name'=>'Morelos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>713,
        'state_id'=>15,
        'key'=>'057',
        'name'=>'Naucalpan de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>714,
        'state_id'=>15,
        'key'=>'058',
        'name'=>'Nezahualcóyotl',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>715,
        'state_id'=>15,
        'key'=>'059',
        'name'=>'Nextlalpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>716,
        'state_id'=>15,
        'key'=>'060',
        'name'=>'Nicolás Romero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>717,
        'state_id'=>15,
        'key'=>'061',
        'name'=>'Nopaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>718,
        'state_id'=>15,
        'key'=>'062',
        'name'=>'Ocoyoacac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>719,
        'state_id'=>15,
        'key'=>'063',
        'name'=>'Ocuilan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>720,
        'state_id'=>15,
        'key'=>'064',
        'name'=>'El Oro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>721,
        'state_id'=>15,
        'key'=>'065',
        'name'=>'Otumba',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>722,
        'state_id'=>15,
        'key'=>'066',
        'name'=>'Otzoloapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>723,
        'state_id'=>15,
        'key'=>'067',
        'name'=>'Otzolotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>724,
        'state_id'=>15,
        'key'=>'068',
        'name'=>'Ozumba',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>725,
        'state_id'=>15,
        'key'=>'069',
        'name'=>'Papalotla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>726,
        'state_id'=>15,
        'key'=>'070',
        'name'=>'La Paz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>727,
        'state_id'=>15,
        'key'=>'071',
        'name'=>'Polotitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>728,
        'state_id'=>15,
        'key'=>'072',
        'name'=>'Rayón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>729,
        'state_id'=>15,
        'key'=>'073',
        'name'=>'San Antonio la Isla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>730,
        'state_id'=>15,
        'key'=>'074',
        'name'=>'San Felipe del Progreso',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>731,
        'state_id'=>15,
        'key'=>'075',
        'name'=>'San Martín de las Pirámides',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>732,
        'state_id'=>15,
        'key'=>'076',
        'name'=>'San Mateo Atenco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>733,
        'state_id'=>15,
        'key'=>'077',
        'name'=>'San Simón de Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>734,
        'state_id'=>15,
        'key'=>'078',
        'name'=>'Santo Tomás',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>735,
        'state_id'=>15,
        'key'=>'079',
        'name'=>'Soyaniquilpan de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>736,
        'state_id'=>15,
        'key'=>'080',
        'name'=>'Sultepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>737,
        'state_id'=>15,
        'key'=>'081',
        'name'=>'Tecámac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>738,
        'state_id'=>15,
        'key'=>'082',
        'name'=>'Tejupilco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>739,
        'state_id'=>15,
        'key'=>'083',
        'name'=>'Temamatla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>740,
        'state_id'=>15,
        'key'=>'084',
        'name'=>'Temascalapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>741,
        'state_id'=>15,
        'key'=>'085',
        'name'=>'Temascalcingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>742,
        'state_id'=>15,
        'key'=>'086',
        'name'=>'Temascaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>743,
        'state_id'=>15,
        'key'=>'087',
        'name'=>'Temoaya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>744,
        'state_id'=>15,
        'key'=>'088',
        'name'=>'Tenancingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>745,
        'state_id'=>15,
        'key'=>'089',
        'name'=>'Tenango del Aire',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>746,
        'state_id'=>15,
        'key'=>'090',
        'name'=>'Tenango del Valle',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>747,
        'state_id'=>15,
        'key'=>'091',
        'name'=>'Teoloyucan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>748,
        'state_id'=>15,
        'key'=>'092',
        'name'=>'Teotihuacán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>749,
        'state_id'=>15,
        'key'=>'093',
        'name'=>'Tepetlaoxtoc',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>750,
        'state_id'=>15,
        'key'=>'094',
        'name'=>'Tepetlixpa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>751,
        'state_id'=>15,
        'key'=>'095',
        'name'=>'Tepotzotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>752,
        'state_id'=>15,
        'key'=>'096',
        'name'=>'Tequixquiac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>753,
        'state_id'=>15,
        'key'=>'097',
        'name'=>'Texcaltitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>754,
        'state_id'=>15,
        'key'=>'098',
        'name'=>'Texcalyacac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>755,
        'state_id'=>15,
        'key'=>'099',
        'name'=>'Texcoco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>756,
        'state_id'=>15,
        'key'=>'100',
        'name'=>'Tezoyuca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>757,
        'state_id'=>15,
        'key'=>'101',
        'name'=>'Tianguistenco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>758,
        'state_id'=>15,
        'key'=>'102',
        'name'=>'Timilpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>759,
        'state_id'=>15,
        'key'=>'103',
        'name'=>'Tlalmanalco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>760,
        'state_id'=>15,
        'key'=>'104',
        'name'=>'Tlalnepantla de Baz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>761,
        'state_id'=>15,
        'key'=>'105',
        'name'=>'Tlatlaya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>762,
        'state_id'=>15,
        'key'=>'106',
        'name'=>'Toluca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>763,
        'state_id'=>15,
        'key'=>'107',
        'name'=>'Tonatico',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>764,
        'state_id'=>15,
        'key'=>'108',
        'name'=>'Tultepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>765,
        'state_id'=>15,
        'key'=>'109',
        'name'=>'Tultitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>766,
        'state_id'=>15,
        'key'=>'110',
        'name'=>'Valle de Bravo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>767,
        'state_id'=>15,
        'key'=>'111',
        'name'=>'Villa de Allende',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>768,
        'state_id'=>15,
        'key'=>'112',
        'name'=>'Villa del Carbón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>769,
        'state_id'=>15,
        'key'=>'113',
        'name'=>'Villa Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>770,
        'state_id'=>15,
        'key'=>'114',
        'name'=>'Villa Victoria',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>771,
        'state_id'=>15,
        'key'=>'115',
        'name'=>'Xonacatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>772,
        'state_id'=>15,
        'key'=>'116',
        'name'=>'Zacazonapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>773,
        'state_id'=>15,
        'key'=>'117',
        'name'=>'Zacualpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>774,
        'state_id'=>15,
        'key'=>'118',
        'name'=>'Zinacantepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>775,
        'state_id'=>15,
        'key'=>'119',
        'name'=>'Zumpahuacán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>776,
        'state_id'=>15,
        'key'=>'120',
        'name'=>'Zumpango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>777,
        'state_id'=>15,
        'key'=>'121',
        'name'=>'Cuautitlán Izcalli',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>778,
        'state_id'=>15,
        'key'=>'122',
        'name'=>'Valle de Chalco Solidaridad',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>779,
        'state_id'=>15,
        'key'=>'123',
        'name'=>'Luvianos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>780,
        'state_id'=>15,
        'key'=>'124',
        'name'=>'San José del Rincón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>781,
        'state_id'=>15,
        'key'=>'125',
        'name'=>'Tonanitla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>782,
        'state_id'=>16,
        'key'=>'001',
        'name'=>'Acuitzio',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>783,
        'state_id'=>16,
        'key'=>'002',
        'name'=>'Aguililla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>784,
        'state_id'=>16,
        'key'=>'003',
        'name'=>'Álvaro Obregón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>785,
        'state_id'=>16,
        'key'=>'004',
        'name'=>'Angamacutiro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>786,
        'state_id'=>16,
        'key'=>'005',
        'name'=>'Angangueo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>787,
        'state_id'=>16,
        'key'=>'006',
        'name'=>'Apatzingán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>788,
        'state_id'=>16,
        'key'=>'007',
        'name'=>'Aporo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>789,
        'state_id'=>16,
        'key'=>'008',
        'name'=>'Aquila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>790,
        'state_id'=>16,
        'key'=>'009',
        'name'=>'Ario',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>791,
        'state_id'=>16,
        'key'=>'010',
        'name'=>'Arteaga',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>792,
        'state_id'=>16,
        'key'=>'011',
        'name'=>'Briseñas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>793,
        'state_id'=>16,
        'key'=>'012',
        'name'=>'Buenavista',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>794,
        'state_id'=>16,
        'key'=>'013',
        'name'=>'Carácuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>795,
        'state_id'=>16,
        'key'=>'014',
        'name'=>'Coahuayana',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>796,
        'state_id'=>16,
        'key'=>'015',
        'name'=>'Coalcomán de Vázquez Pallares',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>797,
        'state_id'=>16,
        'key'=>'016',
        'name'=>'Coeneo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>798,
        'state_id'=>16,
        'key'=>'017',
        'name'=>'Contepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>799,
        'state_id'=>16,
        'key'=>'018',
        'name'=>'Copándaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>800,
        'state_id'=>16,
        'key'=>'019',
        'name'=>'Cotija',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>801,
        'state_id'=>16,
        'key'=>'020',
        'name'=>'Cuitzeo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>802,
        'state_id'=>16,
        'key'=>'021',
        'name'=>'Charapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>803,
        'state_id'=>16,
        'key'=>'022',
        'name'=>'Charo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>804,
        'state_id'=>16,
        'key'=>'023',
        'name'=>'Chavinda',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>805,
        'state_id'=>16,
        'key'=>'024',
        'name'=>'Cherán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>806,
        'state_id'=>16,
        'key'=>'025',
        'name'=>'Chilchota',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>807,
        'state_id'=>16,
        'key'=>'026',
        'name'=>'Chinicuila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>808,
        'state_id'=>16,
        'key'=>'027',
        'name'=>'Chucándiro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>809,
        'state_id'=>16,
        'key'=>'028',
        'name'=>'Churintzio',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>810,
        'state_id'=>16,
        'key'=>'029',
        'name'=>'Churumuco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>811,
        'state_id'=>16,
        'key'=>'030',
        'name'=>'Ecuandureo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>812,
        'state_id'=>16,
        'key'=>'031',
        'name'=>'Epitacio Huerta',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>813,
        'state_id'=>16,
        'key'=>'032',
        'name'=>'Erongarícuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>814,
        'state_id'=>16,
        'key'=>'033',
        'name'=>'Gabriel Zamora',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>815,
        'state_id'=>16,
        'key'=>'034',
        'name'=>'Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>816,
        'state_id'=>16,
        'key'=>'035',
        'name'=>'La Huacana',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>817,
        'state_id'=>16,
        'key'=>'036',
        'name'=>'Huandacareo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>818,
        'state_id'=>16,
        'key'=>'037',
        'name'=>'Huaniqueo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>819,
        'state_id'=>16,
        'key'=>'038',
        'name'=>'Huetamo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>820,
        'state_id'=>16,
        'key'=>'039',
        'name'=>'Huiramba',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>821,
        'state_id'=>16,
        'key'=>'040',
        'name'=>'Indaparapeo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>822,
        'state_id'=>16,
        'key'=>'041',
        'name'=>'Irimbo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>823,
        'state_id'=>16,
        'key'=>'042',
        'name'=>'Ixtlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>824,
        'state_id'=>16,
        'key'=>'043',
        'name'=>'Jacona',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>825,
        'state_id'=>16,
        'key'=>'044',
        'name'=>'Jiménez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>826,
        'state_id'=>16,
        'key'=>'045',
        'name'=>'Jiquilpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>827,
        'state_id'=>16,
        'key'=>'046',
        'name'=>'Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>828,
        'state_id'=>16,
        'key'=>'047',
        'name'=>'Jungapeo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>829,
        'state_id'=>16,
        'key'=>'048',
        'name'=>'Lagunillas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>830,
        'state_id'=>16,
        'key'=>'049',
        'name'=>'Madero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>831,
        'state_id'=>16,
        'key'=>'050',
        'name'=>'Maravatío',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>832,
        'state_id'=>16,
        'key'=>'051',
        'name'=>'Marcos Castellanos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>833,
        'state_id'=>16,
        'key'=>'052',
        'name'=>'Lázaro Cárdenas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>834,
        'state_id'=>16,
        'key'=>'053',
        'name'=>'Morelia',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>835,
        'state_id'=>16,
        'key'=>'054',
        'name'=>'Morelos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>836,
        'state_id'=>16,
        'key'=>'055',
        'name'=>'Múgica',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>837,
        'state_id'=>16,
        'key'=>'056',
        'name'=>'Nahuatzen',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>838,
        'state_id'=>16,
        'key'=>'057',
        'name'=>'Nocupétaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>839,
        'state_id'=>16,
        'key'=>'058',
        'name'=>'Nuevo Parangaricutiro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>840,
        'state_id'=>16,
        'key'=>'059',
        'name'=>'Nuevo Urecho',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>841,
        'state_id'=>16,
        'key'=>'060',
        'name'=>'Numarán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>842,
        'state_id'=>16,
        'key'=>'061',
        'name'=>'Ocampo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>843,
        'state_id'=>16,
        'key'=>'062',
        'name'=>'Pajacuarán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>844,
        'state_id'=>16,
        'key'=>'063',
        'name'=>'Panindícuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>845,
        'state_id'=>16,
        'key'=>'064',
        'name'=>'Parácuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>846,
        'state_id'=>16,
        'key'=>'065',
        'name'=>'Paracho',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>847,
        'state_id'=>16,
        'key'=>'066',
        'name'=>'Pátzcuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>848,
        'state_id'=>16,
        'key'=>'067',
        'name'=>'Penjamillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>849,
        'state_id'=>16,
        'key'=>'068',
        'name'=>'Peribán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>850,
        'state_id'=>16,
        'key'=>'069',
        'name'=>'La Piedad',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>851,
        'state_id'=>16,
        'key'=>'070',
        'name'=>'Purépero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>852,
        'state_id'=>16,
        'key'=>'071',
        'name'=>'Puruándiro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>853,
        'state_id'=>16,
        'key'=>'072',
        'name'=>'Queréndaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>854,
        'state_id'=>16,
        'key'=>'073',
        'name'=>'Quiroga',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>855,
        'state_id'=>16,
        'key'=>'074',
        'name'=>'Cojumatlán de Régules',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>856,
        'state_id'=>16,
        'key'=>'075',
        'name'=>'Los Reyes',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>857,
        'state_id'=>16,
        'key'=>'076',
        'name'=>'Sahuayo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>858,
        'state_id'=>16,
        'key'=>'077',
        'name'=>'San Lucas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>859,
        'state_id'=>16,
        'key'=>'078',
        'name'=>'Santa Ana Maya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>860,
        'state_id'=>16,
        'key'=>'079',
        'name'=>'Salvador Escalante',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>861,
        'state_id'=>16,
        'key'=>'080',
        'name'=>'Senguio',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>862,
        'state_id'=>16,
        'key'=>'081',
        'name'=>'Susupuato',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>863,
        'state_id'=>16,
        'key'=>'082',
        'name'=>'Tacámbaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>864,
        'state_id'=>16,
        'key'=>'083',
        'name'=>'Tancítaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>865,
        'state_id'=>16,
        'key'=>'084',
        'name'=>'Tangamandapio',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>866,
        'state_id'=>16,
        'key'=>'085',
        'name'=>'Tangancícuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>867,
        'state_id'=>16,
        'key'=>'086',
        'name'=>'Tanhuato',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>868,
        'state_id'=>16,
        'key'=>'087',
        'name'=>'Taretan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>869,
        'state_id'=>16,
        'key'=>'088',
        'name'=>'Tarímbaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>870,
        'state_id'=>16,
        'key'=>'089',
        'name'=>'Tepalcatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>871,
        'state_id'=>16,
        'key'=>'090',
        'name'=>'Tingambato',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>872,
        'state_id'=>16,
        'key'=>'091',
        'name'=>'Tingüindín',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>873,
        'state_id'=>16,
        'key'=>'092',
        'name'=>'Tiquicheo de Nicolás Romero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>874,
        'state_id'=>16,
        'key'=>'093',
        'name'=>'Tlalpujahua',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>875,
        'state_id'=>16,
        'key'=>'094',
        'name'=>'Tlazazalca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>876,
        'state_id'=>16,
        'key'=>'095',
        'name'=>'Tocumbo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>877,
        'state_id'=>16,
        'key'=>'096',
        'name'=>'Tumbiscatío',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>878,
        'state_id'=>16,
        'key'=>'097',
        'name'=>'Turicato',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>879,
        'state_id'=>16,
        'key'=>'098',
        'name'=>'Tuxpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>880,
        'state_id'=>16,
        'key'=>'099',
        'name'=>'Tuzantla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>881,
        'state_id'=>16,
        'key'=>'100',
        'name'=>'Tzintzuntzan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>882,
        'state_id'=>16,
        'key'=>'101',
        'name'=>'Tzitzio',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>883,
        'state_id'=>16,
        'key'=>'102',
        'name'=>'Uruapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>884,
        'state_id'=>16,
        'key'=>'103',
        'name'=>'Venustiano Carranza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>885,
        'state_id'=>16,
        'key'=>'104',
        'name'=>'Villamar',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>886,
        'state_id'=>16,
        'key'=>'105',
        'name'=>'Vista Hermosa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>887,
        'state_id'=>16,
        'key'=>'106',
        'name'=>'Yurécuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>888,
        'state_id'=>16,
        'key'=>'107',
        'name'=>'Zacapu',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>889,
        'state_id'=>16,
        'key'=>'108',
        'name'=>'Zamora',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>890,
        'state_id'=>16,
        'key'=>'109',
        'name'=>'Zináparo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>891,
        'state_id'=>16,
        'key'=>'110',
        'name'=>'Zinapécuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>892,
        'state_id'=>16,
        'key'=>'111',
        'name'=>'Ziracuaretiro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>893,
        'state_id'=>16,
        'key'=>'112',
        'name'=>'Zitácuaro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>894,
        'state_id'=>16,
        'key'=>'113',
        'name'=>'José Sixto Verduzco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>895,
        'state_id'=>17,
        'key'=>'001',
        'name'=>'Amacuzac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>896,
        'state_id'=>17,
        'key'=>'002',
        'name'=>'Atlatlahucan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>897,
        'state_id'=>17,
        'key'=>'003',
        'name'=>'Axochiapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>898,
        'state_id'=>17,
        'key'=>'004',
        'name'=>'Ayala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>899,
        'state_id'=>17,
        'key'=>'005',
        'name'=>'Coatlán del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>900,
        'state_id'=>17,
        'key'=>'006',
        'name'=>'Cuautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>901,
        'state_id'=>17,
        'key'=>'007',
        'name'=>'Cuernavaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>902,
        'state_id'=>17,
        'key'=>'008',
        'name'=>'Emiliano Zapata',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>903,
        'state_id'=>17,
        'key'=>'009',
        'name'=>'Huitzilac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>904,
        'state_id'=>17,
        'key'=>'010',
        'name'=>'Jantetelco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>905,
        'state_id'=>17,
        'key'=>'011',
        'name'=>'Jiutepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>906,
        'state_id'=>17,
        'key'=>'012',
        'name'=>'Jojutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>907,
        'state_id'=>17,
        'key'=>'013',
        'name'=>'Jonacatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>908,
        'state_id'=>17,
        'key'=>'014',
        'name'=>'Mazatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>909,
        'state_id'=>17,
        'key'=>'015',
        'name'=>'Miacatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>910,
        'state_id'=>17,
        'key'=>'016',
        'name'=>'Ocuituco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>911,
        'state_id'=>17,
        'key'=>'017',
        'name'=>'Puente de Ixtla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>912,
        'state_id'=>17,
        'key'=>'018',
        'name'=>'Temixco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>913,
        'state_id'=>17,
        'key'=>'019',
        'name'=>'Tepalcingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>914,
        'state_id'=>17,
        'key'=>'020',
        'name'=>'Tepoztlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>915,
        'state_id'=>17,
        'key'=>'021',
        'name'=>'Tetecala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>916,
        'state_id'=>17,
        'key'=>'022',
        'name'=>'Tetela del Volcán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>917,
        'state_id'=>17,
        'key'=>'023',
        'name'=>'Tlalnepantla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>918,
        'state_id'=>17,
        'key'=>'024',
        'name'=>'Tlaltizapán de Zapata',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>919,
        'state_id'=>17,
        'key'=>'025',
        'name'=>'Tlaquiltenango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>920,
        'state_id'=>17,
        'key'=>'026',
        'name'=>'Tlayacapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>921,
        'state_id'=>17,
        'key'=>'027',
        'name'=>'Totolapan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>922,
        'state_id'=>17,
        'key'=>'028',
        'name'=>'Xochitepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>923,
        'state_id'=>17,
        'key'=>'029',
        'name'=>'Yautepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>924,
        'state_id'=>17,
        'key'=>'030',
        'name'=>'Yecapixtla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>925,
        'state_id'=>17,
        'key'=>'031',
        'name'=>'Zacatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>926,
        'state_id'=>17,
        'key'=>'032',
        'name'=>'Zacualpan de Amilpas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>927,
        'state_id'=>17,
        'key'=>'033',
        'name'=>'Temoac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>928,
        'state_id'=>18,
        'key'=>'001',
        'name'=>'Acaponeta',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>929,
        'state_id'=>18,
        'key'=>'002',
        'name'=>'Ahuacatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>930,
        'state_id'=>18,
        'key'=>'003',
        'name'=>'Amatlán de Cañas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>931,
        'state_id'=>18,
        'key'=>'004',
        'name'=>'Compostela',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>932,
        'state_id'=>18,
        'key'=>'005',
        'name'=>'Huajicori',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>933,
        'state_id'=>18,
        'key'=>'006',
        'name'=>'Ixtlán del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>934,
        'state_id'=>18,
        'key'=>'007',
        'name'=>'Jala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>935,
        'state_id'=>18,
        'key'=>'008',
        'name'=>'Xalisco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>936,
        'state_id'=>18,
        'key'=>'009',
        'name'=>'Del Nayar',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>937,
        'state_id'=>18,
        'key'=>'010',
        'name'=>'Rosamorada',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>938,
        'state_id'=>18,
        'key'=>'011',
        'name'=>'Ruíz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>939,
        'state_id'=>18,
        'key'=>'012',
        'name'=>'San Blas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>940,
        'state_id'=>18,
        'key'=>'013',
        'name'=>'San Pedro Lagunillas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>941,
        'state_id'=>18,
        'key'=>'014',
        'name'=>'Santa María del Oro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>942,
        'state_id'=>18,
        'key'=>'015',
        'name'=>'Santiago Ixcuintla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>943,
        'state_id'=>18,
        'key'=>'016',
        'name'=>'Tecuala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>944,
        'state_id'=>18,
        'key'=>'017',
        'name'=>'Tepic',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>945,
        'state_id'=>18,
        'key'=>'018',
        'name'=>'Tuxpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>946,
        'state_id'=>18,
        'key'=>'019',
        'name'=>'La Yesca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>947,
        'state_id'=>18,
        'key'=>'020',
        'name'=>'Bahía de Banderas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>948,
        'state_id'=>19,
        'key'=>'001',
        'name'=>'Abasolo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>949,
        'state_id'=>19,
        'key'=>'002',
        'name'=>'Agualeguas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>950,
        'state_id'=>19,
        'key'=>'003',
        'name'=>'Los Aldamas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>951,
        'state_id'=>19,
        'key'=>'004',
        'name'=>'Allende',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>952,
        'state_id'=>19,
        'key'=>'005',
        'name'=>'Anáhuac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>953,
        'state_id'=>19,
        'key'=>'006',
        'name'=>'Apodaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>954,
        'state_id'=>19,
        'key'=>'007',
        'name'=>'Aramberri',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>955,
        'state_id'=>19,
        'key'=>'008',
        'name'=>'Bustamante',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>956,
        'state_id'=>19,
        'key'=>'009',
        'name'=>'Cadereyta Jiménez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>957,
        'state_id'=>19,
        'key'=>'010',
        'name'=>'El Carmen',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>958,
        'state_id'=>19,
        'key'=>'011',
        'name'=>'Cerralvo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>959,
        'state_id'=>19,
        'key'=>'012',
        'name'=>'Ciénega de Flores',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>960,
        'state_id'=>19,
        'key'=>'013',
        'name'=>'China',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>961,
        'state_id'=>19,
        'key'=>'014',
        'name'=>'Doctor Arroyo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>962,
        'state_id'=>19,
        'key'=>'015',
        'name'=>'Doctor Coss',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>963,
        'state_id'=>19,
        'key'=>'016',
        'name'=>'Doctor González',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>964,
        'state_id'=>19,
        'key'=>'017',
        'name'=>'Galeana',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>965,
        'state_id'=>19,
        'key'=>'018',
        'name'=>'García',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>966,
        'state_id'=>19,
        'key'=>'019',
        'name'=>'San Pedro Garza García',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>967,
        'state_id'=>19,
        'key'=>'020',
        'name'=>'General Bravo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>968,
        'state_id'=>19,
        'key'=>'021',
        'name'=>'General Escobedo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>969,
        'state_id'=>19,
        'key'=>'022',
        'name'=>'General Terán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>970,
        'state_id'=>19,
        'key'=>'023',
        'name'=>'General Treviño',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>971,
        'state_id'=>19,
        'key'=>'024',
        'name'=>'General Zaragoza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>972,
        'state_id'=>19,
        'key'=>'025',
        'name'=>'General Zuazua',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>973,
        'state_id'=>19,
        'key'=>'026',
        'name'=>'Guadalupe',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>974,
        'state_id'=>19,
        'key'=>'027',
        'name'=>'Los Herreras',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>975,
        'state_id'=>19,
        'key'=>'028',
        'name'=>'Higueras',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>976,
        'state_id'=>19,
        'key'=>'029',
        'name'=>'Hualahuises',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>977,
        'state_id'=>19,
        'key'=>'030',
        'name'=>'Iturbide',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>978,
        'state_id'=>19,
        'key'=>'031',
        'name'=>'Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>979,
        'state_id'=>19,
        'key'=>'032',
        'name'=>'Lampazos de Naranjo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>980,
        'state_id'=>19,
        'key'=>'033',
        'name'=>'Linares',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>981,
        'state_id'=>19,
        'key'=>'034',
        'name'=>'Marín',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>982,
        'state_id'=>19,
        'key'=>'035',
        'name'=>'Melchor Ocampo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>983,
        'state_id'=>19,
        'key'=>'036',
        'name'=>'Mier y Noriega',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>984,
        'state_id'=>19,
        'key'=>'037',
        'name'=>'Mina',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>985,
        'state_id'=>19,
        'key'=>'038',
        'name'=>'Montemorelos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>986,
        'state_id'=>19,
        'key'=>'039',
        'name'=>'Monterrey',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>987,
        'state_id'=>19,
        'key'=>'040',
        'name'=>'Parás',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>988,
        'state_id'=>19,
        'key'=>'041',
        'name'=>'Pesquería',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>989,
        'state_id'=>19,
        'key'=>'042',
        'name'=>'Los Ramones',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>990,
        'state_id'=>19,
        'key'=>'043',
        'name'=>'Rayones',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>991,
        'state_id'=>19,
        'key'=>'044',
        'name'=>'Sabinas Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>992,
        'state_id'=>19,
        'key'=>'045',
        'name'=>'Salinas Victoria',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>993,
        'state_id'=>19,
        'key'=>'046',
        'name'=>'San Nicolás de los Garza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>994,
        'state_id'=>19,
        'key'=>'047',
        'name'=>'Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>995,
        'state_id'=>19,
        'key'=>'048',
        'name'=>'Santa Catarina',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>996,
        'state_id'=>19,
        'key'=>'049',
        'name'=>'Santiago',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>997,
        'state_id'=>19,
        'key'=>'050',
        'name'=>'Vallecillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>998,
        'state_id'=>19,
        'key'=>'051',
        'name'=>'Villaldama',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>999,
        'state_id'=>20,
        'key'=>'001',
        'name'=>'Abejones',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1000,
        'state_id'=>20,
        'key'=>'002',
        'name'=>'Acatlán de Pérez Figueroa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1001,
        'state_id'=>20,
        'key'=>'003',
        'name'=>'Asunción Cacalotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1002,
        'state_id'=>20,
        'key'=>'004',
        'name'=>'Asunción Cuyotepeji',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1003,
        'state_id'=>20,
        'key'=>'005',
        'name'=>'Asunción Ixtaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1004,
        'state_id'=>20,
        'key'=>'006',
        'name'=>'Asunción Nochixtlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1005,
        'state_id'=>20,
        'key'=>'007',
        'name'=>'Asunción Ocotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1006,
        'state_id'=>20,
        'key'=>'008',
        'name'=>'Asunción Tlacolulita',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1007,
        'state_id'=>20,
        'key'=>'009',
        'name'=>'Ayotzintepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1008,
        'state_id'=>20,
        'key'=>'010',
        'name'=>'El Barrio de la Soledad',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1009,
        'state_id'=>20,
        'key'=>'011',
        'name'=>'Calihualá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1010,
        'state_id'=>20,
        'key'=>'012',
        'name'=>'Candelaria Loxicha',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1011,
        'state_id'=>20,
        'key'=>'013',
        'name'=>'Ciénega de Zimatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1012,
        'state_id'=>20,
        'key'=>'014',
        'name'=>'Ciudad Ixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1013,
        'state_id'=>20,
        'key'=>'015',
        'name'=>'Coatecas Altas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1014,
        'state_id'=>20,
        'key'=>'016',
        'name'=>'Coicoyán de las Flores',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1015,
        'state_id'=>20,
        'key'=>'017',
        'name'=>'La Compañía',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1016,
        'state_id'=>20,
        'key'=>'018',
        'name'=>'Concepción Buenavista',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1017,
        'state_id'=>20,
        'key'=>'019',
        'name'=>'Concepción Pápalo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1018,
        'state_id'=>20,
        'key'=>'020',
        'name'=>'Constancia del Rosario',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1019,
        'state_id'=>20,
        'key'=>'021',
        'name'=>'Cosolapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1020,
        'state_id'=>20,
        'key'=>'022',
        'name'=>'Cosoltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1021,
        'state_id'=>20,
        'key'=>'023',
        'name'=>'Cuilápam de Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1022,
        'state_id'=>20,
        'key'=>'024',
        'name'=>'Cuyamecalco Villa de Zaragoza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1023,
        'state_id'=>20,
        'key'=>'025',
        'name'=>'Chahuites',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1024,
        'state_id'=>20,
        'key'=>'026',
        'name'=>'Chalcatongo de Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1025,
        'state_id'=>20,
        'key'=>'027',
        'name'=>'Chiquihuitlán de Benito Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1026,
        'state_id'=>20,
        'key'=>'028',
        'name'=>'Heroica Ciudad de Ejutla de Crespo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1027,
        'state_id'=>20,
        'key'=>'029',
        'name'=>'Eloxochitlán de Flores Magón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1028,
        'state_id'=>20,
        'key'=>'030',
        'name'=>'El Espinal',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1029,
        'state_id'=>20,
        'key'=>'031',
        'name'=>'Tamazulápam del Espíritu Santo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1030,
        'state_id'=>20,
        'key'=>'032',
        'name'=>'Fresnillo de Trujano',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1031,
        'state_id'=>20,
        'key'=>'033',
        'name'=>'Guadalupe Etla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1032,
        'state_id'=>20,
        'key'=>'034',
        'name'=>'Guadalupe de Ramírez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1033,
        'state_id'=>20,
        'key'=>'035',
        'name'=>'Guelatao de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1034,
        'state_id'=>20,
        'key'=>'036',
        'name'=>'Guevea de Humboldt',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1035,
        'state_id'=>20,
        'key'=>'037',
        'name'=>'Mesones Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1036,
        'state_id'=>20,
        'key'=>'038',
        'name'=>'Villa Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1037,
        'state_id'=>20,
        'key'=>'039',
        'name'=>'Heroica Ciudad de Huajuapan de León',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1038,
        'state_id'=>20,
        'key'=>'040',
        'name'=>'Huautepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1039,
        'state_id'=>20,
        'key'=>'041',
        'name'=>'Huautla de Jiménez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1040,
        'state_id'=>20,
        'key'=>'042',
        'name'=>'Ixtlán de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1041,
        'state_id'=>20,
        'key'=>'043',
        'name'=>'Heroica Ciudad de Juchitán de Zaragoza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1042,
        'state_id'=>20,
        'key'=>'044',
        'name'=>'Loma Bonita',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1043,
        'state_id'=>20,
        'key'=>'045',
        'name'=>'Magdalena Apasco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1044,
        'state_id'=>20,
        'key'=>'046',
        'name'=>'Magdalena Jaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1045,
        'state_id'=>20,
        'key'=>'047',
        'name'=>'Santa Magdalena Jicotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1046,
        'state_id'=>20,
        'key'=>'048',
        'name'=>'Magdalena Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1047,
        'state_id'=>20,
        'key'=>'049',
        'name'=>'Magdalena Ocotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1048,
        'state_id'=>20,
        'key'=>'050',
        'name'=>'Magdalena Peñasco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1049,
        'state_id'=>20,
        'key'=>'051',
        'name'=>'Magdalena Teitipac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1050,
        'state_id'=>20,
        'key'=>'052',
        'name'=>'Magdalena Tequisistlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1051,
        'state_id'=>20,
        'key'=>'053',
        'name'=>'Magdalena Tlacotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1052,
        'state_id'=>20,
        'key'=>'054',
        'name'=>'Magdalena Zahuatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1053,
        'state_id'=>20,
        'key'=>'055',
        'name'=>'Mariscala de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1054,
        'state_id'=>20,
        'key'=>'056',
        'name'=>'Mártires de Tacubaya',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1055,
        'state_id'=>20,
        'key'=>'057',
        'name'=>'Matías Romero Avendaño',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1056,
        'state_id'=>20,
        'key'=>'058',
        'name'=>'Mazatlán Villa de Flores',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1057,
        'state_id'=>20,
        'key'=>'059',
        'name'=>'Miahuatlán de Porfirio Díaz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1058,
        'state_id'=>20,
        'key'=>'060',
        'name'=>'Mixistlán de la Reforma',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1059,
        'state_id'=>20,
        'key'=>'061',
        'name'=>'Monjas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1060,
        'state_id'=>20,
        'key'=>'062',
        'name'=>'Natividad',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1061,
        'state_id'=>20,
        'key'=>'063',
        'name'=>'Nazareno Etla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1062,
        'state_id'=>20,
        'key'=>'064',
        'name'=>'Nejapa de Madero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1063,
        'state_id'=>20,
        'key'=>'065',
        'name'=>'Ixpantepec Nieves',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1064,
        'state_id'=>20,
        'key'=>'066',
        'name'=>'Santiago Niltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1065,
        'state_id'=>20,
        'key'=>'067',
        'name'=>'Oaxaca de Juárez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1066,
        'state_id'=>20,
        'key'=>'068',
        'name'=>'Ocotlán de Morelos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1067,
        'state_id'=>20,
        'key'=>'069',
        'name'=>'La Pe',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1068,
        'state_id'=>20,
        'key'=>'070',
        'name'=>'Pinotepa de Don Luis',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1069,
        'state_id'=>20,
        'key'=>'071',
        'name'=>'Pluma Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1070,
        'state_id'=>20,
        'key'=>'072',
        'name'=>'San José del Progreso',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1071,
        'state_id'=>20,
        'key'=>'073',
        'name'=>'Putla Villa de Guerrero',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1072,
        'state_id'=>20,
        'key'=>'074',
        'name'=>'Santa Catarina Quioquitani',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1073,
        'state_id'=>20,
        'key'=>'075',
        'name'=>'Reforma de Pineda',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1074,
        'state_id'=>20,
        'key'=>'076',
        'name'=>'La Reforma',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1075,
        'state_id'=>20,
        'key'=>'077',
        'name'=>'Reyes Etla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1076,
        'state_id'=>20,
        'key'=>'078',
        'name'=>'Rojas de Cuauhtémoc',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1077,
        'state_id'=>20,
        'key'=>'079',
        'name'=>'Salina Cruz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1078,
        'state_id'=>20,
        'key'=>'080',
        'name'=>'San Agustín Amatengo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1079,
        'state_id'=>20,
        'key'=>'081',
        'name'=>'San Agustín Atenango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1080,
        'state_id'=>20,
        'key'=>'082',
        'name'=>'San Agustín Chayuco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1081,
        'state_id'=>20,
        'key'=>'083',
        'name'=>'San Agustín de las Juntas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1082,
        'state_id'=>20,
        'key'=>'084',
        'name'=>'San Agustín Etla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1083,
        'state_id'=>20,
        'key'=>'085',
        'name'=>'San Agustín Loxicha',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1084,
        'state_id'=>20,
        'key'=>'086',
        'name'=>'San Agustín Tlacotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1085,
        'state_id'=>20,
        'key'=>'087',
        'name'=>'San Agustín Yatareni',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1086,
        'state_id'=>20,
        'key'=>'088',
        'name'=>'San Andrés Cabecera Nueva',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1087,
        'state_id'=>20,
        'key'=>'089',
        'name'=>'San Andrés Dinicuiti',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1088,
        'state_id'=>20,
        'key'=>'090',
        'name'=>'San Andrés Huaxpaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1089,
        'state_id'=>20,
        'key'=>'091',
        'name'=>'San Andrés Huayápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1090,
        'state_id'=>20,
        'key'=>'092',
        'name'=>'San Andrés Ixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1091,
        'state_id'=>20,
        'key'=>'093',
        'name'=>'San Andrés Lagunas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1092,
        'state_id'=>20,
        'key'=>'094',
        'name'=>'San Andrés Nuxiño',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1093,
        'state_id'=>20,
        'key'=>'095',
        'name'=>'San Andrés Paxtlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1094,
        'state_id'=>20,
        'key'=>'096',
        'name'=>'San Andrés Sinaxtla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1095,
        'state_id'=>20,
        'key'=>'097',
        'name'=>'San Andrés Solaga',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1096,
        'state_id'=>20,
        'key'=>'098',
        'name'=>'San Andrés Teotilálpam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1097,
        'state_id'=>20,
        'key'=>'099',
        'name'=>'San Andrés Tepetlapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1098,
        'state_id'=>20,
        'key'=>'100',
        'name'=>'San Andrés Yaá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1099,
        'state_id'=>20,
        'key'=>'101',
        'name'=>'San Andrés Zabache',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1100,
        'state_id'=>20,
        'key'=>'102',
        'name'=>'San Andrés Zautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1101,
        'state_id'=>20,
        'key'=>'103',
        'name'=>'San Antonino Castillo Velasco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1102,
        'state_id'=>20,
        'key'=>'104',
        'name'=>'San Antonino el Alto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1103,
        'state_id'=>20,
        'key'=>'105',
        'name'=>'San Antonino Monte Verde',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1104,
        'state_id'=>20,
        'key'=>'106',
        'name'=>'San Antonio Acutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1105,
        'state_id'=>20,
        'key'=>'107',
        'name'=>'San Antonio de la Cal',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1106,
        'state_id'=>20,
        'key'=>'108',
        'name'=>'San Antonio Huitepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1107,
        'state_id'=>20,
        'key'=>'109',
        'name'=>'San Antonio Nanahuatípam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1108,
        'state_id'=>20,
        'key'=>'110',
        'name'=>'San Antonio Sinicahua',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1109,
        'state_id'=>20,
        'key'=>'111',
        'name'=>'San Antonio Tepetlapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1110,
        'state_id'=>20,
        'key'=>'112',
        'name'=>'San Baltazar Chichicápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1111,
        'state_id'=>20,
        'key'=>'113',
        'name'=>'San Baltazar Loxicha',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1112,
        'state_id'=>20,
        'key'=>'114',
        'name'=>'San Baltazar Yatzachi el Bajo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1113,
        'state_id'=>20,
        'key'=>'115',
        'name'=>'San Bartolo Coyotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1114,
        'state_id'=>20,
        'key'=>'116',
        'name'=>'San Bartolomé Ayautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1115,
        'state_id'=>20,
        'key'=>'117',
        'name'=>'San Bartolomé Loxicha',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1116,
        'state_id'=>20,
        'key'=>'118',
        'name'=>'San Bartolomé Quialana',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1117,
        'state_id'=>20,
        'key'=>'119',
        'name'=>'San Bartolomé Yucuañe',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1118,
        'state_id'=>20,
        'key'=>'120',
        'name'=>'San Bartolomé Zoogocho',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1119,
        'state_id'=>20,
        'key'=>'121',
        'name'=>'San Bartolo Soyaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1120,
        'state_id'=>20,
        'key'=>'122',
        'name'=>'San Bartolo Yautepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1121,
        'state_id'=>20,
        'key'=>'123',
        'name'=>'San Bernardo Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1122,
        'state_id'=>20,
        'key'=>'124',
        'name'=>'San Blas Atempa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1123,
        'state_id'=>20,
        'key'=>'125',
        'name'=>'San Carlos Yautepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1124,
        'state_id'=>20,
        'key'=>'126',
        'name'=>'San Cristóbal Amatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1125,
        'state_id'=>20,
        'key'=>'127',
        'name'=>'San Cristóbal Amoltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1126,
        'state_id'=>20,
        'key'=>'128',
        'name'=>'San Cristóbal Lachirioag',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1127,
        'state_id'=>20,
        'key'=>'129',
        'name'=>'San Cristóbal Suchixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1128,
        'state_id'=>20,
        'key'=>'130',
        'name'=>'San Dionisio del Mar',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1129,
        'state_id'=>20,
        'key'=>'131',
        'name'=>'San Dionisio Ocotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1130,
        'state_id'=>20,
        'key'=>'132',
        'name'=>'San Dionisio Ocotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1131,
        'state_id'=>20,
        'key'=>'133',
        'name'=>'San Esteban Atatlahuca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1132,
        'state_id'=>20,
        'key'=>'134',
        'name'=>'San Felipe Jalapa de Díaz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1133,
        'state_id'=>20,
        'key'=>'135',
        'name'=>'San Felipe Tejalápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1134,
        'state_id'=>20,
        'key'=>'136',
        'name'=>'San Felipe Usila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1135,
        'state_id'=>20,
        'key'=>'137',
        'name'=>'San Francisco Cahuacuá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1136,
        'state_id'=>20,
        'key'=>'138',
        'name'=>'San Francisco Cajonos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1137,
        'state_id'=>20,
        'key'=>'139',
        'name'=>'San Francisco Chapulapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1138,
        'state_id'=>20,
        'key'=>'140',
        'name'=>'San Francisco Chindúa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1139,
        'state_id'=>20,
        'key'=>'141',
        'name'=>'San Francisco del Mar',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1140,
        'state_id'=>20,
        'key'=>'142',
        'name'=>'San Francisco Huehuetlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1141,
        'state_id'=>20,
        'key'=>'143',
        'name'=>'San Francisco Ixhuatán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1142,
        'state_id'=>20,
        'key'=>'144',
        'name'=>'San Francisco Jaltepetongo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1143,
        'state_id'=>20,
        'key'=>'145',
        'name'=>'San Francisco Lachigoló',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1144,
        'state_id'=>20,
        'key'=>'146',
        'name'=>'San Francisco Logueche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1145,
        'state_id'=>20,
        'key'=>'147',
        'name'=>'San Francisco Nuxaño',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1146,
        'state_id'=>20,
        'key'=>'148',
        'name'=>'San Francisco Ozolotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1147,
        'state_id'=>20,
        'key'=>'149',
        'name'=>'San Francisco Sola',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1148,
        'state_id'=>20,
        'key'=>'150',
        'name'=>'San Francisco Telixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1149,
        'state_id'=>20,
        'key'=>'151',
        'name'=>'San Francisco Teopan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1150,
        'state_id'=>20,
        'key'=>'152',
        'name'=>'San Francisco Tlapancingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1151,
        'state_id'=>20,
        'key'=>'153',
        'name'=>'San Gabriel Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1152,
        'state_id'=>20,
        'key'=>'154',
        'name'=>'San Ildefonso Amatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1153,
        'state_id'=>20,
        'key'=>'155',
        'name'=>'San Ildefonso Sola',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1154,
        'state_id'=>20,
        'key'=>'156',
        'name'=>'San Ildefonso Villa Alta',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1155,
        'state_id'=>20,
        'key'=>'157',
        'name'=>'San Jacinto Amilpas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1156,
        'state_id'=>20,
        'key'=>'158',
        'name'=>'San Jacinto Tlacotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1157,
        'state_id'=>20,
        'key'=>'159',
        'name'=>'San Jerónimo Coatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1158,
        'state_id'=>20,
        'key'=>'160',
        'name'=>'San Jerónimo Silacayoapilla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1159,
        'state_id'=>20,
        'key'=>'161',
        'name'=>'San Jerónimo Sosola',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1160,
        'state_id'=>20,
        'key'=>'162',
        'name'=>'San Jerónimo Taviche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1161,
        'state_id'=>20,
        'key'=>'163',
        'name'=>'San Jerónimo Tecóatl',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1162,
        'state_id'=>20,
        'key'=>'164',
        'name'=>'San Jorge Nuchita',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1163,
        'state_id'=>20,
        'key'=>'165',
        'name'=>'San José Ayuquila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1164,
        'state_id'=>20,
        'key'=>'166',
        'name'=>'San José Chiltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1165,
        'state_id'=>20,
        'key'=>'167',
        'name'=>'San José del Peñasco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1166,
        'state_id'=>20,
        'key'=>'168',
        'name'=>'San José Estancia Grande',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1167,
        'state_id'=>20,
        'key'=>'169',
        'name'=>'San José Independencia',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1168,
        'state_id'=>20,
        'key'=>'170',
        'name'=>'San José Lachiguiri',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1169,
        'state_id'=>20,
        'key'=>'171',
        'name'=>'San José Tenango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1170,
        'state_id'=>20,
        'key'=>'172',
        'name'=>'San Juan Achiutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1171,
        'state_id'=>20,
        'key'=>'173',
        'name'=>'San Juan Atepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1172,
        'state_id'=>20,
        'key'=>'174',
        'name'=>'Ánimas Trujano',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1173,
        'state_id'=>20,
        'key'=>'175',
        'name'=>'San Juan Bautista Atatlahuca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1174,
        'state_id'=>20,
        'key'=>'176',
        'name'=>'San Juan Bautista Coixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1175,
        'state_id'=>20,
        'key'=>'177',
        'name'=>'San Juan Bautista Cuicatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1176,
        'state_id'=>20,
        'key'=>'178',
        'name'=>'San Juan Bautista Guelache',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1177,
        'state_id'=>20,
        'key'=>'179',
        'name'=>'San Juan Bautista Jayacatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1178,
        'state_id'=>20,
        'key'=>'180',
        'name'=>'San Juan Bautista Lo de Soto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1179,
        'state_id'=>20,
        'key'=>'181',
        'name'=>'San Juan Bautista Suchitepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1180,
        'state_id'=>20,
        'key'=>'182',
        'name'=>'San Juan Bautista Tlacoatzintepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1181,
        'state_id'=>20,
        'key'=>'183',
        'name'=>'San Juan Bautista Tlachichilco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1182,
        'state_id'=>20,
        'key'=>'184',
        'name'=>'San Juan Bautista Tuxtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1183,
        'state_id'=>20,
        'key'=>'185',
        'name'=>'San Juan Cacahuatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1184,
        'state_id'=>20,
        'key'=>'186',
        'name'=>'San Juan Cieneguilla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1185,
        'state_id'=>20,
        'key'=>'187',
        'name'=>'San Juan Coatzóspam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1186,
        'state_id'=>20,
        'key'=>'188',
        'name'=>'San Juan Colorado',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1187,
        'state_id'=>20,
        'key'=>'189',
        'name'=>'San Juan Comaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1188,
        'state_id'=>20,
        'key'=>'190',
        'name'=>'San Juan Cotzocón',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1189,
        'state_id'=>20,
        'key'=>'191',
        'name'=>'San Juan Chicomezúchil',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1190,
        'state_id'=>20,
        'key'=>'192',
        'name'=>'San Juan Chilateca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1191,
        'state_id'=>20,
        'key'=>'193',
        'name'=>'San Juan del Estado',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1192,
        'state_id'=>20,
        'key'=>'194',
        'name'=>'San Juan del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1193,
        'state_id'=>20,
        'key'=>'195',
        'name'=>'San Juan Diuxi',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1194,
        'state_id'=>20,
        'key'=>'196',
        'name'=>'San Juan Evangelista Analco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1195,
        'state_id'=>20,
        'key'=>'197',
        'name'=>'San Juan Guelavía',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1196,
        'state_id'=>20,
        'key'=>'198',
        'name'=>'San Juan Guichicovi',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1197,
        'state_id'=>20,
        'key'=>'199',
        'name'=>'San Juan Ihualtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1198,
        'state_id'=>20,
        'key'=>'200',
        'name'=>'San Juan Juquila Mixes',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1199,
        'state_id'=>20,
        'key'=>'201',
        'name'=>'San Juan Juquila Vijanos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1200,
        'state_id'=>20,
        'key'=>'202',
        'name'=>'San Juan Lachao',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1201,
        'state_id'=>20,
        'key'=>'203',
        'name'=>'San Juan Lachigalla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1202,
        'state_id'=>20,
        'key'=>'204',
        'name'=>'San Juan Lajarcia',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1203,
        'state_id'=>20,
        'key'=>'205',
        'name'=>'San Juan Lalana',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1204,
        'state_id'=>20,
        'key'=>'206',
        'name'=>'San Juan de los Cués',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1205,
        'state_id'=>20,
        'key'=>'207',
        'name'=>'San Juan Mazatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1206,
        'state_id'=>20,
        'key'=>'208',
        'name'=>'San Juan Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1207,
        'state_id'=>20,
        'key'=>'209',
        'name'=>'San Juan Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1208,
        'state_id'=>20,
        'key'=>'210',
        'name'=>'San Juan Ñumí',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1209,
        'state_id'=>20,
        'key'=>'211',
        'name'=>'San Juan Ozolotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1210,
        'state_id'=>20,
        'key'=>'212',
        'name'=>'San Juan Petlapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1211,
        'state_id'=>20,
        'key'=>'213',
        'name'=>'San Juan Quiahije',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1212,
        'state_id'=>20,
        'key'=>'214',
        'name'=>'San Juan Quiotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1213,
        'state_id'=>20,
        'key'=>'215',
        'name'=>'San Juan Sayultepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1214,
        'state_id'=>20,
        'key'=>'216',
        'name'=>'San Juan Tabaá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1215,
        'state_id'=>20,
        'key'=>'217',
        'name'=>'San Juan Tamazola',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1216,
        'state_id'=>20,
        'key'=>'218',
        'name'=>'San Juan Teita',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1217,
        'state_id'=>20,
        'key'=>'219',
        'name'=>'San Juan Teitipac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1218,
        'state_id'=>20,
        'key'=>'220',
        'name'=>'San Juan Tepeuxila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1219,
        'state_id'=>20,
        'key'=>'221',
        'name'=>'San Juan Teposcolula',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1220,
        'state_id'=>20,
        'key'=>'222',
        'name'=>'San Juan Yaeé',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1221,
        'state_id'=>20,
        'key'=>'223',
        'name'=>'San Juan Yatzona',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1222,
        'state_id'=>20,
        'key'=>'224',
        'name'=>'San Juan Yucuita',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1223,
        'state_id'=>20,
        'key'=>'225',
        'name'=>'San Lorenzo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1224,
        'state_id'=>20,
        'key'=>'226',
        'name'=>'San Lorenzo Albarradas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1225,
        'state_id'=>20,
        'key'=>'227',
        'name'=>'San Lorenzo Cacaotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1226,
        'state_id'=>20,
        'key'=>'228',
        'name'=>'San Lorenzo Cuaunecuiltitla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1227,
        'state_id'=>20,
        'key'=>'229',
        'name'=>'San Lorenzo Texmelúcan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1228,
        'state_id'=>20,
        'key'=>'230',
        'name'=>'San Lorenzo Victoria',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1229,
        'state_id'=>20,
        'key'=>'231',
        'name'=>'San Lucas Camotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1230,
        'state_id'=>20,
        'key'=>'232',
        'name'=>'San Lucas Ojitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1231,
        'state_id'=>20,
        'key'=>'233',
        'name'=>'San Lucas Quiaviní',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1232,
        'state_id'=>20,
        'key'=>'234',
        'name'=>'San Lucas Zoquiápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1233,
        'state_id'=>20,
        'key'=>'235',
        'name'=>'San Luis Amatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1234,
        'state_id'=>20,
        'key'=>'236',
        'name'=>'San Marcial Ozolotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1235,
        'state_id'=>20,
        'key'=>'237',
        'name'=>'San Marcos Arteaga',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1236,
        'state_id'=>20,
        'key'=>'238',
        'name'=>'San Martín de los Cansecos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1237,
        'state_id'=>20,
        'key'=>'239',
        'name'=>'San Martín Huamelúlpam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1238,
        'state_id'=>20,
        'key'=>'240',
        'name'=>'San Martín Itunyoso',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1239,
        'state_id'=>20,
        'key'=>'241',
        'name'=>'San Martín Lachilá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1240,
        'state_id'=>20,
        'key'=>'242',
        'name'=>'San Martín Peras',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1241,
        'state_id'=>20,
        'key'=>'243',
        'name'=>'San Martín Tilcajete',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1242,
        'state_id'=>20,
        'key'=>'244',
        'name'=>'San Martín Toxpalan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1243,
        'state_id'=>20,
        'key'=>'245',
        'name'=>'San Martín Zacatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1244,
        'state_id'=>20,
        'key'=>'246',
        'name'=>'San Mateo Cajonos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1245,
        'state_id'=>20,
        'key'=>'247',
        'name'=>'Capulálpam de Méndez',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1246,
        'state_id'=>20,
        'key'=>'248',
        'name'=>'San Mateo del Mar',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1247,
        'state_id'=>20,
        'key'=>'249',
        'name'=>'San Mateo Yoloxochitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1248,
        'state_id'=>20,
        'key'=>'250',
        'name'=>'San Mateo Etlatongo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1249,
        'state_id'=>20,
        'key'=>'251',
        'name'=>'San Mateo Nejápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1250,
        'state_id'=>20,
        'key'=>'252',
        'name'=>'San Mateo Peñasco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1251,
        'state_id'=>20,
        'key'=>'253',
        'name'=>'San Mateo Piñas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1252,
        'state_id'=>20,
        'key'=>'254',
        'name'=>'San Mateo Río Hondo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1253,
        'state_id'=>20,
        'key'=>'255',
        'name'=>'San Mateo Sindihui',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1254,
        'state_id'=>20,
        'key'=>'256',
        'name'=>'San Mateo Tlapiltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1255,
        'state_id'=>20,
        'key'=>'257',
        'name'=>'San Melchor Betaza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1256,
        'state_id'=>20,
        'key'=>'258',
        'name'=>'San Miguel Achiutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1257,
        'state_id'=>20,
        'key'=>'259',
        'name'=>'San Miguel Ahuehuetitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1258,
        'state_id'=>20,
        'key'=>'260',
        'name'=>'San Miguel Aloápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1259,
        'state_id'=>20,
        'key'=>'261',
        'name'=>'San Miguel Amatitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1260,
        'state_id'=>20,
        'key'=>'262',
        'name'=>'San Miguel Amatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1261,
        'state_id'=>20,
        'key'=>'263',
        'name'=>'San Miguel Coatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1262,
        'state_id'=>20,
        'key'=>'264',
        'name'=>'San Miguel Chicahua',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1263,
        'state_id'=>20,
        'key'=>'265',
        'name'=>'San Miguel Chimalapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1264,
        'state_id'=>20,
        'key'=>'266',
        'name'=>'San Miguel del Puerto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1265,
        'state_id'=>20,
        'key'=>'267',
        'name'=>'San Miguel del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1266,
        'state_id'=>20,
        'key'=>'268',
        'name'=>'San Miguel Ejutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1267,
        'state_id'=>20,
        'key'=>'269',
        'name'=>'San Miguel el Grande',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1268,
        'state_id'=>20,
        'key'=>'270',
        'name'=>'San Miguel Huautla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1269,
        'state_id'=>20,
        'key'=>'271',
        'name'=>'San Miguel Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1270,
        'state_id'=>20,
        'key'=>'272',
        'name'=>'San Miguel Panixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1271,
        'state_id'=>20,
        'key'=>'273',
        'name'=>'San Miguel Peras',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1272,
        'state_id'=>20,
        'key'=>'274',
        'name'=>'San Miguel Piedras',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1273,
        'state_id'=>20,
        'key'=>'275',
        'name'=>'San Miguel Quetzaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1274,
        'state_id'=>20,
        'key'=>'276',
        'name'=>'San Miguel Santa Flor',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1275,
        'state_id'=>20,
        'key'=>'277',
        'name'=>'Villa Sola de Vega',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1276,
        'state_id'=>20,
        'key'=>'278',
        'name'=>'San Miguel Soyaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1277,
        'state_id'=>20,
        'key'=>'279',
        'name'=>'San Miguel Suchixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1278,
        'state_id'=>20,
        'key'=>'280',
        'name'=>'Villa Talea de Castro',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1279,
        'state_id'=>20,
        'key'=>'281',
        'name'=>'San Miguel Tecomatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1280,
        'state_id'=>20,
        'key'=>'282',
        'name'=>'San Miguel Tenango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1281,
        'state_id'=>20,
        'key'=>'283',
        'name'=>'San Miguel Tequixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1282,
        'state_id'=>20,
        'key'=>'284',
        'name'=>'San Miguel Tilquiápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1283,
        'state_id'=>20,
        'key'=>'285',
        'name'=>'San Miguel Tlacamama',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1284,
        'state_id'=>20,
        'key'=>'286',
        'name'=>'San Miguel Tlacotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1285,
        'state_id'=>20,
        'key'=>'287',
        'name'=>'San Miguel Tulancingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1286,
        'state_id'=>20,
        'key'=>'288',
        'name'=>'San Miguel Yotao',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1287,
        'state_id'=>20,
        'key'=>'289',
        'name'=>'San Nicolás',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1288,
        'state_id'=>20,
        'key'=>'290',
        'name'=>'San Nicolás Hidalgo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1289,
        'state_id'=>20,
        'key'=>'291',
        'name'=>'San Pablo Coatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1290,
        'state_id'=>20,
        'key'=>'292',
        'name'=>'San Pablo Cuatro Venados',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1291,
        'state_id'=>20,
        'key'=>'293',
        'name'=>'San Pablo Etla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1292,
        'state_id'=>20,
        'key'=>'294',
        'name'=>'San Pablo Huitzo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1293,
        'state_id'=>20,
        'key'=>'295',
        'name'=>'San Pablo Huixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1294,
        'state_id'=>20,
        'key'=>'296',
        'name'=>'San Pablo Macuiltianguis',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1295,
        'state_id'=>20,
        'key'=>'297',
        'name'=>'San Pablo Tijaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1296,
        'state_id'=>20,
        'key'=>'298',
        'name'=>'San Pablo Villa de Mitla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1297,
        'state_id'=>20,
        'key'=>'299',
        'name'=>'San Pablo Yaganiza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1298,
        'state_id'=>20,
        'key'=>'300',
        'name'=>'San Pedro Amuzgos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1299,
        'state_id'=>20,
        'key'=>'301',
        'name'=>'San Pedro Apóstol',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1300,
        'state_id'=>20,
        'key'=>'302',
        'name'=>'San Pedro Atoyac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1301,
        'state_id'=>20,
        'key'=>'303',
        'name'=>'San Pedro Cajonos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1302,
        'state_id'=>20,
        'key'=>'304',
        'name'=>'San Pedro Coxcaltepec Cántaros',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1303,
        'state_id'=>20,
        'key'=>'305',
        'name'=>'San Pedro Comitancillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1304,
        'state_id'=>20,
        'key'=>'306',
        'name'=>'San Pedro el Alto',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1305,
        'state_id'=>20,
        'key'=>'307',
        'name'=>'San Pedro Huamelula',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1306,
        'state_id'=>20,
        'key'=>'308',
        'name'=>'San Pedro Huilotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1307,
        'state_id'=>20,
        'key'=>'309',
        'name'=>'San Pedro Ixcatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1308,
        'state_id'=>20,
        'key'=>'310',
        'name'=>'San Pedro Ixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1309,
        'state_id'=>20,
        'key'=>'311',
        'name'=>'San Pedro Jaltepetongo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1310,
        'state_id'=>20,
        'key'=>'312',
        'name'=>'San Pedro Jicayán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1311,
        'state_id'=>20,
        'key'=>'313',
        'name'=>'San Pedro Jocotipac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1312,
        'state_id'=>20,
        'key'=>'314',
        'name'=>'San Pedro Juchatengo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1313,
        'state_id'=>20,
        'key'=>'315',
        'name'=>'San Pedro Mártir',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1314,
        'state_id'=>20,
        'key'=>'316',
        'name'=>'San Pedro Mártir Quiechapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1315,
        'state_id'=>20,
        'key'=>'317',
        'name'=>'San Pedro Mártir Yucuxaco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1316,
        'state_id'=>20,
        'key'=>'318',
        'name'=>'San Pedro Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1317,
        'state_id'=>20,
        'key'=>'319',
        'name'=>'San Pedro Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1318,
        'state_id'=>20,
        'key'=>'320',
        'name'=>'San Pedro Molinos',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1319,
        'state_id'=>20,
        'key'=>'321',
        'name'=>'San Pedro Nopala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1320,
        'state_id'=>20,
        'key'=>'322',
        'name'=>'San Pedro Ocopetatillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1321,
        'state_id'=>20,
        'key'=>'323',
        'name'=>'San Pedro Ocotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1322,
        'state_id'=>20,
        'key'=>'324',
        'name'=>'San Pedro Pochutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1323,
        'state_id'=>20,
        'key'=>'325',
        'name'=>'San Pedro Quiatoni',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1324,
        'state_id'=>20,
        'key'=>'326',
        'name'=>'San Pedro Sochiápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1325,
        'state_id'=>20,
        'key'=>'327',
        'name'=>'San Pedro Tapanatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1326,
        'state_id'=>20,
        'key'=>'328',
        'name'=>'San Pedro Taviche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1327,
        'state_id'=>20,
        'key'=>'329',
        'name'=>'San Pedro Teozacoalco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1328,
        'state_id'=>20,
        'key'=>'330',
        'name'=>'San Pedro Teutila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1329,
        'state_id'=>20,
        'key'=>'331',
        'name'=>'San Pedro Tidaá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1330,
        'state_id'=>20,
        'key'=>'332',
        'name'=>'San Pedro Topiltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1331,
        'state_id'=>20,
        'key'=>'333',
        'name'=>'San Pedro Totolápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1332,
        'state_id'=>20,
        'key'=>'334',
        'name'=>'Villa de Tututepec de Melchor Ocampo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1333,
        'state_id'=>20,
        'key'=>'335',
        'name'=>'San Pedro Yaneri',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1334,
        'state_id'=>20,
        'key'=>'336',
        'name'=>'San Pedro Yólox',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1335,
        'state_id'=>20,
        'key'=>'337',
        'name'=>'San Pedro y San Pablo Ayutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1336,
        'state_id'=>20,
        'key'=>'338',
        'name'=>'Villa de Etla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1337,
        'state_id'=>20,
        'key'=>'339',
        'name'=>'San Pedro y San Pablo Teposcolula',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1338,
        'state_id'=>20,
        'key'=>'340',
        'name'=>'San Pedro y San Pablo Tequixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1339,
        'state_id'=>20,
        'key'=>'341',
        'name'=>'San Pedro Yucunama',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1340,
        'state_id'=>20,
        'key'=>'342',
        'name'=>'San Raymundo Jalpan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1341,
        'state_id'=>20,
        'key'=>'343',
        'name'=>'San Sebastián Abasolo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1342,
        'state_id'=>20,
        'key'=>'344',
        'name'=>'San Sebastián Coatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1343,
        'state_id'=>20,
        'key'=>'345',
        'name'=>'San Sebastián Ixcapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1344,
        'state_id'=>20,
        'key'=>'346',
        'name'=>'San Sebastián Nicananduta',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1345,
        'state_id'=>20,
        'key'=>'347',
        'name'=>'San Sebastián Río Hondo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1346,
        'state_id'=>20,
        'key'=>'348',
        'name'=>'San Sebastián Tecomaxtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1347,
        'state_id'=>20,
        'key'=>'349',
        'name'=>'San Sebastián Teitipac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1348,
        'state_id'=>20,
        'key'=>'350',
        'name'=>'San Sebastián Tutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1349,
        'state_id'=>20,
        'key'=>'351',
        'name'=>'San Simón Almolongas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1350,
        'state_id'=>20,
        'key'=>'352',
        'name'=>'San Simón Zahuatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1351,
        'state_id'=>20,
        'key'=>'353',
        'name'=>'Santa Ana',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1352,
        'state_id'=>20,
        'key'=>'354',
        'name'=>'Santa Ana Ateixtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1353,
        'state_id'=>20,
        'key'=>'355',
        'name'=>'Santa Ana Cuauhtémoc',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1354,
        'state_id'=>20,
        'key'=>'356',
        'name'=>'Santa Ana del Valle',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1355,
        'state_id'=>20,
        'key'=>'357',
        'name'=>'Santa Ana Tavela',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1356,
        'state_id'=>20,
        'key'=>'358',
        'name'=>'Santa Ana Tlapacoyan',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1357,
        'state_id'=>20,
        'key'=>'359',
        'name'=>'Santa Ana Yareni',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1358,
        'state_id'=>20,
        'key'=>'360',
        'name'=>'Santa Ana Zegache',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1359,
        'state_id'=>20,
        'key'=>'361',
        'name'=>'Santa Catalina Quierí',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1360,
        'state_id'=>20,
        'key'=>'362',
        'name'=>'Santa Catarina Cuixtla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1361,
        'state_id'=>20,
        'key'=>'363',
        'name'=>'Santa Catarina Ixtepeji',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1362,
        'state_id'=>20,
        'key'=>'364',
        'name'=>'Santa Catarina Juquila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1363,
        'state_id'=>20,
        'key'=>'365',
        'name'=>'Santa Catarina Lachatao',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1364,
        'state_id'=>20,
        'key'=>'366',
        'name'=>'Santa Catarina Loxicha',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1365,
        'state_id'=>20,
        'key'=>'367',
        'name'=>'Santa Catarina Mechoacán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1366,
        'state_id'=>20,
        'key'=>'368',
        'name'=>'Santa Catarina Minas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1367,
        'state_id'=>20,
        'key'=>'369',
        'name'=>'Santa Catarina Quiané',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1368,
        'state_id'=>20,
        'key'=>'370',
        'name'=>'Santa Catarina Tayata',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1369,
        'state_id'=>20,
        'key'=>'371',
        'name'=>'Santa Catarina Ticuá',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1370,
        'state_id'=>20,
        'key'=>'372',
        'name'=>'Santa Catarina Yosonotú',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1371,
        'state_id'=>20,
        'key'=>'373',
        'name'=>'Santa Catarina Zapoquila',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1372,
        'state_id'=>20,
        'key'=>'374',
        'name'=>'Santa Cruz Acatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1373,
        'state_id'=>20,
        'key'=>'375',
        'name'=>'Santa Cruz Amilpas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1374,
        'state_id'=>20,
        'key'=>'376',
        'name'=>'Santa Cruz de Bravo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1375,
        'state_id'=>20,
        'key'=>'377',
        'name'=>'Santa Cruz Itundujia',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1376,
        'state_id'=>20,
        'key'=>'378',
        'name'=>'Santa Cruz Mixtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1377,
        'state_id'=>20,
        'key'=>'379',
        'name'=>'Santa Cruz Nundaco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1378,
        'state_id'=>20,
        'key'=>'380',
        'name'=>'Santa Cruz Papalutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1379,
        'state_id'=>20,
        'key'=>'381',
        'name'=>'Santa Cruz Tacache de Mina',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1380,
        'state_id'=>20,
        'key'=>'382',
        'name'=>'Santa Cruz Tacahua',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1381,
        'state_id'=>20,
        'key'=>'383',
        'name'=>'Santa Cruz Tayata',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1382,
        'state_id'=>20,
        'key'=>'384',
        'name'=>'Santa Cruz Xitla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1383,
        'state_id'=>20,
        'key'=>'385',
        'name'=>'Santa Cruz Xoxocotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1384,
        'state_id'=>20,
        'key'=>'386',
        'name'=>'Santa Cruz Zenzontepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1385,
        'state_id'=>20,
        'key'=>'387',
        'name'=>'Santa Gertrudis',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1386,
        'state_id'=>20,
        'key'=>'388',
        'name'=>'Santa Inés del Monte',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1387,
        'state_id'=>20,
        'key'=>'389',
        'name'=>'Santa Inés Yatzeche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1388,
        'state_id'=>20,
        'key'=>'390',
        'name'=>'Santa Lucía del Camino',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1389,
        'state_id'=>20,
        'key'=>'391',
        'name'=>'Santa Lucía Miahuatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1390,
        'state_id'=>20,
        'key'=>'392',
        'name'=>'Santa Lucía Monteverde',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1391,
        'state_id'=>20,
        'key'=>'393',
        'name'=>'Santa Lucía Ocotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1392,
        'state_id'=>20,
        'key'=>'394',
        'name'=>'Santa María Alotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1393,
        'state_id'=>20,
        'key'=>'395',
        'name'=>'Santa María Apazco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1394,
        'state_id'=>20,
        'key'=>'396',
        'name'=>'Santa María la Asunción',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1395,
        'state_id'=>20,
        'key'=>'397',
        'name'=>'Heroica Ciudad de Tlaxiaco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1396,
        'state_id'=>20,
        'key'=>'398',
        'name'=>'Ayoquezco de Aldama',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1397,
        'state_id'=>20,
        'key'=>'399',
        'name'=>'Santa María Atzompa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1398,
        'state_id'=>20,
        'key'=>'400',
        'name'=>'Santa María Camotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1399,
        'state_id'=>20,
        'key'=>'401',
        'name'=>'Santa María Colotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1400,
        'state_id'=>20,
        'key'=>'402',
        'name'=>'Santa María Cortijo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1401,
        'state_id'=>20,
        'key'=>'403',
        'name'=>'Santa María Coyotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1402,
        'state_id'=>20,
        'key'=>'404',
        'name'=>'Santa María Chachoápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1403,
        'state_id'=>20,
        'key'=>'405',
        'name'=>'Villa de Chilapa de Díaz',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1404,
        'state_id'=>20,
        'key'=>'406',
        'name'=>'Santa María Chilchotla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1405,
        'state_id'=>20,
        'key'=>'407',
        'name'=>'Santa María Chimalapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1406,
        'state_id'=>20,
        'key'=>'408',
        'name'=>'Santa María del Rosario',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1407,
        'state_id'=>20,
        'key'=>'409',
        'name'=>'Santa María del Tule',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1408,
        'state_id'=>20,
        'key'=>'410',
        'name'=>'Santa María Ecatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1409,
        'state_id'=>20,
        'key'=>'411',
        'name'=>'Santa María Guelacé',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1410,
        'state_id'=>20,
        'key'=>'412',
        'name'=>'Santa María Guienagati',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1411,
        'state_id'=>20,
        'key'=>'413',
        'name'=>'Santa María Huatulco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1412,
        'state_id'=>20,
        'key'=>'414',
        'name'=>'Santa María Huazolotitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1413,
        'state_id'=>20,
        'key'=>'415',
        'name'=>'Santa María Ipalapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1414,
        'state_id'=>20,
        'key'=>'416',
        'name'=>'Santa María Ixcatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1415,
        'state_id'=>20,
        'key'=>'417',
        'name'=>'Santa María Jacatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1416,
        'state_id'=>20,
        'key'=>'418',
        'name'=>'Santa María Jalapa del Marqués',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1417,
        'state_id'=>20,
        'key'=>'419',
        'name'=>'Santa María Jaltianguis',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1418,
        'state_id'=>20,
        'key'=>'420',
        'name'=>'Santa María Lachixío',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1419,
        'state_id'=>20,
        'key'=>'421',
        'name'=>'Santa María Mixtequilla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1420,
        'state_id'=>20,
        'key'=>'422',
        'name'=>'Santa María Nativitas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1421,
        'state_id'=>20,
        'key'=>'423',
        'name'=>'Santa María Nduayaco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1422,
        'state_id'=>20,
        'key'=>'424',
        'name'=>'Santa María Ozolotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1423,
        'state_id'=>20,
        'key'=>'425',
        'name'=>'Santa María Pápalo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1424,
        'state_id'=>20,
        'key'=>'426',
        'name'=>'Santa María Peñoles',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1425,
        'state_id'=>20,
        'key'=>'427',
        'name'=>'Santa María Petapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1426,
        'state_id'=>20,
        'key'=>'428',
        'name'=>'Santa María Quiegolani',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1427,
        'state_id'=>20,
        'key'=>'429',
        'name'=>'Santa María Sola',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1428,
        'state_id'=>20,
        'key'=>'430',
        'name'=>'Santa María Tataltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1429,
        'state_id'=>20,
        'key'=>'431',
        'name'=>'Santa María Tecomavaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1430,
        'state_id'=>20,
        'key'=>'432',
        'name'=>'Santa María Temaxcalapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1431,
        'state_id'=>20,
        'key'=>'433',
        'name'=>'Santa María Temaxcaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1432,
        'state_id'=>20,
        'key'=>'434',
        'name'=>'Santa María Teopoxco',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1433,
        'state_id'=>20,
        'key'=>'435',
        'name'=>'Santa María Tepantlali',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1434,
        'state_id'=>20,
        'key'=>'436',
        'name'=>'Santa María Texcatitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1435,
        'state_id'=>20,
        'key'=>'437',
        'name'=>'Santa María Tlahuitoltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1436,
        'state_id'=>20,
        'key'=>'438',
        'name'=>'Santa María Tlalixtac',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1437,
        'state_id'=>20,
        'key'=>'439',
        'name'=>'Santa María Tonameca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1438,
        'state_id'=>20,
        'key'=>'440',
        'name'=>'Santa María Totolapilla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1439,
        'state_id'=>20,
        'key'=>'441',
        'name'=>'Santa María Xadani',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1440,
        'state_id'=>20,
        'key'=>'442',
        'name'=>'Santa María Yalina',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1441,
        'state_id'=>20,
        'key'=>'443',
        'name'=>'Santa María Yavesía',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1442,
        'state_id'=>20,
        'key'=>'444',
        'name'=>'Santa María Yolotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1443,
        'state_id'=>20,
        'key'=>'445',
        'name'=>'Santa María Yosoyúa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1444,
        'state_id'=>20,
        'key'=>'446',
        'name'=>'Santa María Yucuhiti',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1445,
        'state_id'=>20,
        'key'=>'447',
        'name'=>'Santa María Zacatepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1446,
        'state_id'=>20,
        'key'=>'448',
        'name'=>'Santa María Zaniza',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1447,
        'state_id'=>20,
        'key'=>'449',
        'name'=>'Santa María Zoquitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1448,
        'state_id'=>20,
        'key'=>'450',
        'name'=>'Santiago Amoltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1449,
        'state_id'=>20,
        'key'=>'451',
        'name'=>'Santiago Apoala',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1450,
        'state_id'=>20,
        'key'=>'452',
        'name'=>'Santiago Apóstol',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1451,
        'state_id'=>20,
        'key'=>'453',
        'name'=>'Santiago Astata',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1452,
        'state_id'=>20,
        'key'=>'454',
        'name'=>'Santiago Atitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1453,
        'state_id'=>20,
        'key'=>'455',
        'name'=>'Santiago Ayuquililla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1454,
        'state_id'=>20,
        'key'=>'456',
        'name'=>'Santiago Cacaloxtepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1455,
        'state_id'=>20,
        'key'=>'457',
        'name'=>'Santiago Camotlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1456,
        'state_id'=>20,
        'key'=>'458',
        'name'=>'Santiago Comaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1457,
        'state_id'=>20,
        'key'=>'459',
        'name'=>'Santiago Chazumba',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1458,
        'state_id'=>20,
        'key'=>'460',
        'name'=>'Santiago Choápam',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1459,
        'state_id'=>20,
        'key'=>'461',
        'name'=>'Santiago del Río',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1460,
        'state_id'=>20,
        'key'=>'462',
        'name'=>'Santiago Huajolotitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1461,
        'state_id'=>20,
        'key'=>'463',
        'name'=>'Santiago Huauclilla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1462,
        'state_id'=>20,
        'key'=>'464',
        'name'=>'Santiago Ihuitlán Plumas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1463,
        'state_id'=>20,
        'key'=>'465',
        'name'=>'Santiago Ixcuintepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1464,
        'state_id'=>20,
        'key'=>'466',
        'name'=>'Santiago Ixtayutla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1465,
        'state_id'=>20,
        'key'=>'467',
        'name'=>'Santiago Jamiltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1466,
        'state_id'=>20,
        'key'=>'468',
        'name'=>'Santiago Jocotepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1467,
        'state_id'=>20,
        'key'=>'469',
        'name'=>'Santiago Juxtlahuaca',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1468,
        'state_id'=>20,
        'key'=>'470',
        'name'=>'Santiago Lachiguiri',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1469,
        'state_id'=>20,
        'key'=>'471',
        'name'=>'Santiago Lalopa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1470,
        'state_id'=>20,
        'key'=>'472',
        'name'=>'Santiago Laollaga',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1471,
        'state_id'=>20,
        'key'=>'473',
        'name'=>'Santiago Laxopa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1472,
        'state_id'=>20,
        'key'=>'474',
        'name'=>'Santiago Llano Grande',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1473,
        'state_id'=>20,
        'key'=>'475',
        'name'=>'Santiago Matatlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1474,
        'state_id'=>20,
        'key'=>'476',
        'name'=>'Santiago Miltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1475,
        'state_id'=>20,
        'key'=>'477',
        'name'=>'Santiago Minas',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1476,
        'state_id'=>20,
        'key'=>'478',
        'name'=>'Santiago Nacaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1477,
        'state_id'=>20,
        'key'=>'479',
        'name'=>'Santiago Nejapilla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1478,
        'state_id'=>20,
        'key'=>'480',
        'name'=>'Santiago Nundiche',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1479,
        'state_id'=>20,
        'key'=>'481',
        'name'=>'Santiago Nuyoó',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1480,
        'state_id'=>20,
        'key'=>'482',
        'name'=>'Santiago Pinotepa Nacional',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1481,
        'state_id'=>20,
        'key'=>'483',
        'name'=>'Santiago Suchilquitongo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1482,
        'state_id'=>20,
        'key'=>'484',
        'name'=>'Santiago Tamazola',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1483,
        'state_id'=>20,
        'key'=>'485',
        'name'=>'Santiago Tapextla',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1484,
        'state_id'=>20,
        'key'=>'486',
        'name'=>'Villa Tejúpam de la Unión',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1485,
        'state_id'=>20,
        'key'=>'487',
        'name'=>'Santiago Tenango',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1486,
        'state_id'=>20,
        'key'=>'488',
        'name'=>'Santiago Tepetlapa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1487,
        'state_id'=>20,
        'key'=>'489',
        'name'=>'Santiago Tetepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1488,
        'state_id'=>20,
        'key'=>'490',
        'name'=>'Santiago Texcalcingo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1489,
        'state_id'=>20,
        'key'=>'491',
        'name'=>'Santiago Textitlán',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1490,
        'state_id'=>20,
        'key'=>'492',
        'name'=>'Santiago Tilantongo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1491,
        'state_id'=>20,
        'key'=>'493',
        'name'=>'Santiago Tillo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1492,
        'state_id'=>20,
        'key'=>'494',
        'name'=>'Santiago Tlazoyaltepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1493,
        'state_id'=>20,
        'key'=>'495',
        'name'=>'Santiago Xanica',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1494,
        'state_id'=>20,
        'key'=>'496',
        'name'=>'Santiago Xiacuí',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1495,
        'state_id'=>20,
        'key'=>'497',
        'name'=>'Santiago Yaitepec',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1496,
        'state_id'=>20,
        'key'=>'498',
        'name'=>'Santiago Yaveo',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1497,
        'state_id'=>20,
        'key'=>'499',
        'name'=>'Santiago Yolomécatl',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1498,
        'state_id'=>20,
        'key'=>'500',
        'name'=>'Santiago Yosondúa',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1499,
        'state_id'=>20,
        'key'=>'501',
        'name'=>'Santiago Yucuyachi',
        'active'=>1
        ] );



        DB::table('list_municipalities')->insert([
        'id'=>1500,
        'state_id'=>20,
        'key'=>'502',
        'name'=>'Santiago Zacatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1501,
        'state_id'=>20,
        'key'=>'503',
        'name'=>'Santiago Zoochila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1502,
        'state_id'=>20,
        'key'=>'504',
        'name'=>'Nuevo Zoquiápam',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1503,
        'state_id'=>20,
        'key'=>'505',
        'name'=>'Santo Domingo Ingenio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1504,
        'state_id'=>20,
        'key'=>'506',
        'name'=>'Santo Domingo Albarradas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1505,
        'state_id'=>20,
        'key'=>'507',
        'name'=>'Santo Domingo Armenta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1506,
        'state_id'=>20,
        'key'=>'508',
        'name'=>'Santo Domingo Chihuitán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1507,
        'state_id'=>20,
        'key'=>'509',
        'name'=>'Santo Domingo de Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1508,
        'state_id'=>20,
        'key'=>'510',
        'name'=>'Santo Domingo Ixcatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1509,
        'state_id'=>20,
        'key'=>'511',
        'name'=>'Santo Domingo Nuxaá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1510,
        'state_id'=>20,
        'key'=>'512',
        'name'=>'Santo Domingo Ozolotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1511,
        'state_id'=>20,
        'key'=>'513',
        'name'=>'Santo Domingo Petapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1512,
        'state_id'=>20,
        'key'=>'514',
        'name'=>'Santo Domingo Roayaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1513,
        'state_id'=>20,
        'key'=>'515',
        'name'=>'Santo Domingo Tehuantepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1514,
        'state_id'=>20,
        'key'=>'516',
        'name'=>'Santo Domingo Teojomulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1515,
        'state_id'=>20,
        'key'=>'517',
        'name'=>'Santo Domingo Tepuxtepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1516,
        'state_id'=>20,
        'key'=>'518',
        'name'=>'Santo Domingo Tlatayápam',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1517,
        'state_id'=>20,
        'key'=>'519',
        'name'=>'Santo Domingo Tomaltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1518,
        'state_id'=>20,
        'key'=>'520',
        'name'=>'Santo Domingo Tonalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1519,
        'state_id'=>20,
        'key'=>'521',
        'name'=>'Santo Domingo Tonaltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1520,
        'state_id'=>20,
        'key'=>'522',
        'name'=>'Santo Domingo Xagacía',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1521,
        'state_id'=>20,
        'key'=>'523',
        'name'=>'Santo Domingo Yanhuitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1522,
        'state_id'=>20,
        'key'=>'524',
        'name'=>'Santo Domingo Yodohino',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1523,
        'state_id'=>20,
        'key'=>'525',
        'name'=>'Santo Domingo Zanatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1524,
        'state_id'=>20,
        'key'=>'526',
        'name'=>'Santos Reyes Nopala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1525,
        'state_id'=>20,
        'key'=>'527',
        'name'=>'Santos Reyes Pápalo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1526,
        'state_id'=>20,
        'key'=>'528',
        'name'=>'Santos Reyes Tepejillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1527,
        'state_id'=>20,
        'key'=>'529',
        'name'=>'Santos Reyes Yucuná',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1528,
        'state_id'=>20,
        'key'=>'530',
        'name'=>'Santo Tomás Jalieza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1529,
        'state_id'=>20,
        'key'=>'531',
        'name'=>'Santo Tomás Mazaltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1530,
        'state_id'=>20,
        'key'=>'532',
        'name'=>'Santo Tomás Ocotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1531,
        'state_id'=>20,
        'key'=>'533',
        'name'=>'Santo Tomás Tamazulapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1532,
        'state_id'=>20,
        'key'=>'534',
        'name'=>'San Vicente Coatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1533,
        'state_id'=>20,
        'key'=>'535',
        'name'=>'San Vicente Lachixío',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1534,
        'state_id'=>20,
        'key'=>'536',
        'name'=>'San Vicente Nuñú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1535,
        'state_id'=>20,
        'key'=>'537',
        'name'=>'Silacayoápam',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1536,
        'state_id'=>20,
        'key'=>'538',
        'name'=>'Sitio de Xitlapehua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1537,
        'state_id'=>20,
        'key'=>'539',
        'name'=>'Soledad Etla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1538,
        'state_id'=>20,
        'key'=>'540',
        'name'=>'Villa de Tamazulápam del Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1539,
        'state_id'=>20,
        'key'=>'541',
        'name'=>'Tanetze de Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1540,
        'state_id'=>20,
        'key'=>'542',
        'name'=>'Taniche',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1541,
        'state_id'=>20,
        'key'=>'543',
        'name'=>'Tataltepec de Valdés',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1542,
        'state_id'=>20,
        'key'=>'544',
        'name'=>'Teococuilco de Marcos Pérez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1543,
        'state_id'=>20,
        'key'=>'545',
        'name'=>'Teotitlán de Flores Magón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1544,
        'state_id'=>20,
        'key'=>'546',
        'name'=>'Teotitlán del Valle',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1545,
        'state_id'=>20,
        'key'=>'547',
        'name'=>'Teotongo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1546,
        'state_id'=>20,
        'key'=>'548',
        'name'=>'Tepelmeme Villa de Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1547,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1548,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1549,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1550,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1551,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1552,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1553,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1554,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1555,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1556,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1557,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1558,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1559,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1560,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1561,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1562,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1563,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1564,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1565,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1566,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1567,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1568,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1569,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1570,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1571,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1572,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1573,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1574,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1575,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1576,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1577,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1578,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1579,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1580,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1581,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1582,
        'state_id'=>20,
        'key'=>'549',
        'name'=>'Heroica Villa Tezoatlán de Segura y Luna, Cuna de ',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1583,
        'state_id'=>20,
        'key'=>'550',
        'name'=>'San Jerónimo Tlacochahuaya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1584,
        'state_id'=>20,
        'key'=>'551',
        'name'=>'Tlacolula de Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1585,
        'state_id'=>20,
        'key'=>'552',
        'name'=>'Tlacotepec Plumas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1586,
        'state_id'=>20,
        'key'=>'553',
        'name'=>'Tlalixtac de Cabrera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1587,
        'state_id'=>20,
        'key'=>'554',
        'name'=>'Totontepec Villa de Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1588,
        'state_id'=>20,
        'key'=>'555',
        'name'=>'Trinidad Zaachila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1589,
        'state_id'=>20,
        'key'=>'556',
        'name'=>'La Trinidad Vista Hermosa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1590,
        'state_id'=>20,
        'key'=>'557',
        'name'=>'Unión Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1591,
        'state_id'=>20,
        'key'=>'558',
        'name'=>'Valerio Trujano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1592,
        'state_id'=>20,
        'key'=>'559',
        'name'=>'San Juan Bautista Valle Nacional',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1593,
        'state_id'=>20,
        'key'=>'560',
        'name'=>'Villa Díaz Ordaz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1594,
        'state_id'=>20,
        'key'=>'561',
        'name'=>'Yaxe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1595,
        'state_id'=>20,
        'key'=>'562',
        'name'=>'Magdalena Yodocono de Porfirio Díaz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1596,
        'state_id'=>20,
        'key'=>'563',
        'name'=>'Yogana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1597,
        'state_id'=>20,
        'key'=>'564',
        'name'=>'Yutanduchi de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1598,
        'state_id'=>20,
        'key'=>'565',
        'name'=>'Villa de Zaachila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1599,
        'state_id'=>20,
        'key'=>'566',
        'name'=>'San Mateo Yucutindoo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1600,
        'state_id'=>20,
        'key'=>'567',
        'name'=>'Zapotitlán Lagunas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1601,
        'state_id'=>20,
        'key'=>'568',
        'name'=>'Zapotitlán Palmas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1602,
        'state_id'=>20,
        'key'=>'569',
        'name'=>'Santa Inés de Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1603,
        'state_id'=>20,
        'key'=>'570',
        'name'=>'Zimatlán de Álvarez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1604,
        'state_id'=>21,
        'key'=>'001',
        'name'=>'Acajete',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1605,
        'state_id'=>21,
        'key'=>'002',
        'name'=>'Acateno',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1606,
        'state_id'=>21,
        'key'=>'003',
        'name'=>'Acatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1607,
        'state_id'=>21,
        'key'=>'004',
        'name'=>'Acatzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1608,
        'state_id'=>21,
        'key'=>'005',
        'name'=>'Acteopan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1609,
        'state_id'=>21,
        'key'=>'006',
        'name'=>'Ahuacatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1610,
        'state_id'=>21,
        'key'=>'007',
        'name'=>'Ahuatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1611,
        'state_id'=>21,
        'key'=>'008',
        'name'=>'Ahuazotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1612,
        'state_id'=>21,
        'key'=>'009',
        'name'=>'Ahuehuetitla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1613,
        'state_id'=>21,
        'key'=>'010',
        'name'=>'Ajalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1614,
        'state_id'=>21,
        'key'=>'011',
        'name'=>'Albino Zertuche',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1615,
        'state_id'=>21,
        'key'=>'012',
        'name'=>'Aljojuca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1616,
        'state_id'=>21,
        'key'=>'013',
        'name'=>'Altepexi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1617,
        'state_id'=>21,
        'key'=>'014',
        'name'=>'Amixtlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1618,
        'state_id'=>21,
        'key'=>'015',
        'name'=>'Amozoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1619,
        'state_id'=>21,
        'key'=>'016',
        'name'=>'Aquixtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1620,
        'state_id'=>21,
        'key'=>'017',
        'name'=>'Atempan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1621,
        'state_id'=>21,
        'key'=>'018',
        'name'=>'Atexcal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1622,
        'state_id'=>21,
        'key'=>'019',
        'name'=>'Atlixco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1623,
        'state_id'=>21,
        'key'=>'020',
        'name'=>'Atoyatempan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1624,
        'state_id'=>21,
        'key'=>'021',
        'name'=>'Atzala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1625,
        'state_id'=>21,
        'key'=>'022',
        'name'=>'Atzitzihuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1626,
        'state_id'=>21,
        'key'=>'023',
        'name'=>'Atzitzintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1627,
        'state_id'=>21,
        'key'=>'024',
        'name'=>'Axutla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1628,
        'state_id'=>21,
        'key'=>'025',
        'name'=>'Ayotoxco de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1629,
        'state_id'=>21,
        'key'=>'026',
        'name'=>'Calpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1630,
        'state_id'=>21,
        'key'=>'027',
        'name'=>'Caltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1631,
        'state_id'=>21,
        'key'=>'028',
        'name'=>'Camocuautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1632,
        'state_id'=>21,
        'key'=>'029',
        'name'=>'Caxhuacan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1633,
        'state_id'=>21,
        'key'=>'030',
        'name'=>'Coatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1634,
        'state_id'=>21,
        'key'=>'031',
        'name'=>'Coatzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1635,
        'state_id'=>21,
        'key'=>'032',
        'name'=>'Cohetzala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1636,
        'state_id'=>21,
        'key'=>'033',
        'name'=>'Cohuecan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1637,
        'state_id'=>21,
        'key'=>'034',
        'name'=>'Coronango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1638,
        'state_id'=>21,
        'key'=>'035',
        'name'=>'Coxcatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1639,
        'state_id'=>21,
        'key'=>'036',
        'name'=>'Coyomeapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1640,
        'state_id'=>21,
        'key'=>'037',
        'name'=>'Coyotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1641,
        'state_id'=>21,
        'key'=>'038',
        'name'=>'Cuapiaxtla de Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1642,
        'state_id'=>21,
        'key'=>'039',
        'name'=>'Cuautempan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1643,
        'state_id'=>21,
        'key'=>'040',
        'name'=>'Cuautinchán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1644,
        'state_id'=>21,
        'key'=>'041',
        'name'=>'Cuautlancingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1645,
        'state_id'=>21,
        'key'=>'042',
        'name'=>'Cuayuca de Andrade',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1646,
        'state_id'=>21,
        'key'=>'043',
        'name'=>'Cuetzalan del Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1647,
        'state_id'=>21,
        'key'=>'044',
        'name'=>'Cuyoaco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1648,
        'state_id'=>21,
        'key'=>'045',
        'name'=>'Chalchicomula de Sesma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1649,
        'state_id'=>21,
        'key'=>'046',
        'name'=>'Chapulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1650,
        'state_id'=>21,
        'key'=>'047',
        'name'=>'Chiautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1651,
        'state_id'=>21,
        'key'=>'048',
        'name'=>'Chiautzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1652,
        'state_id'=>21,
        'key'=>'049',
        'name'=>'Chiconcuautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1653,
        'state_id'=>21,
        'key'=>'050',
        'name'=>'Chichiquila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1654,
        'state_id'=>21,
        'key'=>'051',
        'name'=>'Chietla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1655,
        'state_id'=>21,
        'key'=>'052',
        'name'=>'Chigmecatitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1656,
        'state_id'=>21,
        'key'=>'053',
        'name'=>'Chignahuapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1657,
        'state_id'=>21,
        'key'=>'054',
        'name'=>'Chignautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1658,
        'state_id'=>21,
        'key'=>'055',
        'name'=>'Chila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1659,
        'state_id'=>21,
        'key'=>'056',
        'name'=>'Chila de la Sal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1660,
        'state_id'=>21,
        'key'=>'057',
        'name'=>'Honey',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1661,
        'state_id'=>21,
        'key'=>'058',
        'name'=>'Chilchotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1662,
        'state_id'=>21,
        'key'=>'059',
        'name'=>'Chinantla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1663,
        'state_id'=>21,
        'key'=>'060',
        'name'=>'Domingo Arenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1664,
        'state_id'=>21,
        'key'=>'061',
        'name'=>'Eloxochitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1665,
        'state_id'=>21,
        'key'=>'062',
        'name'=>'Epatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1666,
        'state_id'=>21,
        'key'=>'063',
        'name'=>'Esperanza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1667,
        'state_id'=>21,
        'key'=>'064',
        'name'=>'Francisco Z. Mena',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1668,
        'state_id'=>21,
        'key'=>'065',
        'name'=>'General Felipe Ángeles',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1669,
        'state_id'=>21,
        'key'=>'066',
        'name'=>'Guadalupe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1670,
        'state_id'=>21,
        'key'=>'067',
        'name'=>'Guadalupe Victoria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1671,
        'state_id'=>21,
        'key'=>'068',
        'name'=>'Hermenegildo Galeana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1672,
        'state_id'=>21,
        'key'=>'069',
        'name'=>'Huaquechula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1673,
        'state_id'=>21,
        'key'=>'070',
        'name'=>'Huatlatlauca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1674,
        'state_id'=>21,
        'key'=>'071',
        'name'=>'Huauchinango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1675,
        'state_id'=>21,
        'key'=>'072',
        'name'=>'Huehuetla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1676,
        'state_id'=>21,
        'key'=>'073',
        'name'=>'Huehuetlán el Chico',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1677,
        'state_id'=>21,
        'key'=>'074',
        'name'=>'Huejotzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1678,
        'state_id'=>21,
        'key'=>'075',
        'name'=>'Hueyapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1679,
        'state_id'=>21,
        'key'=>'076',
        'name'=>'Hueytamalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1680,
        'state_id'=>21,
        'key'=>'077',
        'name'=>'Hueytlalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1681,
        'state_id'=>21,
        'key'=>'078',
        'name'=>'Huitzilan de Serdán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1682,
        'state_id'=>21,
        'key'=>'079',
        'name'=>'Huitziltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1683,
        'state_id'=>21,
        'key'=>'080',
        'name'=>'Atlequizayan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1684,
        'state_id'=>21,
        'key'=>'081',
        'name'=>'Ixcamilpa de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1685,
        'state_id'=>21,
        'key'=>'082',
        'name'=>'Ixcaquixtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1686,
        'state_id'=>21,
        'key'=>'083',
        'name'=>'Ixtacamaxtitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1687,
        'state_id'=>21,
        'key'=>'084',
        'name'=>'Ixtepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1688,
        'state_id'=>21,
        'key'=>'085',
        'name'=>'Izúcar de Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1689,
        'state_id'=>21,
        'key'=>'086',
        'name'=>'Jalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1690,
        'state_id'=>21,
        'key'=>'087',
        'name'=>'Jolalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1691,
        'state_id'=>21,
        'key'=>'088',
        'name'=>'Jonotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1692,
        'state_id'=>21,
        'key'=>'089',
        'name'=>'Jopala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1693,
        'state_id'=>21,
        'key'=>'090',
        'name'=>'Juan C. Bonilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1694,
        'state_id'=>21,
        'key'=>'091',
        'name'=>'Juan Galindo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1695,
        'state_id'=>21,
        'key'=>'092',
        'name'=>'Juan N. Méndez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1696,
        'state_id'=>21,
        'key'=>'093',
        'name'=>'Lafragua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1697,
        'state_id'=>21,
        'key'=>'094',
        'name'=>'Libres',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1698,
        'state_id'=>21,
        'key'=>'095',
        'name'=>'La Magdalena Tlatlauquitepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1699,
        'state_id'=>21,
        'key'=>'096',
        'name'=>'Mazapiltepec de Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1700,
        'state_id'=>21,
        'key'=>'097',
        'name'=>'Mixtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1701,
        'state_id'=>21,
        'key'=>'098',
        'name'=>'Molcaxac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1702,
        'state_id'=>21,
        'key'=>'099',
        'name'=>'Cañada Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1703,
        'state_id'=>21,
        'key'=>'100',
        'name'=>'Naupan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1704,
        'state_id'=>21,
        'key'=>'101',
        'name'=>'Nauzontla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1705,
        'state_id'=>21,
        'key'=>'102',
        'name'=>'Nealtican',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1706,
        'state_id'=>21,
        'key'=>'103',
        'name'=>'Nicolás Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1707,
        'state_id'=>21,
        'key'=>'104',
        'name'=>'Nopalucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1708,
        'state_id'=>21,
        'key'=>'105',
        'name'=>'Ocotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1709,
        'state_id'=>21,
        'key'=>'106',
        'name'=>'Ocoyucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1710,
        'state_id'=>21,
        'key'=>'107',
        'name'=>'Olintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1711,
        'state_id'=>21,
        'key'=>'108',
        'name'=>'Oriental',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1712,
        'state_id'=>21,
        'key'=>'109',
        'name'=>'Pahuatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1713,
        'state_id'=>21,
        'key'=>'110',
        'name'=>'Palmar de Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1714,
        'state_id'=>21,
        'key'=>'111',
        'name'=>'Pantepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1715,
        'state_id'=>21,
        'key'=>'112',
        'name'=>'Petlalcingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1716,
        'state_id'=>21,
        'key'=>'113',
        'name'=>'Piaxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1717,
        'state_id'=>21,
        'key'=>'114',
        'name'=>'Puebla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1718,
        'state_id'=>21,
        'key'=>'115',
        'name'=>'Quecholac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1719,
        'state_id'=>21,
        'key'=>'116',
        'name'=>'Quimixtlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1720,
        'state_id'=>21,
        'key'=>'117',
        'name'=>'Rafael Lara Grajales',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1721,
        'state_id'=>21,
        'key'=>'118',
        'name'=>'Los Reyes de Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1722,
        'state_id'=>21,
        'key'=>'119',
        'name'=>'San Andrés Cholula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1723,
        'state_id'=>21,
        'key'=>'120',
        'name'=>'San Antonio Cañada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1724,
        'state_id'=>21,
        'key'=>'121',
        'name'=>'San Diego la Mesa Tochimiltzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1725,
        'state_id'=>21,
        'key'=>'122',
        'name'=>'San Felipe Teotlalcingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1726,
        'state_id'=>21,
        'key'=>'123',
        'name'=>'San Felipe Tepatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1727,
        'state_id'=>21,
        'key'=>'124',
        'name'=>'San Gabriel Chilac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1728,
        'state_id'=>21,
        'key'=>'125',
        'name'=>'San Gregorio Atzompa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1729,
        'state_id'=>21,
        'key'=>'126',
        'name'=>'San Jerónimo Tecuanipan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1730,
        'state_id'=>21,
        'key'=>'127',
        'name'=>'San Jerónimo Xayacatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1731,
        'state_id'=>21,
        'key'=>'128',
        'name'=>'San José Chiapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1732,
        'state_id'=>21,
        'key'=>'129',
        'name'=>'San José Miahuatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1733,
        'state_id'=>21,
        'key'=>'130',
        'name'=>'San Juan Atenco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1734,
        'state_id'=>21,
        'key'=>'131',
        'name'=>'San Juan Atzompa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1735,
        'state_id'=>21,
        'key'=>'132',
        'name'=>'San Martín Texmelucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1736,
        'state_id'=>21,
        'key'=>'133',
        'name'=>'San Martín Totoltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1737,
        'state_id'=>21,
        'key'=>'134',
        'name'=>'San Matías Tlalancaleca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1738,
        'state_id'=>21,
        'key'=>'135',
        'name'=>'San Miguel Ixitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1739,
        'state_id'=>21,
        'key'=>'136',
        'name'=>'San Miguel Xoxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1740,
        'state_id'=>21,
        'key'=>'137',
        'name'=>'San Nicolás Buenos Aires',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1741,
        'state_id'=>21,
        'key'=>'138',
        'name'=>'San Nicolás de los Ranchos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1742,
        'state_id'=>21,
        'key'=>'139',
        'name'=>'San Pablo Anicano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1743,
        'state_id'=>21,
        'key'=>'140',
        'name'=>'San Pedro Cholula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1744,
        'state_id'=>21,
        'key'=>'141',
        'name'=>'San Pedro Yeloixtlahuaca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1745,
        'state_id'=>21,
        'key'=>'142',
        'name'=>'San Salvador el Seco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1746,
        'state_id'=>21,
        'key'=>'143',
        'name'=>'San Salvador el Verde',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1747,
        'state_id'=>21,
        'key'=>'144',
        'name'=>'San Salvador Huixcolotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1748,
        'state_id'=>21,
        'key'=>'145',
        'name'=>'San Sebastián Tlacotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1749,
        'state_id'=>21,
        'key'=>'146',
        'name'=>'Santa Catarina Tlaltempan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1750,
        'state_id'=>21,
        'key'=>'147',
        'name'=>'Santa Inés Ahuatempan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1751,
        'state_id'=>21,
        'key'=>'148',
        'name'=>'Santa Isabel Cholula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1752,
        'state_id'=>21,
        'key'=>'149',
        'name'=>'Santiago Miahuatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1753,
        'state_id'=>21,
        'key'=>'150',
        'name'=>'Huehuetlán el Grande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1754,
        'state_id'=>21,
        'key'=>'151',
        'name'=>'Santo Tomás Hueyotlipan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1755,
        'state_id'=>21,
        'key'=>'152',
        'name'=>'Soltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1756,
        'state_id'=>21,
        'key'=>'153',
        'name'=>'Tecali de Herrera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1757,
        'state_id'=>21,
        'key'=>'154',
        'name'=>'Tecamachalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1758,
        'state_id'=>21,
        'key'=>'155',
        'name'=>'Tecomatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1759,
        'state_id'=>21,
        'key'=>'156',
        'name'=>'Tehuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1760,
        'state_id'=>21,
        'key'=>'157',
        'name'=>'Tehuitzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1761,
        'state_id'=>21,
        'key'=>'158',
        'name'=>'Tenampulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1762,
        'state_id'=>21,
        'key'=>'159',
        'name'=>'Teopantlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1763,
        'state_id'=>21,
        'key'=>'160',
        'name'=>'Teotlalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1764,
        'state_id'=>21,
        'key'=>'161',
        'name'=>'Tepanco de López',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1765,
        'state_id'=>21,
        'key'=>'162',
        'name'=>'Tepango de Rodríguez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1766,
        'state_id'=>21,
        'key'=>'163',
        'name'=>'Tepatlaxco de Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1767,
        'state_id'=>21,
        'key'=>'164',
        'name'=>'Tepeaca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1768,
        'state_id'=>21,
        'key'=>'165',
        'name'=>'Tepemaxalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1769,
        'state_id'=>21,
        'key'=>'166',
        'name'=>'Tepeojuma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1770,
        'state_id'=>21,
        'key'=>'167',
        'name'=>'Tepetzintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1771,
        'state_id'=>21,
        'key'=>'168',
        'name'=>'Tepexco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1772,
        'state_id'=>21,
        'key'=>'169',
        'name'=>'Tepexi de Rodríguez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1773,
        'state_id'=>21,
        'key'=>'170',
        'name'=>'Tepeyahualco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1774,
        'state_id'=>21,
        'key'=>'171',
        'name'=>'Tepeyahualco de Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1775,
        'state_id'=>21,
        'key'=>'172',
        'name'=>'Tetela de Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1776,
        'state_id'=>21,
        'key'=>'173',
        'name'=>'Teteles de Avila Castillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1777,
        'state_id'=>21,
        'key'=>'174',
        'name'=>'Teziutlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1778,
        'state_id'=>21,
        'key'=>'175',
        'name'=>'Tianguismanalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1779,
        'state_id'=>21,
        'key'=>'176',
        'name'=>'Tilapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1780,
        'state_id'=>21,
        'key'=>'177',
        'name'=>'Tlacotepec de Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1781,
        'state_id'=>21,
        'key'=>'178',
        'name'=>'Tlacuilotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1782,
        'state_id'=>21,
        'key'=>'179',
        'name'=>'Tlachichuca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1783,
        'state_id'=>21,
        'key'=>'180',
        'name'=>'Tlahuapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1784,
        'state_id'=>21,
        'key'=>'181',
        'name'=>'Tlaltenango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1785,
        'state_id'=>21,
        'key'=>'182',
        'name'=>'Tlanepantla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1786,
        'state_id'=>21,
        'key'=>'183',
        'name'=>'Tlaola',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1787,
        'state_id'=>21,
        'key'=>'184',
        'name'=>'Tlapacoya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1788,
        'state_id'=>21,
        'key'=>'185',
        'name'=>'Tlapanalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1789,
        'state_id'=>21,
        'key'=>'186',
        'name'=>'Tlatlauquitepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1790,
        'state_id'=>21,
        'key'=>'187',
        'name'=>'Tlaxco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1791,
        'state_id'=>21,
        'key'=>'188',
        'name'=>'Tochimilco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1792,
        'state_id'=>21,
        'key'=>'189',
        'name'=>'Tochtepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1793,
        'state_id'=>21,
        'key'=>'190',
        'name'=>'Totoltepec de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1794,
        'state_id'=>21,
        'key'=>'191',
        'name'=>'Tulcingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1795,
        'state_id'=>21,
        'key'=>'192',
        'name'=>'Tuzamapan de Galeana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1796,
        'state_id'=>21,
        'key'=>'193',
        'name'=>'Tzicatlacoyan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1797,
        'state_id'=>21,
        'key'=>'194',
        'name'=>'Venustiano Carranza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1798,
        'state_id'=>21,
        'key'=>'195',
        'name'=>'Vicente Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1799,
        'state_id'=>21,
        'key'=>'196',
        'name'=>'Xayacatlán de Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1800,
        'state_id'=>21,
        'key'=>'197',
        'name'=>'Xicotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1801,
        'state_id'=>21,
        'key'=>'198',
        'name'=>'Xicotlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1802,
        'state_id'=>21,
        'key'=>'199',
        'name'=>'Xiutetelco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1803,
        'state_id'=>21,
        'key'=>'200',
        'name'=>'Xochiapulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1804,
        'state_id'=>21,
        'key'=>'201',
        'name'=>'Xochiltepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1805,
        'state_id'=>21,
        'key'=>'202',
        'name'=>'Xochitlán de Vicente Suárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1806,
        'state_id'=>21,
        'key'=>'203',
        'name'=>'Xochitlán Todos Santos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1807,
        'state_id'=>21,
        'key'=>'204',
        'name'=>'Yaonáhuac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1808,
        'state_id'=>21,
        'key'=>'205',
        'name'=>'Yehualtepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1809,
        'state_id'=>21,
        'key'=>'206',
        'name'=>'Zacapala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1810,
        'state_id'=>21,
        'key'=>'207',
        'name'=>'Zacapoaxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1811,
        'state_id'=>21,
        'key'=>'208',
        'name'=>'Zacatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1812,
        'state_id'=>21,
        'key'=>'209',
        'name'=>'Zapotitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1813,
        'state_id'=>21,
        'key'=>'210',
        'name'=>'Zapotitlán de Méndez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1814,
        'state_id'=>21,
        'key'=>'211',
        'name'=>'Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1815,
        'state_id'=>21,
        'key'=>'212',
        'name'=>'Zautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1816,
        'state_id'=>21,
        'key'=>'213',
        'name'=>'Zihuateutla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1817,
        'state_id'=>21,
        'key'=>'214',
        'name'=>'Zinacatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1818,
        'state_id'=>21,
        'key'=>'215',
        'name'=>'Zongozotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1819,
        'state_id'=>21,
        'key'=>'216',
        'name'=>'Zoquiapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1820,
        'state_id'=>21,
        'key'=>'217',
        'name'=>'Zoquitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1821,
        'state_id'=>22,
        'key'=>'001',
        'name'=>'Amealco de Bonfil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1822,
        'state_id'=>22,
        'key'=>'002',
        'name'=>'Pinal de Amoles',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1823,
        'state_id'=>22,
        'key'=>'003',
        'name'=>'Arroyo Seco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1824,
        'state_id'=>22,
        'key'=>'004',
        'name'=>'Cadereyta de Montes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1825,
        'state_id'=>22,
        'key'=>'005',
        'name'=>'Colón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1826,
        'state_id'=>22,
        'key'=>'006',
        'name'=>'Corregidora',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1827,
        'state_id'=>22,
        'key'=>'007',
        'name'=>'Ezequiel Montes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1828,
        'state_id'=>22,
        'key'=>'008',
        'name'=>'Huimilpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1829,
        'state_id'=>22,
        'key'=>'009',
        'name'=>'Jalpan de Serra',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1830,
        'state_id'=>22,
        'key'=>'010',
        'name'=>'Landa de Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1831,
        'state_id'=>22,
        'key'=>'011',
        'name'=>'El Marqués',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1832,
        'state_id'=>22,
        'key'=>'012',
        'name'=>'Pedro Escobedo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1833,
        'state_id'=>22,
        'key'=>'013',
        'name'=>'Peñamiller',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1834,
        'state_id'=>22,
        'key'=>'014',
        'name'=>'Querétaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1835,
        'state_id'=>22,
        'key'=>'015',
        'name'=>'San Joaquín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1836,
        'state_id'=>22,
        'key'=>'016',
        'name'=>'San Juan del Río',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1837,
        'state_id'=>22,
        'key'=>'017',
        'name'=>'Tequisquiapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1838,
        'state_id'=>22,
        'key'=>'018',
        'name'=>'Tolimán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1839,
        'state_id'=>23,
        'key'=>'001',
        'name'=>'Cozumel',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1840,
        'state_id'=>23,
        'key'=>'002',
        'name'=>'Felipe Carrillo Puerto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1841,
        'state_id'=>23,
        'key'=>'003',
        'name'=>'Isla Mujeres',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1842,
        'state_id'=>23,
        'key'=>'004',
        'name'=>'Othón P. Blanco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1843,
        'state_id'=>23,
        'key'=>'005',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1844,
        'state_id'=>23,
        'key'=>'006',
        'name'=>'José María Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1845,
        'state_id'=>23,
        'key'=>'007',
        'name'=>'Lázaro Cárdenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1846,
        'state_id'=>23,
        'key'=>'008',
        'name'=>'Solidaridad',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1847,
        'state_id'=>23,
        'key'=>'009',
        'name'=>'Tulum',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1848,
        'state_id'=>23,
        'key'=>'010',
        'name'=>'Bacalar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1849,
        'state_id'=>24,
        'key'=>'001',
        'name'=>'Ahualulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1850,
        'state_id'=>24,
        'key'=>'002',
        'name'=>'Alaquines',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1851,
        'state_id'=>24,
        'key'=>'003',
        'name'=>'Aquismón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1852,
        'state_id'=>24,
        'key'=>'004',
        'name'=>'Armadillo de los Infante',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1853,
        'state_id'=>24,
        'key'=>'005',
        'name'=>'Cárdenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1854,
        'state_id'=>24,
        'key'=>'006',
        'name'=>'Catorce',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1855,
        'state_id'=>24,
        'key'=>'007',
        'name'=>'Cedral',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1856,
        'state_id'=>24,
        'key'=>'008',
        'name'=>'Cerritos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1857,
        'state_id'=>24,
        'key'=>'009',
        'name'=>'Cerro de San Pedro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1858,
        'state_id'=>24,
        'key'=>'010',
        'name'=>'Ciudad del Maíz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1859,
        'state_id'=>24,
        'key'=>'011',
        'name'=>'Ciudad Fernández',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1860,
        'state_id'=>24,
        'key'=>'012',
        'name'=>'Tancanhuitz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1861,
        'state_id'=>24,
        'key'=>'013',
        'name'=>'Ciudad Valles',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1862,
        'state_id'=>24,
        'key'=>'014',
        'name'=>'Coxcatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1863,
        'state_id'=>24,
        'key'=>'015',
        'name'=>'Charcas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1864,
        'state_id'=>24,
        'key'=>'016',
        'name'=>'Ebano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1865,
        'state_id'=>24,
        'key'=>'017',
        'name'=>'Guadalcázar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1866,
        'state_id'=>24,
        'key'=>'018',
        'name'=>'Huehuetlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1867,
        'state_id'=>24,
        'key'=>'019',
        'name'=>'Lagunillas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1868,
        'state_id'=>24,
        'key'=>'020',
        'name'=>'Matehuala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1869,
        'state_id'=>24,
        'key'=>'021',
        'name'=>'Mexquitic de Carmona',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1870,
        'state_id'=>24,
        'key'=>'022',
        'name'=>'Moctezuma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1871,
        'state_id'=>24,
        'key'=>'023',
        'name'=>'Rayón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1872,
        'state_id'=>24,
        'key'=>'024',
        'name'=>'Rioverde',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1873,
        'state_id'=>24,
        'key'=>'025',
        'name'=>'Salinas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1874,
        'state_id'=>24,
        'key'=>'026',
        'name'=>'San Antonio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1875,
        'state_id'=>24,
        'key'=>'027',
        'name'=>'San Ciro de Acosta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1876,
        'state_id'=>24,
        'key'=>'028',
        'name'=>'San Luis Potosí',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1877,
        'state_id'=>24,
        'key'=>'029',
        'name'=>'San Martín Chalchicuautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1878,
        'state_id'=>24,
        'key'=>'030',
        'name'=>'San Nicolás Tolentino',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1879,
        'state_id'=>24,
        'key'=>'031',
        'name'=>'Santa Catarina',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1880,
        'state_id'=>24,
        'key'=>'032',
        'name'=>'Santa María del Río',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1881,
        'state_id'=>24,
        'key'=>'033',
        'name'=>'Santo Domingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1882,
        'state_id'=>24,
        'key'=>'034',
        'name'=>'San Vicente Tancuayalab',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1883,
        'state_id'=>24,
        'key'=>'035',
        'name'=>'Soledad de Graciano Sánchez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1884,
        'state_id'=>24,
        'key'=>'036',
        'name'=>'Tamasopo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1885,
        'state_id'=>24,
        'key'=>'037',
        'name'=>'Tamazunchale',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1886,
        'state_id'=>24,
        'key'=>'038',
        'name'=>'Tampacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1887,
        'state_id'=>24,
        'key'=>'039',
        'name'=>'Tampamolón Corona',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1888,
        'state_id'=>24,
        'key'=>'040',
        'name'=>'Tamuín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1889,
        'state_id'=>24,
        'key'=>'041',
        'name'=>'Tanlajás',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1890,
        'state_id'=>24,
        'key'=>'042',
        'name'=>'Tanquián de Escobedo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1891,
        'state_id'=>24,
        'key'=>'043',
        'name'=>'Tierra Nueva',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1892,
        'state_id'=>24,
        'key'=>'044',
        'name'=>'Vanegas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1893,
        'state_id'=>24,
        'key'=>'045',
        'name'=>'Venado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1894,
        'state_id'=>24,
        'key'=>'046',
        'name'=>'Villa de Arriaga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1895,
        'state_id'=>24,
        'key'=>'047',
        'name'=>'Villa de Guadalupe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1896,
        'state_id'=>24,
        'key'=>'048',
        'name'=>'Villa de la Paz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1897,
        'state_id'=>24,
        'key'=>'049',
        'name'=>'Villa de Ramos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1898,
        'state_id'=>24,
        'key'=>'050',
        'name'=>'Villa de Reyes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1899,
        'state_id'=>24,
        'key'=>'051',
        'name'=>'Villa Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1900,
        'state_id'=>24,
        'key'=>'052',
        'name'=>'Villa Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1901,
        'state_id'=>24,
        'key'=>'053',
        'name'=>'Axtla de Terrazas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1902,
        'state_id'=>24,
        'key'=>'054',
        'name'=>'Xilitla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1903,
        'state_id'=>24,
        'key'=>'055',
        'name'=>'Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1904,
        'state_id'=>24,
        'key'=>'056',
        'name'=>'Villa de Arista',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1905,
        'state_id'=>24,
        'key'=>'057',
        'name'=>'Matlapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1906,
        'state_id'=>24,
        'key'=>'058',
        'name'=>'El Naranjo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1907,
        'state_id'=>25,
        'key'=>'001',
        'name'=>'Ahome',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1908,
        'state_id'=>25,
        'key'=>'002',
        'name'=>'Angostura',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1909,
        'state_id'=>25,
        'key'=>'003',
        'name'=>'Badiraguato',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1910,
        'state_id'=>25,
        'key'=>'004',
        'name'=>'Concordia',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1911,
        'state_id'=>25,
        'key'=>'005',
        'name'=>'Cosalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1912,
        'state_id'=>25,
        'key'=>'006',
        'name'=>'Culiacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1913,
        'state_id'=>25,
        'key'=>'007',
        'name'=>'Choix',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1914,
        'state_id'=>25,
        'key'=>'008',
        'name'=>'Elota',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1915,
        'state_id'=>25,
        'key'=>'009',
        'name'=>'Escuinapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1916,
        'state_id'=>25,
        'key'=>'010',
        'name'=>'El Fuerte',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1917,
        'state_id'=>25,
        'key'=>'011',
        'name'=>'Guasave',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1918,
        'state_id'=>25,
        'key'=>'012',
        'name'=>'Mazatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1919,
        'state_id'=>25,
        'key'=>'013',
        'name'=>'Mocorito',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1920,
        'state_id'=>25,
        'key'=>'014',
        'name'=>'Rosario',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1921,
        'state_id'=>25,
        'key'=>'015',
        'name'=>'Salvador Alvarado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1922,
        'state_id'=>25,
        'key'=>'016',
        'name'=>'San Ignacio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1923,
        'state_id'=>25,
        'key'=>'017',
        'name'=>'Sinaloa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1924,
        'state_id'=>25,
        'key'=>'018',
        'name'=>'Navolato',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1925,
        'state_id'=>26,
        'key'=>'001',
        'name'=>'Aconchi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1926,
        'state_id'=>26,
        'key'=>'002',
        'name'=>'Agua Prieta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1927,
        'state_id'=>26,
        'key'=>'003',
        'name'=>'Alamos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1928,
        'state_id'=>26,
        'key'=>'004',
        'name'=>'Altar',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1929,
        'state_id'=>26,
        'key'=>'005',
        'name'=>'Arivechi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1930,
        'state_id'=>26,
        'key'=>'006',
        'name'=>'Arizpe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1931,
        'state_id'=>26,
        'key'=>'007',
        'name'=>'Atil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1932,
        'state_id'=>26,
        'key'=>'008',
        'name'=>'Bacadéhuachi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1933,
        'state_id'=>26,
        'key'=>'009',
        'name'=>'Bacanora',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1934,
        'state_id'=>26,
        'key'=>'010',
        'name'=>'Bacerac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1935,
        'state_id'=>26,
        'key'=>'011',
        'name'=>'Bacoachi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1936,
        'state_id'=>26,
        'key'=>'012',
        'name'=>'Bácum',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1937,
        'state_id'=>26,
        'key'=>'013',
        'name'=>'Banámichi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1938,
        'state_id'=>26,
        'key'=>'014',
        'name'=>'Baviácora',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1939,
        'state_id'=>26,
        'key'=>'015',
        'name'=>'Bavispe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1940,
        'state_id'=>26,
        'key'=>'016',
        'name'=>'Benjamín Hill',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1941,
        'state_id'=>26,
        'key'=>'017',
        'name'=>'Caborca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1942,
        'state_id'=>26,
        'key'=>'018',
        'name'=>'Cajeme',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1943,
        'state_id'=>26,
        'key'=>'019',
        'name'=>'Cananea',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1944,
        'state_id'=>26,
        'key'=>'020',
        'name'=>'Carbó',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1945,
        'state_id'=>26,
        'key'=>'021',
        'name'=>'La Colorada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1946,
        'state_id'=>26,
        'key'=>'022',
        'name'=>'Cucurpe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1947,
        'state_id'=>26,
        'key'=>'023',
        'name'=>'Cumpas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1948,
        'state_id'=>26,
        'key'=>'024',
        'name'=>'Divisaderos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1949,
        'state_id'=>26,
        'key'=>'025',
        'name'=>'Empalme',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1950,
        'state_id'=>26,
        'key'=>'026',
        'name'=>'Etchojoa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1951,
        'state_id'=>26,
        'key'=>'027',
        'name'=>'Fronteras',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1952,
        'state_id'=>26,
        'key'=>'028',
        'name'=>'Granados',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1953,
        'state_id'=>26,
        'key'=>'029',
        'name'=>'Guaymas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1954,
        'state_id'=>26,
        'key'=>'030',
        'name'=>'Hermosillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1955,
        'state_id'=>26,
        'key'=>'031',
        'name'=>'Huachinera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1956,
        'state_id'=>26,
        'key'=>'032',
        'name'=>'Huásabas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1957,
        'state_id'=>26,
        'key'=>'033',
        'name'=>'Huatabampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1958,
        'state_id'=>26,
        'key'=>'034',
        'name'=>'Huépac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1959,
        'state_id'=>26,
        'key'=>'035',
        'name'=>'Imuris',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1960,
        'state_id'=>26,
        'key'=>'036',
        'name'=>'Magdalena',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1961,
        'state_id'=>26,
        'key'=>'037',
        'name'=>'Mazatán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1962,
        'state_id'=>26,
        'key'=>'038',
        'name'=>'Moctezuma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1963,
        'state_id'=>26,
        'key'=>'039',
        'name'=>'Naco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1964,
        'state_id'=>26,
        'key'=>'040',
        'name'=>'Nácori Chico',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1965,
        'state_id'=>26,
        'key'=>'041',
        'name'=>'Nacozari de García',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1966,
        'state_id'=>26,
        'key'=>'042',
        'name'=>'Navojoa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1967,
        'state_id'=>26,
        'key'=>'043',
        'name'=>'Nogales',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1968,
        'state_id'=>26,
        'key'=>'044',
        'name'=>'Onavas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1969,
        'state_id'=>26,
        'key'=>'045',
        'name'=>'Opodepe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1970,
        'state_id'=>26,
        'key'=>'046',
        'name'=>'Oquitoa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1971,
        'state_id'=>26,
        'key'=>'047',
        'name'=>'Pitiquito',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1972,
        'state_id'=>26,
        'key'=>'048',
        'name'=>'Puerto Peñasco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1973,
        'state_id'=>26,
        'key'=>'049',
        'name'=>'Quiriego',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1974,
        'state_id'=>26,
        'key'=>'050',
        'name'=>'Rayón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1975,
        'state_id'=>26,
        'key'=>'051',
        'name'=>'Rosario',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1976,
        'state_id'=>26,
        'key'=>'052',
        'name'=>'Sahuaripa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1977,
        'state_id'=>26,
        'key'=>'053',
        'name'=>'San Felipe de Jesús',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1978,
        'state_id'=>26,
        'key'=>'054',
        'name'=>'San Javier',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1979,
        'state_id'=>26,
        'key'=>'055',
        'name'=>'San Luis Río Colorado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1980,
        'state_id'=>26,
        'key'=>'056',
        'name'=>'San Miguel de Horcasitas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1981,
        'state_id'=>26,
        'key'=>'057',
        'name'=>'San Pedro de la Cueva',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1982,
        'state_id'=>26,
        'key'=>'058',
        'name'=>'Santa Ana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1983,
        'state_id'=>26,
        'key'=>'059',
        'name'=>'Santa Cruz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1984,
        'state_id'=>26,
        'key'=>'060',
        'name'=>'Sáric',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1985,
        'state_id'=>26,
        'key'=>'061',
        'name'=>'Soyopa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1986,
        'state_id'=>26,
        'key'=>'062',
        'name'=>'Suaqui Grande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1987,
        'state_id'=>26,
        'key'=>'063',
        'name'=>'Tepache',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1988,
        'state_id'=>26,
        'key'=>'064',
        'name'=>'Trincheras',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1989,
        'state_id'=>26,
        'key'=>'065',
        'name'=>'Tubutama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1990,
        'state_id'=>26,
        'key'=>'066',
        'name'=>'Ures',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1991,
        'state_id'=>26,
        'key'=>'067',
        'name'=>'Villa Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1992,
        'state_id'=>26,
        'key'=>'068',
        'name'=>'Villa Pesqueira',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1993,
        'state_id'=>26,
        'key'=>'069',
        'name'=>'Yécora',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1994,
        'state_id'=>26,
        'key'=>'070',
        'name'=>'General Plutarco Elías Calles',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1995,
        'state_id'=>26,
        'key'=>'071',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1996,
        'state_id'=>26,
        'key'=>'072',
        'name'=>'San Ignacio Río Muerto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1997,
        'state_id'=>27,
        'key'=>'001',
        'name'=>'Balancán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1998,
        'state_id'=>27,
        'key'=>'002',
        'name'=>'Cárdenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>1999,
        'state_id'=>27,
        'key'=>'003',
        'name'=>'Centla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2000,
        'state_id'=>27,
        'key'=>'004',
        'name'=>'Centro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2001,
        'state_id'=>27,
        'key'=>'005',
        'name'=>'Comalcalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2002,
        'state_id'=>27,
        'key'=>'006',
        'name'=>'Cunduacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2003,
        'state_id'=>27,
        'key'=>'007',
        'name'=>'Emiliano Zapata',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2004,
        'state_id'=>27,
        'key'=>'008',
        'name'=>'Huimanguillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2005,
        'state_id'=>27,
        'key'=>'009',
        'name'=>'Jalapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2006,
        'state_id'=>27,
        'key'=>'010',
        'name'=>'Jalpa de Méndez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2007,
        'state_id'=>27,
        'key'=>'011',
        'name'=>'Jonuta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2008,
        'state_id'=>27,
        'key'=>'012',
        'name'=>'Macuspana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2009,
        'state_id'=>27,
        'key'=>'013',
        'name'=>'Nacajuca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2010,
        'state_id'=>27,
        'key'=>'014',
        'name'=>'Paraíso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2011,
        'state_id'=>27,
        'key'=>'015',
        'name'=>'Tacotalpa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2012,
        'state_id'=>27,
        'key'=>'016',
        'name'=>'Teapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2013,
        'state_id'=>27,
        'key'=>'017',
        'name'=>'Tenosique',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2014,
        'state_id'=>28,
        'key'=>'001',
        'name'=>'Abasolo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2015,
        'state_id'=>28,
        'key'=>'002',
        'name'=>'Aldama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2016,
        'state_id'=>28,
        'key'=>'003',
        'name'=>'Altamira',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2017,
        'state_id'=>28,
        'key'=>'004',
        'name'=>'Antiguo Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2018,
        'state_id'=>28,
        'key'=>'005',
        'name'=>'Burgos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2019,
        'state_id'=>28,
        'key'=>'006',
        'name'=>'Bustamante',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2020,
        'state_id'=>28,
        'key'=>'007',
        'name'=>'Camargo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2021,
        'state_id'=>28,
        'key'=>'008',
        'name'=>'Casas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2022,
        'state_id'=>28,
        'key'=>'009',
        'name'=>'Ciudad Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2023,
        'state_id'=>28,
        'key'=>'010',
        'name'=>'Cruillas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2024,
        'state_id'=>28,
        'key'=>'011',
        'name'=>'Gómez Farías',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2025,
        'state_id'=>28,
        'key'=>'012',
        'name'=>'González',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2026,
        'state_id'=>28,
        'key'=>'013',
        'name'=>'Güémez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2027,
        'state_id'=>28,
        'key'=>'014',
        'name'=>'Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2028,
        'state_id'=>28,
        'key'=>'015',
        'name'=>'Gustavo Díaz Ordaz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2029,
        'state_id'=>28,
        'key'=>'016',
        'name'=>'Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2030,
        'state_id'=>28,
        'key'=>'017',
        'name'=>'Jaumave',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2031,
        'state_id'=>28,
        'key'=>'018',
        'name'=>'Jiménez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2032,
        'state_id'=>28,
        'key'=>'019',
        'name'=>'Llera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2033,
        'state_id'=>28,
        'key'=>'020',
        'name'=>'Mainero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2034,
        'state_id'=>28,
        'key'=>'021',
        'name'=>'El Mante',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2035,
        'state_id'=>28,
        'key'=>'022',
        'name'=>'Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2036,
        'state_id'=>28,
        'key'=>'023',
        'name'=>'Méndez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2037,
        'state_id'=>28,
        'key'=>'024',
        'name'=>'Mier',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2038,
        'state_id'=>28,
        'key'=>'025',
        'name'=>'Miguel Alemán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2039,
        'state_id'=>28,
        'key'=>'026',
        'name'=>'Miquihuana',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2040,
        'state_id'=>28,
        'key'=>'027',
        'name'=>'Nuevo Laredo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2041,
        'state_id'=>28,
        'key'=>'028',
        'name'=>'Nuevo Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2042,
        'state_id'=>28,
        'key'=>'029',
        'name'=>'Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2043,
        'state_id'=>28,
        'key'=>'030',
        'name'=>'Padilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2044,
        'state_id'=>28,
        'key'=>'031',
        'name'=>'Palmillas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2045,
        'state_id'=>28,
        'key'=>'032',
        'name'=>'Reynosa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2046,
        'state_id'=>28,
        'key'=>'033',
        'name'=>'Río Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2047,
        'state_id'=>28,
        'key'=>'034',
        'name'=>'San Carlos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2048,
        'state_id'=>28,
        'key'=>'035',
        'name'=>'San Fernando',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2049,
        'state_id'=>28,
        'key'=>'036',
        'name'=>'San Nicolás',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2050,
        'state_id'=>28,
        'key'=>'037',
        'name'=>'Soto la Marina',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2051,
        'state_id'=>28,
        'key'=>'038',
        'name'=>'Tampico',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2052,
        'state_id'=>28,
        'key'=>'039',
        'name'=>'Tula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2053,
        'state_id'=>28,
        'key'=>'040',
        'name'=>'Valle Hermoso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2054,
        'state_id'=>28,
        'key'=>'041',
        'name'=>'Victoria',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2055,
        'state_id'=>28,
        'key'=>'042',
        'name'=>'Villagrán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2056,
        'state_id'=>28,
        'key'=>'043',
        'name'=>'Xicoténcatl',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2057,
        'state_id'=>29,
        'key'=>'001',
        'name'=>'Amaxac de Guerrero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2058,
        'state_id'=>29,
        'key'=>'002',
        'name'=>'Apetatitlán de Antonio Carvajal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2059,
        'state_id'=>29,
        'key'=>'003',
        'name'=>'Atlangatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2060,
        'state_id'=>29,
        'key'=>'004',
        'name'=>'Atltzayanca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2061,
        'state_id'=>29,
        'key'=>'005',
        'name'=>'Apizaco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2062,
        'state_id'=>29,
        'key'=>'006',
        'name'=>'Calpulalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2063,
        'state_id'=>29,
        'key'=>'007',
        'name'=>'El Carmen Tequexquitla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2064,
        'state_id'=>29,
        'key'=>'008',
        'name'=>'Cuapiaxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2065,
        'state_id'=>29,
        'key'=>'009',
        'name'=>'Cuaxomulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2066,
        'state_id'=>29,
        'key'=>'010',
        'name'=>'Chiautempan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2067,
        'state_id'=>29,
        'key'=>'011',
        'name'=>'Muñoz de Domingo Arenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2068,
        'state_id'=>29,
        'key'=>'012',
        'name'=>'Españita',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2069,
        'state_id'=>29,
        'key'=>'013',
        'name'=>'Huamantla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2070,
        'state_id'=>29,
        'key'=>'014',
        'name'=>'Hueyotlipan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2071,
        'state_id'=>29,
        'key'=>'015',
        'name'=>'Ixtacuixtla de Mariano Matamoros',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2072,
        'state_id'=>29,
        'key'=>'016',
        'name'=>'Ixtenco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2073,
        'state_id'=>29,
        'key'=>'017',
        'name'=>'Mazatecochco de José María Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2074,
        'state_id'=>29,
        'key'=>'018',
        'name'=>'Contla de Juan Cuamatzi',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2075,
        'state_id'=>29,
        'key'=>'019',
        'name'=>'Tepetitla de Lardizábal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2076,
        'state_id'=>29,
        'key'=>'020',
        'name'=>'Sanctórum de Lázaro Cárdenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2077,
        'state_id'=>29,
        'key'=>'021',
        'name'=>'Nanacamilpa de Mariano Arista',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2078,
        'state_id'=>29,
        'key'=>'022',
        'name'=>'Acuamanala de Miguel Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2079,
        'state_id'=>29,
        'key'=>'023',
        'name'=>'Natívitas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2080,
        'state_id'=>29,
        'key'=>'024',
        'name'=>'Panotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2081,
        'state_id'=>29,
        'key'=>'025',
        'name'=>'San Pablo del Monte',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2082,
        'state_id'=>29,
        'key'=>'026',
        'name'=>'Santa Cruz Tlaxcala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2083,
        'state_id'=>29,
        'key'=>'027',
        'name'=>'Tenancingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2084,
        'state_id'=>29,
        'key'=>'028',
        'name'=>'Teolocholco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2085,
        'state_id'=>29,
        'key'=>'029',
        'name'=>'Tepeyanco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2086,
        'state_id'=>29,
        'key'=>'030',
        'name'=>'Terrenate',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2087,
        'state_id'=>29,
        'key'=>'031',
        'name'=>'Tetla de la Solidaridad',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2088,
        'state_id'=>29,
        'key'=>'032',
        'name'=>'Tetlatlahuca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2089,
        'state_id'=>29,
        'key'=>'033',
        'name'=>'Tlaxcala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2090,
        'state_id'=>29,
        'key'=>'034',
        'name'=>'Tlaxco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2091,
        'state_id'=>29,
        'key'=>'035',
        'name'=>'Tocatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2092,
        'state_id'=>29,
        'key'=>'036',
        'name'=>'Totolac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2093,
        'state_id'=>29,
        'key'=>'037',
        'name'=>'Ziltlaltépec de Trinidad Sánchez Santos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2094,
        'state_id'=>29,
        'key'=>'038',
        'name'=>'Tzompantepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2095,
        'state_id'=>29,
        'key'=>'039',
        'name'=>'Xaloztoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2096,
        'state_id'=>29,
        'key'=>'040',
        'name'=>'Xaltocan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2097,
        'state_id'=>29,
        'key'=>'041',
        'name'=>'Papalotla de Xicohténcatl',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2098,
        'state_id'=>29,
        'key'=>'042',
        'name'=>'Xicohtzinco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2099,
        'state_id'=>29,
        'key'=>'043',
        'name'=>'Yauhquemehcan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2100,
        'state_id'=>29,
        'key'=>'044',
        'name'=>'Zacatelco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2101,
        'state_id'=>29,
        'key'=>'045',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2102,
        'state_id'=>29,
        'key'=>'046',
        'name'=>'Emiliano Zapata',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2103,
        'state_id'=>29,
        'key'=>'047',
        'name'=>'Lázaro Cárdenas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2104,
        'state_id'=>29,
        'key'=>'048',
        'name'=>'La Magdalena Tlaltelulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2105,
        'state_id'=>29,
        'key'=>'049',
        'name'=>'San Damián Texóloc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2106,
        'state_id'=>29,
        'key'=>'050',
        'name'=>'San Francisco Tetlanohcan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2107,
        'state_id'=>29,
        'key'=>'051',
        'name'=>'San Jerónimo Zacualpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2108,
        'state_id'=>29,
        'key'=>'052',
        'name'=>'San José Teacalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2109,
        'state_id'=>29,
        'key'=>'053',
        'name'=>'San Juan Huactzinco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2110,
        'state_id'=>29,
        'key'=>'054',
        'name'=>'San Lorenzo Axocomanitla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2111,
        'state_id'=>29,
        'key'=>'055',
        'name'=>'San Lucas Tecopilco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2112,
        'state_id'=>29,
        'key'=>'056',
        'name'=>'Santa Ana Nopalucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2113,
        'state_id'=>29,
        'key'=>'057',
        'name'=>'Santa Apolonia Teacalco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2114,
        'state_id'=>29,
        'key'=>'058',
        'name'=>'Santa Catarina Ayometla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2115,
        'state_id'=>29,
        'key'=>'059',
        'name'=>'Santa Cruz Quilehtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2116,
        'state_id'=>29,
        'key'=>'060',
        'name'=>'Santa Isabel Xiloxoxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2117,
        'state_id'=>30,
        'key'=>'001',
        'name'=>'Acajete',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2118,
        'state_id'=>30,
        'key'=>'002',
        'name'=>'Acatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2119,
        'state_id'=>30,
        'key'=>'003',
        'name'=>'Acayucan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2120,
        'state_id'=>30,
        'key'=>'004',
        'name'=>'Actopan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2121,
        'state_id'=>30,
        'key'=>'005',
        'name'=>'Acula',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2122,
        'state_id'=>30,
        'key'=>'006',
        'name'=>'Acultzingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2123,
        'state_id'=>30,
        'key'=>'007',
        'name'=>'Camarón de Tejeda',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2124,
        'state_id'=>30,
        'key'=>'008',
        'name'=>'Alpatláhuac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2125,
        'state_id'=>30,
        'key'=>'009',
        'name'=>'Alto Lucero de Gutiérrez Barrios',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2126,
        'state_id'=>30,
        'key'=>'010',
        'name'=>'Altotonga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2127,
        'state_id'=>30,
        'key'=>'011',
        'name'=>'Alvarado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2128,
        'state_id'=>30,
        'key'=>'012',
        'name'=>'Amatitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2129,
        'state_id'=>30,
        'key'=>'013',
        'name'=>'Naranjos Amatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2130,
        'state_id'=>30,
        'key'=>'014',
        'name'=>'Amatlán de los Reyes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2131,
        'state_id'=>30,
        'key'=>'015',
        'name'=>'Angel R. Cabada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2132,
        'state_id'=>30,
        'key'=>'016',
        'name'=>'La Antigua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2133,
        'state_id'=>30,
        'key'=>'017',
        'name'=>'Apazapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2134,
        'state_id'=>30,
        'key'=>'018',
        'name'=>'Aquila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2135,
        'state_id'=>30,
        'key'=>'019',
        'name'=>'Astacinga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2136,
        'state_id'=>30,
        'key'=>'020',
        'name'=>'Atlahuilco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2137,
        'state_id'=>30,
        'key'=>'021',
        'name'=>'Atoyac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2138,
        'state_id'=>30,
        'key'=>'022',
        'name'=>'Atzacan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2139,
        'state_id'=>30,
        'key'=>'023',
        'name'=>'Atzalan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2140,
        'state_id'=>30,
        'key'=>'024',
        'name'=>'Tlaltetela',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2141,
        'state_id'=>30,
        'key'=>'025',
        'name'=>'Ayahualulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2142,
        'state_id'=>30,
        'key'=>'026',
        'name'=>'Banderilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2143,
        'state_id'=>30,
        'key'=>'027',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2144,
        'state_id'=>30,
        'key'=>'028',
        'name'=>'Boca del Río',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2145,
        'state_id'=>30,
        'key'=>'029',
        'name'=>'Calcahualco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2146,
        'state_id'=>30,
        'key'=>'030',
        'name'=>'Camerino Z. Mendoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2147,
        'state_id'=>30,
        'key'=>'031',
        'name'=>'Carrillo Puerto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2148,
        'state_id'=>30,
        'key'=>'032',
        'name'=>'Catemaco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2149,
        'state_id'=>30,
        'key'=>'033',
        'name'=>'Cazones de Herrera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2150,
        'state_id'=>30,
        'key'=>'034',
        'name'=>'Cerro Azul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2151,
        'state_id'=>30,
        'key'=>'035',
        'name'=>'Citlaltépetl',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2152,
        'state_id'=>30,
        'key'=>'036',
        'name'=>'Coacoatzintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2153,
        'state_id'=>30,
        'key'=>'037',
        'name'=>'Coahuitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2154,
        'state_id'=>30,
        'key'=>'038',
        'name'=>'Coatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2155,
        'state_id'=>30,
        'key'=>'039',
        'name'=>'Coatzacoalcos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2156,
        'state_id'=>30,
        'key'=>'040',
        'name'=>'Coatzintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2157,
        'state_id'=>30,
        'key'=>'041',
        'name'=>'Coetzala',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2158,
        'state_id'=>30,
        'key'=>'042',
        'name'=>'Colipa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2159,
        'state_id'=>30,
        'key'=>'043',
        'name'=>'Comapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2160,
        'state_id'=>30,
        'key'=>'044',
        'name'=>'Córdoba',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2161,
        'state_id'=>30,
        'key'=>'045',
        'name'=>'Cosamaloapan de Carpio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2162,
        'state_id'=>30,
        'key'=>'046',
        'name'=>'Cosautlán de Carvajal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2163,
        'state_id'=>30,
        'key'=>'047',
        'name'=>'Coscomatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2164,
        'state_id'=>30,
        'key'=>'048',
        'name'=>'Cosoleacaque',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2165,
        'state_id'=>30,
        'key'=>'049',
        'name'=>'Cotaxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2166,
        'state_id'=>30,
        'key'=>'050',
        'name'=>'Coxquihui',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2167,
        'state_id'=>30,
        'key'=>'051',
        'name'=>'Coyutla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2168,
        'state_id'=>30,
        'key'=>'052',
        'name'=>'Cuichapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2169,
        'state_id'=>30,
        'key'=>'053',
        'name'=>'Cuitláhuac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2170,
        'state_id'=>30,
        'key'=>'054',
        'name'=>'Chacaltianguis',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2171,
        'state_id'=>30,
        'key'=>'055',
        'name'=>'Chalma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2172,
        'state_id'=>30,
        'key'=>'056',
        'name'=>'Chiconamel',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2173,
        'state_id'=>30,
        'key'=>'057',
        'name'=>'Chiconquiaco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2174,
        'state_id'=>30,
        'key'=>'058',
        'name'=>'Chicontepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2175,
        'state_id'=>30,
        'key'=>'059',
        'name'=>'Chinameca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2176,
        'state_id'=>30,
        'key'=>'060',
        'name'=>'Chinampa de Gorostiza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2177,
        'state_id'=>30,
        'key'=>'061',
        'name'=>'Las Choapas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2178,
        'state_id'=>30,
        'key'=>'062',
        'name'=>'Chocamán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2179,
        'state_id'=>30,
        'key'=>'063',
        'name'=>'Chontla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2180,
        'state_id'=>30,
        'key'=>'064',
        'name'=>'Chumatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2181,
        'state_id'=>30,
        'key'=>'065',
        'name'=>'Emiliano Zapata',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2182,
        'state_id'=>30,
        'key'=>'066',
        'name'=>'Espinal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2183,
        'state_id'=>30,
        'key'=>'067',
        'name'=>'Filomeno Mata',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2184,
        'state_id'=>30,
        'key'=>'068',
        'name'=>'Fortín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2185,
        'state_id'=>30,
        'key'=>'069',
        'name'=>'Gutiérrez Zamora',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2186,
        'state_id'=>30,
        'key'=>'070',
        'name'=>'Hidalgotitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2187,
        'state_id'=>30,
        'key'=>'071',
        'name'=>'Huatusco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2188,
        'state_id'=>30,
        'key'=>'072',
        'name'=>'Huayacocotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2189,
        'state_id'=>30,
        'key'=>'073',
        'name'=>'Hueyapan de Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2190,
        'state_id'=>30,
        'key'=>'074',
        'name'=>'Huiloapan de Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2191,
        'state_id'=>30,
        'key'=>'075',
        'name'=>'Ignacio de la Llave',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2192,
        'state_id'=>30,
        'key'=>'076',
        'name'=>'Ilamatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2193,
        'state_id'=>30,
        'key'=>'077',
        'name'=>'Isla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2194,
        'state_id'=>30,
        'key'=>'078',
        'name'=>'Ixcatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2195,
        'state_id'=>30,
        'key'=>'079',
        'name'=>'Ixhuacán de los Reyes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2196,
        'state_id'=>30,
        'key'=>'080',
        'name'=>'Ixhuatlán del Café',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2197,
        'state_id'=>30,
        'key'=>'081',
        'name'=>'Ixhuatlancillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2198,
        'state_id'=>30,
        'key'=>'082',
        'name'=>'Ixhuatlán del Sureste',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2199,
        'state_id'=>30,
        'key'=>'083',
        'name'=>'Ixhuatlán de Madero',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2200,
        'state_id'=>30,
        'key'=>'084',
        'name'=>'Ixmatlahuacan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2201,
        'state_id'=>30,
        'key'=>'085',
        'name'=>'Ixtaczoquitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2202,
        'state_id'=>30,
        'key'=>'086',
        'name'=>'Jalacingo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2203,
        'state_id'=>30,
        'key'=>'087',
        'name'=>'Xalapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2204,
        'state_id'=>30,
        'key'=>'088',
        'name'=>'Jalcomulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2205,
        'state_id'=>30,
        'key'=>'089',
        'name'=>'Jáltipan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2206,
        'state_id'=>30,
        'key'=>'090',
        'name'=>'Jamapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2207,
        'state_id'=>30,
        'key'=>'091',
        'name'=>'Jesús Carranza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2208,
        'state_id'=>30,
        'key'=>'092',
        'name'=>'Xico',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2209,
        'state_id'=>30,
        'key'=>'093',
        'name'=>'Jilotepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2210,
        'state_id'=>30,
        'key'=>'094',
        'name'=>'Juan Rodríguez Clara',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2211,
        'state_id'=>30,
        'key'=>'095',
        'name'=>'Juchique de Ferrer',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2212,
        'state_id'=>30,
        'key'=>'096',
        'name'=>'Landero y Coss',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2213,
        'state_id'=>30,
        'key'=>'097',
        'name'=>'Lerdo de Tejada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2214,
        'state_id'=>30,
        'key'=>'098',
        'name'=>'Magdalena',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2215,
        'state_id'=>30,
        'key'=>'099',
        'name'=>'Maltrata',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2216,
        'state_id'=>30,
        'key'=>'100',
        'name'=>'Manlio Fabio Altamirano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2217,
        'state_id'=>30,
        'key'=>'101',
        'name'=>'Mariano Escobedo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2218,
        'state_id'=>30,
        'key'=>'102',
        'name'=>'Martínez de la Torre',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2219,
        'state_id'=>30,
        'key'=>'103',
        'name'=>'Mecatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2220,
        'state_id'=>30,
        'key'=>'104',
        'name'=>'Mecayapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2221,
        'state_id'=>30,
        'key'=>'105',
        'name'=>'Medellín de Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2222,
        'state_id'=>30,
        'key'=>'106',
        'name'=>'Miahuatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2223,
        'state_id'=>30,
        'key'=>'107',
        'name'=>'Las Minas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2224,
        'state_id'=>30,
        'key'=>'108',
        'name'=>'Minatitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2225,
        'state_id'=>30,
        'key'=>'109',
        'name'=>'Misantla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2226,
        'state_id'=>30,
        'key'=>'110',
        'name'=>'Mixtla de Altamirano',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2227,
        'state_id'=>30,
        'key'=>'111',
        'name'=>'Moloacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2228,
        'state_id'=>30,
        'key'=>'112',
        'name'=>'Naolinco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2229,
        'state_id'=>30,
        'key'=>'113',
        'name'=>'Naranjal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2230,
        'state_id'=>30,
        'key'=>'114',
        'name'=>'Nautla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2231,
        'state_id'=>30,
        'key'=>'115',
        'name'=>'Nogales',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2232,
        'state_id'=>30,
        'key'=>'116',
        'name'=>'Oluta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2233,
        'state_id'=>30,
        'key'=>'117',
        'name'=>'Omealca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2234,
        'state_id'=>30,
        'key'=>'118',
        'name'=>'Orizaba',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2235,
        'state_id'=>30,
        'key'=>'119',
        'name'=>'Otatitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2236,
        'state_id'=>30,
        'key'=>'120',
        'name'=>'Oteapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2237,
        'state_id'=>30,
        'key'=>'121',
        'name'=>'Ozuluama de Mascareñas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2238,
        'state_id'=>30,
        'key'=>'122',
        'name'=>'Pajapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2239,
        'state_id'=>30,
        'key'=>'123',
        'name'=>'Pánuco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2240,
        'state_id'=>30,
        'key'=>'124',
        'name'=>'Papantla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2241,
        'state_id'=>30,
        'key'=>'125',
        'name'=>'Paso del Macho',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2242,
        'state_id'=>30,
        'key'=>'126',
        'name'=>'Paso de Ovejas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2243,
        'state_id'=>30,
        'key'=>'127',
        'name'=>'La Perla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2244,
        'state_id'=>30,
        'key'=>'128',
        'name'=>'Perote',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2245,
        'state_id'=>30,
        'key'=>'129',
        'name'=>'Platón Sánchez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2246,
        'state_id'=>30,
        'key'=>'130',
        'name'=>'Playa Vicente',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2247,
        'state_id'=>30,
        'key'=>'131',
        'name'=>'Poza Rica de Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2248,
        'state_id'=>30,
        'key'=>'132',
        'name'=>'Las Vigas de Ramírez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2249,
        'state_id'=>30,
        'key'=>'133',
        'name'=>'Pueblo Viejo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2250,
        'state_id'=>30,
        'key'=>'134',
        'name'=>'Puente Nacional',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2251,
        'state_id'=>30,
        'key'=>'135',
        'name'=>'Rafael Delgado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2252,
        'state_id'=>30,
        'key'=>'136',
        'name'=>'Rafael Lucio',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2253,
        'state_id'=>30,
        'key'=>'137',
        'name'=>'Los Reyes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2254,
        'state_id'=>30,
        'key'=>'138',
        'name'=>'Río Blanco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2255,
        'state_id'=>30,
        'key'=>'139',
        'name'=>'Saltabarranca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2256,
        'state_id'=>30,
        'key'=>'140',
        'name'=>'San Andrés Tenejapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2257,
        'state_id'=>30,
        'key'=>'141',
        'name'=>'San Andrés Tuxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2258,
        'state_id'=>30,
        'key'=>'142',
        'name'=>'San Juan Evangelista',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2259,
        'state_id'=>30,
        'key'=>'143',
        'name'=>'Santiago Tuxtla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2260,
        'state_id'=>30,
        'key'=>'144',
        'name'=>'Sayula de Alemán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2261,
        'state_id'=>30,
        'key'=>'145',
        'name'=>'Soconusco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2262,
        'state_id'=>30,
        'key'=>'146',
        'name'=>'Sochiapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2263,
        'state_id'=>30,
        'key'=>'147',
        'name'=>'Soledad Atzompa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2264,
        'state_id'=>30,
        'key'=>'148',
        'name'=>'Soledad de Doblado',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2265,
        'state_id'=>30,
        'key'=>'149',
        'name'=>'Soteapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2266,
        'state_id'=>30,
        'key'=>'150',
        'name'=>'Tamalín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2267,
        'state_id'=>30,
        'key'=>'151',
        'name'=>'Tamiahua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2268,
        'state_id'=>30,
        'key'=>'152',
        'name'=>'Tampico Alto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2269,
        'state_id'=>30,
        'key'=>'153',
        'name'=>'Tancoco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2270,
        'state_id'=>30,
        'key'=>'154',
        'name'=>'Tantima',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2271,
        'state_id'=>30,
        'key'=>'155',
        'name'=>'Tantoyuca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2272,
        'state_id'=>30,
        'key'=>'156',
        'name'=>'Tatatila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2273,
        'state_id'=>30,
        'key'=>'157',
        'name'=>'Castillo de Teayo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2274,
        'state_id'=>30,
        'key'=>'158',
        'name'=>'Tecolutla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2275,
        'state_id'=>30,
        'key'=>'159',
        'name'=>'Tehuipango',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2276,
        'state_id'=>30,
        'key'=>'160',
        'name'=>'Álamo Temapache',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2277,
        'state_id'=>30,
        'key'=>'161',
        'name'=>'Tempoal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2278,
        'state_id'=>30,
        'key'=>'162',
        'name'=>'Tenampa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2279,
        'state_id'=>30,
        'key'=>'163',
        'name'=>'Tenochtitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2280,
        'state_id'=>30,
        'key'=>'164',
        'name'=>'Teocelo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2281,
        'state_id'=>30,
        'key'=>'165',
        'name'=>'Tepatlaxco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2282,
        'state_id'=>30,
        'key'=>'166',
        'name'=>'Tepetlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2283,
        'state_id'=>30,
        'key'=>'167',
        'name'=>'Tepetzintla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2284,
        'state_id'=>30,
        'key'=>'168',
        'name'=>'Tequila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2285,
        'state_id'=>30,
        'key'=>'169',
        'name'=>'José Azueta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2286,
        'state_id'=>30,
        'key'=>'170',
        'name'=>'Texcatepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2287,
        'state_id'=>30,
        'key'=>'171',
        'name'=>'Texhuacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2288,
        'state_id'=>30,
        'key'=>'172',
        'name'=>'Texistepec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2289,
        'state_id'=>30,
        'key'=>'173',
        'name'=>'Tezonapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2290,
        'state_id'=>30,
        'key'=>'174',
        'name'=>'Tierra Blanca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2291,
        'state_id'=>30,
        'key'=>'175',
        'name'=>'Tihuatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2292,
        'state_id'=>30,
        'key'=>'176',
        'name'=>'Tlacojalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2293,
        'state_id'=>30,
        'key'=>'177',
        'name'=>'Tlacolulan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2294,
        'state_id'=>30,
        'key'=>'178',
        'name'=>'Tlacotalpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2295,
        'state_id'=>30,
        'key'=>'179',
        'name'=>'Tlacotepec de Mejía',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2296,
        'state_id'=>30,
        'key'=>'180',
        'name'=>'Tlachichilco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2297,
        'state_id'=>30,
        'key'=>'181',
        'name'=>'Tlalixcoyan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2298,
        'state_id'=>30,
        'key'=>'182',
        'name'=>'Tlalnelhuayocan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2299,
        'state_id'=>30,
        'key'=>'183',
        'name'=>'Tlapacoyan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2300,
        'state_id'=>30,
        'key'=>'184',
        'name'=>'Tlaquilpa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2301,
        'state_id'=>30,
        'key'=>'185',
        'name'=>'Tlilapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2302,
        'state_id'=>30,
        'key'=>'186',
        'name'=>'Tomatlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2303,
        'state_id'=>30,
        'key'=>'187',
        'name'=>'Tonayán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2304,
        'state_id'=>30,
        'key'=>'188',
        'name'=>'Totutla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2305,
        'state_id'=>30,
        'key'=>'189',
        'name'=>'Tuxpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2306,
        'state_id'=>30,
        'key'=>'190',
        'name'=>'Tuxtilla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2307,
        'state_id'=>30,
        'key'=>'191',
        'name'=>'Ursulo Galván',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2308,
        'state_id'=>30,
        'key'=>'192',
        'name'=>'Vega de Alatorre',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2309,
        'state_id'=>30,
        'key'=>'193',
        'name'=>'Veracruz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2310,
        'state_id'=>30,
        'key'=>'194',
        'name'=>'Villa Aldama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2311,
        'state_id'=>30,
        'key'=>'195',
        'name'=>'Xoxocotla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2312,
        'state_id'=>30,
        'key'=>'196',
        'name'=>'Yanga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2313,
        'state_id'=>30,
        'key'=>'197',
        'name'=>'Yecuatla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2314,
        'state_id'=>30,
        'key'=>'198',
        'name'=>'Zacualpan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2315,
        'state_id'=>30,
        'key'=>'199',
        'name'=>'Zaragoza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2316,
        'state_id'=>30,
        'key'=>'200',
        'name'=>'Zentla',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2317,
        'state_id'=>30,
        'key'=>'201',
        'name'=>'Zongolica',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2318,
        'state_id'=>30,
        'key'=>'202',
        'name'=>'Zontecomatlán de López y Fuentes',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2319,
        'state_id'=>30,
        'key'=>'203',
        'name'=>'Zozocolco de Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2320,
        'state_id'=>30,
        'key'=>'204',
        'name'=>'Agua Dulce',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2321,
        'state_id'=>30,
        'key'=>'205',
        'name'=>'El Higo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2322,
        'state_id'=>30,
        'key'=>'206',
        'name'=>'Nanchital de Lázaro Cárdenas del Río',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2323,
        'state_id'=>30,
        'key'=>'207',
        'name'=>'Tres Valles',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2324,
        'state_id'=>30,
        'key'=>'208',
        'name'=>'Carlos A. Carrillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2325,
        'state_id'=>30,
        'key'=>'209',
        'name'=>'Tatahuicapan de Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2326,
        'state_id'=>30,
        'key'=>'210',
        'name'=>'Uxpanapa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2327,
        'state_id'=>30,
        'key'=>'211',
        'name'=>'San Rafael',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2328,
        'state_id'=>30,
        'key'=>'212',
        'name'=>'Santiago Sochiapan',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2329,
        'state_id'=>31,
        'key'=>'001',
        'name'=>'Abalá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2330,
        'state_id'=>31,
        'key'=>'002',
        'name'=>'Acanceh',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2331,
        'state_id'=>31,
        'key'=>'003',
        'name'=>'Akil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2332,
        'state_id'=>31,
        'key'=>'004',
        'name'=>'Baca',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2333,
        'state_id'=>31,
        'key'=>'005',
        'name'=>'Bokobá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2334,
        'state_id'=>31,
        'key'=>'006',
        'name'=>'Buctzotz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2335,
        'state_id'=>31,
        'key'=>'007',
        'name'=>'Cacalchén',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2336,
        'state_id'=>31,
        'key'=>'008',
        'name'=>'Calotmul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2337,
        'state_id'=>31,
        'key'=>'009',
        'name'=>'Cansahcab',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2338,
        'state_id'=>31,
        'key'=>'010',
        'name'=>'Cantamayec',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2339,
        'state_id'=>31,
        'key'=>'011',
        'name'=>'Celestún',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2340,
        'state_id'=>31,
        'key'=>'012',
        'name'=>'Cenotillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2341,
        'state_id'=>31,
        'key'=>'013',
        'name'=>'Conkal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2342,
        'state_id'=>31,
        'key'=>'014',
        'name'=>'Cuncunul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2343,
        'state_id'=>31,
        'key'=>'015',
        'name'=>'Cuzamá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2344,
        'state_id'=>31,
        'key'=>'016',
        'name'=>'Chacsinkín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2345,
        'state_id'=>31,
        'key'=>'017',
        'name'=>'Chankom',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2346,
        'state_id'=>31,
        'key'=>'018',
        'name'=>'Chapab',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2347,
        'state_id'=>31,
        'key'=>'019',
        'name'=>'Chemax',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2348,
        'state_id'=>31,
        'key'=>'020',
        'name'=>'Chicxulub Pueblo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2349,
        'state_id'=>31,
        'key'=>'021',
        'name'=>'Chichimilá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2350,
        'state_id'=>31,
        'key'=>'022',
        'name'=>'Chikindzonot',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2351,
        'state_id'=>31,
        'key'=>'023',
        'name'=>'Chocholá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2352,
        'state_id'=>31,
        'key'=>'024',
        'name'=>'Chumayel',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2353,
        'state_id'=>31,
        'key'=>'025',
        'name'=>'Dzán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2354,
        'state_id'=>31,
        'key'=>'026',
        'name'=>'Dzemul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2355,
        'state_id'=>31,
        'key'=>'027',
        'name'=>'Dzidzantún',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2356,
        'state_id'=>31,
        'key'=>'028',
        'name'=>'Dzilam de Bravo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2357,
        'state_id'=>31,
        'key'=>'029',
        'name'=>'Dzilam González',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2358,
        'state_id'=>31,
        'key'=>'030',
        'name'=>'Dzitás',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2359,
        'state_id'=>31,
        'key'=>'031',
        'name'=>'Dzoncauich',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2360,
        'state_id'=>31,
        'key'=>'032',
        'name'=>'Espita',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2361,
        'state_id'=>31,
        'key'=>'033',
        'name'=>'Halachó',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2362,
        'state_id'=>31,
        'key'=>'034',
        'name'=>'Hocabá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2363,
        'state_id'=>31,
        'key'=>'035',
        'name'=>'Hoctún',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2364,
        'state_id'=>31,
        'key'=>'036',
        'name'=>'Homún',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2365,
        'state_id'=>31,
        'key'=>'037',
        'name'=>'Huhí',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2366,
        'state_id'=>31,
        'key'=>'038',
        'name'=>'Hunucmá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2367,
        'state_id'=>31,
        'key'=>'039',
        'name'=>'Ixil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2368,
        'state_id'=>31,
        'key'=>'040',
        'name'=>'Izamal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2369,
        'state_id'=>31,
        'key'=>'041',
        'name'=>'Kanasín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2370,
        'state_id'=>31,
        'key'=>'042',
        'name'=>'Kantunil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2371,
        'state_id'=>31,
        'key'=>'043',
        'name'=>'Kaua',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2372,
        'state_id'=>31,
        'key'=>'044',
        'name'=>'Kinchil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2373,
        'state_id'=>31,
        'key'=>'045',
        'name'=>'Kopomá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2374,
        'state_id'=>31,
        'key'=>'046',
        'name'=>'Mama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2375,
        'state_id'=>31,
        'key'=>'047',
        'name'=>'Maní',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2376,
        'state_id'=>31,
        'key'=>'048',
        'name'=>'Maxcanú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2377,
        'state_id'=>31,
        'key'=>'049',
        'name'=>'Mayapán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2378,
        'state_id'=>31,
        'key'=>'050',
        'name'=>'Mérida',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2379,
        'state_id'=>31,
        'key'=>'051',
        'name'=>'Mocochá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2380,
        'state_id'=>31,
        'key'=>'052',
        'name'=>'Motul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2381,
        'state_id'=>31,
        'key'=>'053',
        'name'=>'Muna',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2382,
        'state_id'=>31,
        'key'=>'054',
        'name'=>'Muxupip',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2383,
        'state_id'=>31,
        'key'=>'055',
        'name'=>'Opichén',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2384,
        'state_id'=>31,
        'key'=>'056',
        'name'=>'Oxkutzcab',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2385,
        'state_id'=>31,
        'key'=>'057',
        'name'=>'Panabá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2386,
        'state_id'=>31,
        'key'=>'058',
        'name'=>'Peto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2387,
        'state_id'=>31,
        'key'=>'059',
        'name'=>'Progreso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2388,
        'state_id'=>31,
        'key'=>'060',
        'name'=>'Quintana Roo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2389,
        'state_id'=>31,
        'key'=>'061',
        'name'=>'Río Lagartos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2390,
        'state_id'=>31,
        'key'=>'062',
        'name'=>'Sacalum',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2391,
        'state_id'=>31,
        'key'=>'063',
        'name'=>'Samahil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2392,
        'state_id'=>31,
        'key'=>'064',
        'name'=>'Sanahcat',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2393,
        'state_id'=>31,
        'key'=>'065',
        'name'=>'San Felipe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2394,
        'state_id'=>31,
        'key'=>'066',
        'name'=>'Santa Elena',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2395,
        'state_id'=>31,
        'key'=>'067',
        'name'=>'Seyé',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2396,
        'state_id'=>31,
        'key'=>'068',
        'name'=>'Sinanché',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2397,
        'state_id'=>31,
        'key'=>'069',
        'name'=>'Sotuta',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2398,
        'state_id'=>31,
        'key'=>'070',
        'name'=>'Sucilá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2399,
        'state_id'=>31,
        'key'=>'071',
        'name'=>'Sudzal',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2400,
        'state_id'=>31,
        'key'=>'072',
        'name'=>'Suma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2401,
        'state_id'=>31,
        'key'=>'073',
        'name'=>'Tahdziú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2402,
        'state_id'=>31,
        'key'=>'074',
        'name'=>'Tahmek',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2403,
        'state_id'=>31,
        'key'=>'075',
        'name'=>'Teabo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2404,
        'state_id'=>31,
        'key'=>'076',
        'name'=>'Tecoh',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2405,
        'state_id'=>31,
        'key'=>'077',
        'name'=>'Tekal de Venegas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2406,
        'state_id'=>31,
        'key'=>'078',
        'name'=>'Tekantó',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2407,
        'state_id'=>31,
        'key'=>'079',
        'name'=>'Tekax',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2408,
        'state_id'=>31,
        'key'=>'080',
        'name'=>'Tekit',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2409,
        'state_id'=>31,
        'key'=>'081',
        'name'=>'Tekom',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2410,
        'state_id'=>31,
        'key'=>'082',
        'name'=>'Telchac Pueblo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2411,
        'state_id'=>31,
        'key'=>'083',
        'name'=>'Telchac Puerto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2412,
        'state_id'=>31,
        'key'=>'084',
        'name'=>'Temax',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2413,
        'state_id'=>31,
        'key'=>'085',
        'name'=>'Temozón',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2414,
        'state_id'=>31,
        'key'=>'086',
        'name'=>'Tepakán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2415,
        'state_id'=>31,
        'key'=>'087',
        'name'=>'Tetiz',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2416,
        'state_id'=>31,
        'key'=>'088',
        'name'=>'Teya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2417,
        'state_id'=>31,
        'key'=>'089',
        'name'=>'Ticul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2418,
        'state_id'=>31,
        'key'=>'090',
        'name'=>'Timucuy',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2419,
        'state_id'=>31,
        'key'=>'091',
        'name'=>'Tinum',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2420,
        'state_id'=>31,
        'key'=>'092',
        'name'=>'Tixcacalcupul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2421,
        'state_id'=>31,
        'key'=>'093',
        'name'=>'Tixkokob',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2422,
        'state_id'=>31,
        'key'=>'094',
        'name'=>'Tixmehuac',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2423,
        'state_id'=>31,
        'key'=>'095',
        'name'=>'Tixpéhual',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2424,
        'state_id'=>31,
        'key'=>'096',
        'name'=>'Tizimín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2425,
        'state_id'=>31,
        'key'=>'097',
        'name'=>'Tunkás',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2426,
        'state_id'=>31,
        'key'=>'098',
        'name'=>'Tzucacab',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2427,
        'state_id'=>31,
        'key'=>'099',
        'name'=>'Uayma',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2428,
        'state_id'=>31,
        'key'=>'100',
        'name'=>'Ucú',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2429,
        'state_id'=>31,
        'key'=>'101',
        'name'=>'Umán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2430,
        'state_id'=>31,
        'key'=>'102',
        'name'=>'Valladolid',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2431,
        'state_id'=>31,
        'key'=>'103',
        'name'=>'Xocchel',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2432,
        'state_id'=>31,
        'key'=>'104',
        'name'=>'Yaxcabá',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2433,
        'state_id'=>31,
        'key'=>'105',
        'name'=>'Yaxkukul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2434,
        'state_id'=>31,
        'key'=>'106',
        'name'=>'Yobaín',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2435,
        'state_id'=>32,
        'key'=>'001',
        'name'=>'Apozol',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2436,
        'state_id'=>32,
        'key'=>'002',
        'name'=>'Apulco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2437,
        'state_id'=>32,
        'key'=>'003',
        'name'=>'Atolinga',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2438,
        'state_id'=>32,
        'key'=>'004',
        'name'=>'Benito Juárez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2439,
        'state_id'=>32,
        'key'=>'005',
        'name'=>'Calera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2440,
        'state_id'=>32,
        'key'=>'006',
        'name'=>'Cañitas de Felipe Pescador',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2441,
        'state_id'=>32,
        'key'=>'007',
        'name'=>'Concepción del Oro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2442,
        'state_id'=>32,
        'key'=>'008',
        'name'=>'Cuauhtémoc',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2443,
        'state_id'=>32,
        'key'=>'009',
        'name'=>'Chalchihuites',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2444,
        'state_id'=>32,
        'key'=>'010',
        'name'=>'Fresnillo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2445,
        'state_id'=>32,
        'key'=>'011',
        'name'=>'Trinidad García de la Cadena',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2446,
        'state_id'=>32,
        'key'=>'012',
        'name'=>'Genaro Codina',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2447,
        'state_id'=>32,
        'key'=>'013',
        'name'=>'General Enrique Estrada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2448,
        'state_id'=>32,
        'key'=>'014',
        'name'=>'General Francisco R. Murguía',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2449,
        'state_id'=>32,
        'key'=>'015',
        'name'=>'El Plateado de Joaquín Amaro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2450,
        'state_id'=>32,
        'key'=>'016',
        'name'=>'General Pánfilo Natera',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2451,
        'state_id'=>32,
        'key'=>'017',
        'name'=>'Guadalupe',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2452,
        'state_id'=>32,
        'key'=>'018',
        'name'=>'Huanusco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2453,
        'state_id'=>32,
        'key'=>'019',
        'name'=>'Jalpa',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2454,
        'state_id'=>32,
        'key'=>'020',
        'name'=>'Jerez',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2455,
        'state_id'=>32,
        'key'=>'021',
        'name'=>'Jiménez del Teul',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2456,
        'state_id'=>32,
        'key'=>'022',
        'name'=>'Juan Aldama',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2457,
        'state_id'=>32,
        'key'=>'023',
        'name'=>'Juchipila',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2458,
        'state_id'=>32,
        'key'=>'024',
        'name'=>'Loreto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2459,
        'state_id'=>32,
        'key'=>'025',
        'name'=>'Luis Moya',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2460,
        'state_id'=>32,
        'key'=>'026',
        'name'=>'Mazapil',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2461,
        'state_id'=>32,
        'key'=>'027',
        'name'=>'Melchor Ocampo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2462,
        'state_id'=>32,
        'key'=>'028',
        'name'=>'Mezquital del Oro',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2463,
        'state_id'=>32,
        'key'=>'029',
        'name'=>'Miguel Auza',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2464,
        'state_id'=>32,
        'key'=>'030',
        'name'=>'Momax',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2465,
        'state_id'=>32,
        'key'=>'031',
        'name'=>'Monte Escobedo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2466,
        'state_id'=>32,
        'key'=>'032',
        'name'=>'Morelos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2467,
        'state_id'=>32,
        'key'=>'033',
        'name'=>'Moyahua de Estrada',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2468,
        'state_id'=>32,
        'key'=>'034',
        'name'=>'Nochistlán de Mejía',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2469,
        'state_id'=>32,
        'key'=>'035',
        'name'=>'Noria de Ángeles',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2470,
        'state_id'=>32,
        'key'=>'036',
        'name'=>'Ojocaliente',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2471,
        'state_id'=>32,
        'key'=>'037',
        'name'=>'Pánuco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2472,
        'state_id'=>32,
        'key'=>'038',
        'name'=>'Pinos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2473,
        'state_id'=>32,
        'key'=>'039',
        'name'=>'Río Grande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2474,
        'state_id'=>32,
        'key'=>'040',
        'name'=>'Sain Alto',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2475,
        'state_id'=>32,
        'key'=>'041',
        'name'=>'El Salvador',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2476,
        'state_id'=>32,
        'key'=>'042',
        'name'=>'Sombrerete',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2477,
        'state_id'=>32,
        'key'=>'043',
        'name'=>'Susticacán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2478,
        'state_id'=>32,
        'key'=>'044',
        'name'=>'Tabasco',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2479,
        'state_id'=>32,
        'key'=>'045',
        'name'=>'Tepechitlán',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2480,
        'state_id'=>32,
        'key'=>'046',
        'name'=>'Tepetongo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2481,
        'state_id'=>32,
        'key'=>'047',
        'name'=>'Teúl de González Ortega',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2482,
        'state_id'=>32,
        'key'=>'048',
        'name'=>'Tlaltenango de Sánchez Román',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2483,
        'state_id'=>32,
        'key'=>'049',
        'name'=>'Valparaíso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2484,
        'state_id'=>32,
        'key'=>'050',
        'name'=>'Vetagrande',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2485,
        'state_id'=>32,
        'key'=>'051',
        'name'=>'Villa de Cos',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2486,
        'state_id'=>32,
        'key'=>'052',
        'name'=>'Villa García',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2487,
        'state_id'=>32,
        'key'=>'053',
        'name'=>'Villa González Ortega',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2488,
        'state_id'=>32,
        'key'=>'054',
        'name'=>'Villa Hidalgo',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2489,
        'state_id'=>32,
        'key'=>'055',
        'name'=>'Villanueva',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2490,
        'state_id'=>32,
        'key'=>'056',
        'name'=>'Zacatecas',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2491,
        'state_id'=>32,
        'key'=>'057',
        'name'=>'Trancoso',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2492,
        'state_id'=>32,
        'key'=>'058',
        'name'=>'Santa María de la Paz',
        'active'=>1
        ] );

        //AQUI EMPIEZA CONDADOS

        //ESTADO ALABAMA
        DB::table('list_municipalities')->insert([
        'id'=>2493,
        'state_id'=>33,
        'key'=>'055',
        'name'=>'Etowah',
        'active'=>1
        ] );

        // DB::table('list_municipalities')->insert([
        // //'id'=>2493,
        // 'state_id'=>33,
        // 'key'=>'073',
        // 'name'=>'Jefferson',
        // 'active'=>1
        // ] );

        // DB::table('list_municipalities')->insert([
        // //'id'=>2493,
        // 'state_id'=>33,
        // 'key'=>'077',
        // 'name'=>'Lauderdale',
        // 'active'=>1
        // ] );

        // DB::table('list_municipalities')->insert([
        // //'id'=>2493,
        // 'state_id'=>33,
        // 'key'=>'089',
        // 'name'=>'Madison',
        // 'active'=>1
        // ] );

        // DB::table('list_municipalities')->insert([
        // //'id'=>2493,
        // 'state_id'=>33,
        // 'key'=>'097',
        // 'name'=>'Mobile',
        // 'active'=>1
        // ] );

        // DB::table('list_municipalities')->insert([
        // //'id'=>2493,
        // 'state_id'=>33,
        // 'key'=>'101',
        // 'name'=>'Montgomery',
        // 'active'=>1
        // ] );

        // DB::table('list_municipalities')->insert([
        // //'id'=>2493,
        // 'state_id'=>33,
        // 'key'=>'',
        // 'name'=>'Tuscaloosa',
        // 'active'=>1
        // ] );

        DB::table('list_municipalities')->insert([
        'id'=>2494,
        'state_id'=>34,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2495,
        'state_id'=>35,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2496,
        'state_id'=>36,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2497,
        'state_id'=>37,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2498,
        'state_id'=>38,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2499,
        'state_id'=>39,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2500,
        'state_id'=>40,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2501,
        'state_id'=>41,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2502,
        'state_id'=>42,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2503,
        'state_id'=>43,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2504,
        'state_id'=>44,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2505,
        'state_id'=>45,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2506,
        'state_id'=>46,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2507,
        'state_id'=>47,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2508,
        'state_id'=>48,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2509,
        'state_id'=>49,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2510,
        'state_id'=>50,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2511,
        'state_id'=>51,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2512,
        'state_id'=>52,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2513,
        'state_id'=>53,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2514,
        'state_id'=>54,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2515,
        'state_id'=>55,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2516,
        'state_id'=>56,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2517,
        'state_id'=>57,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2518,
        'state_id'=>58,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2519,
        'state_id'=>59,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2520,
        'state_id'=>60,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2521,
        'state_id'=>61,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2522,
        'state_id'=>62,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2523,
        'state_id'=>63,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2524,
        'state_id'=>64,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2525,
        'state_id'=>65,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2526,
        'state_id'=>66,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2527,
        'state_id'=>67,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2528,
        'state_id'=>68,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2529,
        'state_id'=>69,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2530,
        'state_id'=>70,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2531,
        'state_id'=>71,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2532,
        'state_id'=>72,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2533,
        'state_id'=>73,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2534,
        'state_id'=>74,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2535,
        'state_id'=>75,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2536,
        'state_id'=>76,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2537,
        'state_id'=>77,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2538,
        'state_id'=>78,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2539,
        'state_id'=>79,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2540,
        'state_id'=>80,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2541,
        'state_id'=>81,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2542,
        'state_id'=>82,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2543,
        'state_id'=>83,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2544,
        'state_id'=>84,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2545,
        'state_id'=>85,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2546,
        'state_id'=>86,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2547,
        'state_id'=>87,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2548,
        'state_id'=>88,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2549,
        'state_id'=>89,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2550,
        'state_id'=>90,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2551,
        'state_id'=>91,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2552,
        'state_id'=>92,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2553,
        'state_id'=>93,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );

        DB::table('list_municipalities')->insert([
        'id'=>2554,
        'state_id'=>94,
        'key'=>'',
        'name'=>'Conocido',
        'active'=>1
        ] );
    }
}
