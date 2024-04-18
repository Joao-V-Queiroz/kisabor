<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained();
            $table->foreignId('cliente_id')->constrained();
            $table->integer('quantidade');
            $table->decimal('valor', 10, 2);
            $table->string('tipo_pedido'); //entrega ou retirada
            $table->string('forma_pagamento');
            $table->string('endereco_entrega');
            $table->string('observacoes')->nullable();
            $table->string('status');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
