<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PagoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $clientes = DB::table('clientes')->pluck('id_cliente'); // de esta forma obtengo las claves de los clientes ya existentes

        foreach ($clientes as $cliente) {
            $numPagos = $faker->numberBetween(1, 5); 

            for ($i = 0; $i < $numPagos; $i++) {
                DB::table('pagos')->insert([
                    'id_cliente' => $cliente,
                    'pago' => $faker->randomFloat(2, 200, 1000), 
                    'fecha' => $faker->dateTimeBetween('-6 months', 'now'), // fecha aleatoria en los ultimos 6 meses
                ]);
            }
        }
    }
}
