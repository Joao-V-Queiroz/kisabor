<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => 'Taynara OLiveira',
            'telefone' => $this->faker->phoneNumber(),
            'cep' => $this->faker->postcode(),
            'endereco' => $this->faker->streetAddress(),
            'bairro' => $this->faker->word(),
            'cidade' => $this->faker->city(),
            'estado' => 'GO' ,
            'complemento' => $this->faker->sentence(),
        ];
    }
}
