<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('product_inventories', function (Blueprint $table) {
            $table->id(); // ID do inventário
            $table->integer('quantity'); // Quantidade em estoque
            $table->timestamps(); // Campos de controle de criação e modificação
        });
    }

    public function down()
    {
        Schema::dropIfExists('product_inventories');
    }
};