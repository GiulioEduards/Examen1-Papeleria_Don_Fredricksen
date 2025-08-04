<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:: table("users")->insert([
            
            [
                'name' => 'Admin Principal',
                'email' => 'admin@papeleria.com',
                'password' => Hash::make('admin123'),
                'cargo' => 'Administrador',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vendedor 1',
                'email' => 'vendedor1@papeleria.com',
                'password' => Hash::make('ventas123'),
                'cargo' => 'Vendedor',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Almacenista',
                'email' => 'almacen@papeleria.com',
                'password' => Hash::make('almacen123'),
                'cargo' => 'Almacenista',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
