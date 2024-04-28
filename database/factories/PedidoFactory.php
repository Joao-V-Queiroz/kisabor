<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => 1,
            'quantidade' => $this->faker->numberBetween(1, 10),
            'valor' => $this->faker->randomFloat(2, 10, 100),
            'tipo_pedido' => $this->faker->randomElement(['delivery', 'retirada']),
            'forma_pagamento' => $this->faker->randomElement(['dinheiro', 'cartao']),
            'endereco_entrega' => $this->faker->address(),
            'observacoes' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['pendente', 'em preparo', 'saiu para entrega', 'entregue']),
        ];
    }
}
