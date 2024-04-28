<?php

namespace Database\Seeders;

use App\Models\PedidoProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoProdutoSeeder extends Seeder
{
    public function run(): void
    {
    PedidoProduto::factory()->count(2)->create();
    }
}
