<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoProdutoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'pedido_id' => $this->faker->numberBetween(1, 2),
            'produto_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
