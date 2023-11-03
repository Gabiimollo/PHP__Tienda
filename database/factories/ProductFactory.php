<?php 

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;
use Faker\Generator as Faker;

class ProductoFactory extends Factory
{
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'precio' => $this->faker->randomFloat(2, 1, 100),
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}
