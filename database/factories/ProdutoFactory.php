<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),
            'ingredientes' => $this->faker->sentence(),
            'valor' => $this->faker->randomFloat(2, 10, 100),
            'tipo' => $this->faker->randomElement(['pizza', 'hamburguer', 'bebida']),
        ];
    }
}
