<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar datos para marcas
        DB:: table("marcas")->insert([
            
            ['nombre' => 'Sabonis', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Stabilo', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Big', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'American Iris', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Faber Castell', 'created_at' => now(), 'updated_at' => now()],
        
        ]);
    }
}
