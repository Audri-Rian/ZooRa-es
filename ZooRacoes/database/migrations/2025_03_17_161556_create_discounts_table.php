<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id(); // ID do desconto
            $table->string('name'); // Nome do desconto
            $table->text('desc')->nullable(); // Descrição do desconto
            $table->decimal('discount_percent', 5, 2); // Percentual de desconto
            $table->boolean('active')->default(true); // Se o desconto está ativo
            $table->timestamps(); // Campos de controle de criação e modificação
        });
    }

    public function down()
    {
        Schema::dropIfExists('discounts');
    }
};