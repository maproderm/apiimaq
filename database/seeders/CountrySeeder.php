<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_countries')->insert([ 'id' => (1), 'name' => ('México'), 'active' => ('1'), 'key' => ('MEX')]);
        DB::table('list_countries')->insert([ 'id' => (2), 'name' => ('Estados Unidos'), 'active' => ('1'), 'key' => ('USA')]);
        DB::table('list_countries')->insert([ 'id' => (3), 'name' => ('Canadá'), 'active' => ('1'), 'key' => ('CAN')]);
    }
}
