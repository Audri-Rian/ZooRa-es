<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    // Nome da tabela no banco de dados
    protected $table = 'product_categories'; 

    // Atributos que podem ser preenchidos em massa
    protected $fillable = ['name', 'desc'];

    // Habilitando o controle de criação e atualização de timestamps
    public $timestamps = true;
}