<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf_cnpj')->nullable();
            $table->string('telefone');
            $table->string('cep');
            $table->string('endereco');
            $table->string('email')->nullable();
            $table->date('dia_visita')->nullable();
            $table->string('dia_semana')->nullable();
            $table->enum('frequencia_visita', ['semanal', 'quinzenal', 'mensal'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
