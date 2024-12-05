<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'rol' => 1, // Yo/admin
                'contrasena' => Hash::make('12345678'),
            ],
            [
                'rol' => 2, // Papa/Gestor
                'contrasena' => Hash::make('12345678'),
            ],
        ]);
    }
}
