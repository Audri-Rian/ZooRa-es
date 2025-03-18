<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BrowseCategory extends Component
{
    public $categories;

    /**
     * Cria uma nova instância do componente.
     */
    public function __construct($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Retorna a view que representa o componente.
     */
    public function render(): View|Closure|string
    {
        return view('components.browse-category', [
            'categories' => $this->categories
        ]);
    }
}