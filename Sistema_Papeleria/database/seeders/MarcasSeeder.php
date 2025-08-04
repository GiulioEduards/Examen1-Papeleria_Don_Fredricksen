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
            
            ['name' => 'Sabonis', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Stabilo', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Big', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'American Iris', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Faber Castell', 'created_at' => now(), 'updated_at' => now()],
        
        ]);
    }
}
