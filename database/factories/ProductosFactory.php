<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Productos;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        {
            return [
                'nombre' => $this -> faker -> word(),
                'precio' => $this -> faker -> randomFloat(),
                'imagen' => $this -> faker -> imageURL(),
                'descripcion' => $this -> faker -> sentence()
            ];
        }
    }

}
