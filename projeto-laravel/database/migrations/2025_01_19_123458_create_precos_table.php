<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrecosTable extends Migration
{
    public function up()
    {
        Schema::create('precos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_tabela_1', 8, 2);
            $table->decimal('preco_tabela_2', 8, 2)->nullable();
            $table->decimal('preco_tabela_3', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('precos');
    }
}

