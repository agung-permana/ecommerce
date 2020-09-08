<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category;
use App\Product;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'products' => Product::take(4)->get(),
            'categories' => Category::all()
        ]);
    }
}
