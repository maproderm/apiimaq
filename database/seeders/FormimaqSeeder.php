<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormimaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('imaq_form_quotation')->insert(['name'=>'Jonathan','last_name'=>'Coronado','email'=>'jcoronadoleos@gmail.com','phone'=>'8442834056','service_id'=>1,'line_id'=>1,'quantity'=>1000,'hour'=>5,'message'=>'--','state_id'=>1,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-11-25 2:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Gintare','last_name'=>'Gela','email'=>'gintare87g@hotmail.com','phone'=>'600663209','service_id'=>2,'line_id'=>1,'quantity'=>1000,'hour'=>5,'message'=>'--','state_id'=>2,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-11-26 2:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Luz Patricia','last_name'=>'Noriega Perez','email'=>'cosmetologa.patricianoriega@gmail.com','phone'=>'55 8793 5853','service_id'=>3,'line_id'=>1,'quantity'=>150,'hour'=>1,'message'=>'--','state_id'=>3,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-11-27 3:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Magdalena','last_name'=>'Puentes Berlanga','email'=>'magdapuentes.b@gmail.com','phone'=>'8119986255','service_id'=>4,'line_id'=>1,'quantity'=>100,'hour'=>9,'message'=>'--','state_id'=>4,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-11-28 4:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Samantha','last_name'=>'Fernandez','email'=>'splendorscience@gmail.com','phone'=>'573167450845','service_id'=>1,'line_id'=>1,'quantity'=>2000,'hour'=>2,'message'=>'--','state_id'=>5,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-11-29 5:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Lorenia','last_name'=>'Lorenia','email'=>'lorenianavarro07@gmail.com','phone'=>'8261069493','service_id'=>2,'line_id'=>1,'quantity'=>83,'hour'=>1,'message'=>'--','state_id'=>6,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-11-30 6:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Nelly','last_name'=>'Garcia','email'=>'nelly_garcia83@hotmail.com','phone'=>'5540711653','service_id'=>3,'line_id'=>1,'quantity'=>300,'hour'=>1,'message'=>'--','state_id'=>7,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-12-01 7:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Valeria','last_name'=>'Sanchez','email'=>'vavavifa4@gmail.com','phone'=>'3322560716','service_id'=>4,'line_id'=>1,'quantity'=>100,'hour'=>8,'message'=>'Quiero crear mi propia marca de maquillaje.','state_id'=>8,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-12-02 8:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Marian','last_name'=>'Pirez Sierra','email'=>'mpsierra2395@gmail.com','phone'=>'9991575812','service_id'=>1,'line_id'=>1,'quantity'=>300,'hour'=>1,'message'=>'Quiero crear mi línea personal de maquillaje','state_id'=>9,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-12-03 9:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Liam','last_name'=>'Scully','email'=>'Liamscully01@gmail.com','phone'=>'9843168255','service_id'=>2,'line_id'=>1,'quantity'=>600,'hour'=>1,'message'=>'--','state_id'=>10,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-12-04 10:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Renatta Alonso','last_name'=>'Gonzalez','email'=>'nattaalonso@gmail.com','phone'=>'6311054097','service_id'=>3,'line_id'=>1,'quantity'=>6,'hour'=>8,'message'=>'Me encantaria saber sobre el proceso y encontrar lugar de fabricacion de los productos','state_id'=>11,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-12-05 11:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Marco Antonio','last_name'=>'roque lopez','email'=>'mroquelopez4@gmail.com','phone'=>'3310718049','service_id'=>1,'line_id'=>4,'quantity'=>10,'hour'=>11,'message'=>'Hola. Necesito asesoria para poder comenzar con mi marca personal de skincare, para ello, me interesaria conocer la calidad con la que elaboran sus productos, para despues comenzar con una prueba piloto, pero antes espero conectar una llamada con ustedes para que me puedan hacer del conocimiento por que cantidades de produccion se manejan ustedes. Espero su respuestas gracias.','state_id'=>12,'form_city'=>'Naucalpan','status'=>0,'created_at'=>'2024-12-06 12:25:47']);



    }
}
