<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id(); // ID do fornecedor
            $table->string('name'); // Nome do fornecedor
            $table->text('desc')->nullable(); // Descrição do fornecedor
            $table->timestamps(); // Campos de controle de criação e modificação
        });
    }

    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};