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

        DB::table('imaq_form_quotation')->insert(['name'=>'Valeria','last_name'=>'Sanchez','email'=>'vavavifa4@gmail.com','phone'=>'3322560716','service_id'=>4,'line_id'=>1,'quantity'=>100,'hour'=>8,'message'=>'Quiero crear mi propia marca de maquillaje.','state_id'=>8,'form_city'=>'--','status'=>0,'created_at'=>'2024-12-02 8:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Marian','last_name'=>'Pirez Sierra','email'=>'mpsierra2395@gmail.com','phone'=>'9991575812','service_id'=>1,'line_id'=>1,'quantity'=>300,'hour'=>1,'message'=>'Quiero crear mi línea personal de maquillaje','state_id'=>9,'form_city'=>'--','status'=>0,'created_at'=>'2024-12-03 9:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Renatta Alonso','last_name'=>'Gonzalez','email'=>'nattaalonso@gmail.com','phone'=>'6311054097','service_id'=>3,'line_id'=>1,'quantity'=>6,'hour'=>7,'message'=>'Me encantaria saber sobre el proceso y encontrar lugar de fabricacion de los productos','state_id'=>11,'form_city'=>'--','status'=>0,'created_at'=>'2024-12-05 11:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Marco Antonio','last_name'=>'roque lopez','email'=>'mroquelopez4@gmail.com','phone'=>'3310718049','service_id'=>1,'line_id'=>4,'quantity'=>10,'hour'=>11,'message'=>'Hola. Necesito asesoria para poder comenzar con mi marca personal de skincare, para ello, me interesaria conocer la calidad con la que elaboran sus productos, para despues comenzar con una prueba piloto, pero antes espero conectar una llamada con ustedes para que me puedan hacer del conocimiento por que cantidades de produccion se manejan ustedes. Espero su respuestas gracias.','state_id'=>14,'form_city'=>'Guadalajara','status'=>0,'created_at'=>'2024-12-06 12:25:47']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Ingrid Aida','last_name'=>'Garcia Hernandez','email'=>'ingrid.garciagh@gmail.com','phone'=>'5554171730','service_id'=>1,'line_id'=>4,'quantity'=>20,'hour'=>4,'message'=>'Hola necesito toda la información de linea facial, maquillaje, con diseños, empaque, envase, impresión, y etiquetado... requiero Skincare, base de maquillaje, corrector, sobras etc...','state_id'=>15,'form_city'=>'Lopez Mateos','status'=>0,'created_at'=>'2024-12-02 22:31:49']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Jose','last_name'=>'Bravo Soto','email'=>'ppbravo2@msn.com','phone'=>'5551042415','service_id'=>1,'line_id'=>4,'quantity'=>3000,'hour'=>3,'message'=>'Un Doctor cirujano plástico con mas de 40 años de experiencia quiere lanzar su linea de tratamiento con las formulas que el utiliza para sus pacientes despúes de alguna intervención. Su ideal es poner poner estos productos al alcance de todo el público.','state_id'=>9,'form_city'=>'CDMX','status'=>0,'created_at'=>'2024-12-11 0:01:00']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Natassia','last_name'=>'Aguirre Treviño','email'=>'natassia.aguirre@gmail.com','phone'=>'7734690718','service_id'=>1,'line_id'=>6,'quantity'=>100,'hour'=>6,'message'=>'Estoy interesada en empezar una marca de productos cosméticos y de cuidado personal para su venta en redes sociales en Estados Unidos.','state_id'=>9,'form_city'=>'CDMX','status'=>0,'created_at'=>'2024-12-16 18:54:05']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Mario Cantu','last_name'=>'Cantu','email'=>'mariocantulpz13@gmail.com','phone'=>'5654337508','service_id'=>1,'line_id'=>15,'quantity'=>100,'hour'=>2,'message'=>'Estoy interesado en desarrollar un producto cosmético innovador y me gustaría conocer más sobre los servicios que su laboratorio ofrece en términos de maquila y fabricación de productos personalizados.','state_id'=>19,'form_city'=>'Monterrey','status'=>0,'created_at'=>'2024-12-17 0:09:39']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Pamela','last_name'=>'Martinez','email'=>'pamemr88@hotmail.com','phone'=>'4424130909','service_id'=>1,'line_id'=>4,'quantity'=>5,'hour'=>11,'message'=>'Quiero empezar una marca de productos del cuidado de la piel, shampoos, etc pero más enfocado a niños, bebés y mujeres embarazadas y lactantes, no sé si tienen algun producto así','state_id'=>22,'form_city'=>'Santiago de Queretaro','status'=>0,'created_at'=>'2025-01-29 16:58:32']);
        DB::table('imaq_form_quotation')->insert(['name'=>'Glenda','last_name'=>'Giron','email'=>'tramitesoficialesweb@gmail.com','phone'=>'5585645049','service_id'=>1,'line_id'=>4,'quantity'=>4,'hour'=>3,'message'=>'Buenas tardes, mi nombre es Glenda Girón , tengo una marca enfocada en resaltar la belleza través de productos y servicios especializados en cejas y pestañas. Estoy interesada en conocer más sobre sus opciones de fabricación, ya que me gustaría desarrollar dos productos específicos bajo mi marca','state_id'=>9,'form_city'=>'Gustavo A Madero','status'=>0,'created_at'=>'2025-02-13 3:14:32']);



    }
}
