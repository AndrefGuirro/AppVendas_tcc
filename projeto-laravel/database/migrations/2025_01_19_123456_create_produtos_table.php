<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('produtos', function (Blueprint $table) {
        $table->id(); // Chave primária
        $table->string('nome'); // Nome do produto
        $table->decimal('preco_custo', 8, 2); // Preço de custo do produto
        $table->decimal('preco_venda', 8, 2); // Preço de venda do produto
        $table->string('tipo_de_venda'); // 'unitário' ou 'pacote'
        $table->integer('quantidade_por_pacote')->nullable(); // Só será preenchido para pacotes
        $table->integer('estoque'); // Quantidade em estoque

        $table->timestamps(); // Timestamps (created_at, updated_at)
    });
}

public function down()
{
    Schema::dropIfExists('products'); // Caso precise remover a tabela
}

};
