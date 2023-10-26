<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MetodosPago;
use App\Models\Categorias;
use App\Models\Productos;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        MetodosPago::factory()->create();
        Productos::factory()->create();        
        Categorias::factory()->create();

    }
}
