<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Juan',
            'apellido' => 'Osio',
            'cedula' => '26715734'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Nelson',
            'apellido' => 'Funes',
            'cedula' => '2345534'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Adonis',
            'apellido' => 'Araujo',
            'cedula' => '4958232'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Maria',
            'apellido' => 'Flores',
            'cedula' => '4925213'
        ]);
    }
}
