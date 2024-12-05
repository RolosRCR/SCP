<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('es_MX'); // esta herramienta me ayuda a encontrar nombres comunes en mexico
        for ($i = 0; $i < 20; $i++) {
            DB::table('clientes')->insert([
                'nombre' => $faker->firstName . ' ' . $faker->lastName, 
                'monto' => $faker->randomFloat(2, 1000, 20000), // Monto entre $1,000 y $20,000
                'dia' => $faker->numberBetween(1, 30), 
            ]);
        }
    }
}
