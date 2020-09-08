<?php

namespace App\Http\Livewire;

use App\Category;
use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.navbar',[
            'categories' => Category::all()
        ]);
    }
}
