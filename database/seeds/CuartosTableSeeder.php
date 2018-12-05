<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CuartosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuartos')->insert([
            'numero' => '17',
            'descripcion' => 'Orilla del mar'
        ]);
        DB::table('cuartos')->insert([
            'numero' => '24',
            'descripcion' => 'VIP con jacuzzi'
        ]);
        DB::table('cuartos')->insert([
            'numero' => '29',
            'descripcion' => 'Sala de cine '
        ]);
        DB::table('cuartos')->insert([
            'numero' => '12',
            'descripcion' => 'Doble cama matrimonial'
        ]);
        DB::table('cuartos')->insert([
            'numero' => '10',
            'descripcion' => 'PentHouse'
        ]);
    }
}
