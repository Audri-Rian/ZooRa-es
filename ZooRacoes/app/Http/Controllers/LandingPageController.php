<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        // Obtendo todas as categorias de produtos
        $categories = ProductCategory::all();

        // Retornando a view com as categorias
        return view("layouts.home", compact('categories'));
    }
}