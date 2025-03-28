<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $developer = User::create([
            'name'      => 'Adolfo',
            'last_name' => 'Superadmin',
            'email'     => 'adolfo@nixdit.com',
            'password'  => Hash::make('Developer.imaq'),
        ]);
        $developer->assignRole('developer');

        $superadmin = User::create([
            'name'      => 'Industrial',
            'last_name' => 'Maquiladora',
            'email'     => 'superadmin@industrialmaquiladora.com',
            'password'  => Hash::make('Superadmin2025'),
        ]);
        $superadmin->assignRole('superadmin');

        $almacen = User::create([
            'name'      => 'Almacen',
            'last_name' => 'Superadmin',
            'email'     => 'almacen@mail.com',
            'password'  => Hash::make('Superadmin2024'),
        ]);
        $almacen->assignRole('almacenimaq');

        $serigrafia = User::create([
            'name'      => 'Serigrafia',
            'last_name' => 'Superadmin',
            'email'     => 'serigrafia@mail.com',
            'password'  => Hash::make('Superadmin2024'),
        ]);
        $serigrafia->assignRole('serigrafia');

        $provider = User::create([
            'name'      => 'Imaq',
            'last_name' => 'Industrial Maquiladora',
            'email'     => 'contacto@industrialmaquiladora.com',
            'password'  => Hash::make('Superadmin2024'),
        ]);
        $provider->assignRole('provider');

        $provider_second = User::create([
            'name'      => 'Proveedor',
            'last_name' => 'Prueba',
            'email'     => 'proveedor@mail.com',
            'password'  => Hash::make('Superadmin2024'),
        ]);
        $provider_second->assignRole('provider');

        $sales = User::create([
            'name'      => 'Ventas',
            'last_name' => 'Maproderm',
            'email'     => 'ventas@mail.com',
            'password'  => Hash::make('Superadmin2024'),
        ]);
        $sales->assignRole('sales');

        $almacenmapro = User::create([
            'name'      => 'Almacen',
            'last_name' => 'Maproderm',
            'email'     => 'almacen@maproderm.com',
            'password'  => Hash::make('Almacenmpd2024'),
        ]);
        $almacenmapro->assignRole('almacenmapro');

        $acondicionadoimaq = User::create([
            'name'      => 'Acondicionado',
            'last_name' => 'IMAQ',
            'email'     => 'acondicionado@industrialmaquiladora.com',
            'password'  => Hash::make('Acondicionado2025'),
        ]);
        $acondicionadoimaq->assignRole('acondicionado');

        // $client = User::create([
        //     'name'      => 'Luz',
        //     'last_name' => 'Fuentes',
        //     'email'     => 'luzfuentes7.lf@gmail.com',
        //     'password'  => Hash::make('luzfuentes'),
        // ]);
        // $client->assignRole('customer');

        // $dealer = User::create([
        //     'name'      => 'Distribuidor',
        //     'last_name' => 'Fuentes',
        //     'email'     => 'dealer@gmail.com',
        //     'password'  => Hash::make('dealer123'),
        // ]);
        // $dealer->assignRole('distribuidor');
        $client10=User::create(['name'=>'Nancy','last_name'=>'Chablé Garcia','email'=>'n_chable@hotmail.com','password'=>Hash::make('9211409174'),]);$client10->assignRole('customer');

    }
}
