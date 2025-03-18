<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary(); // ID único (UUID)
            $table->string('name'); // Nome do produto
            $table->text('desc')->nullable(); // Descrição do produto
            $table->string('SKU')->unique(); // Código SKU único
            $table->decimal('price', 10, 2); // Preço do produto
            $table->foreignId('category_id')->constrained('product_categories'); // Categoria do produto
            $table->foreignId('inventory_id')->constrained('product_inventories'); // Inventário do produto
            $table->foreignId('discount_id')->nullable()->constrained('discounts'); // Desconto aplicável (opcional)
            $table->foreignId('supplier_id')->constrained('suppliers'); // Fornecedor do produto
            $table->timestamps(); // Campos de controle de criação e modificação
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};