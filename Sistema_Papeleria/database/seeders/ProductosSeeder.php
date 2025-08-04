<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("productos")->insert([

            // Sabonis
            [
                'nombre' => 'Boligrafo Sabonis FB2013',
                'precio' => 3.50,
                'marcas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Sabonis regla plastica 30cm',
                'precio' => 4.50,
                'marcas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Stabilo
            [
                'nombre' => 'Marcadores Stabilo Boss Pastel',
                'precio' => 25.50,
                'marcas_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Resaltador Stabilo Swing Cool',
                'precio' => 5.75,
                'marcas_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Bic
            [
                'nombre' => 'Bolígrafos Bic Cristal caja x 12',
                'precio' => 15.00,
                'marcas_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Marcador Bic Intensity',
                'precio' => 3.50,
                'marcas_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // American Iris
            [
                'nombre' => 'Cuarderno con diseño carta',
                'precio' => 22.30,
                'marcas_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'cuaderno color entero 1/2 oficio',
                'precio' => 12.50,
                'marcas_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Faber-Castell
            [
                'nombre' => 'Lápices de color Faber-Castell 24 colores',
                'precio' => 32.90,
                'marcas_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Tajalápiz Faber-Castell Grip',
                'precio' => 8.25,
                'marcas_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ]);
    }
}
