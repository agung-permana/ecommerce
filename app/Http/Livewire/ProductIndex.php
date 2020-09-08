<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;

    public $search;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if($this->search) {
            $products = Product::where('nama', 'LIKE', '%'.$this->search.'%')->paginate(8);
        }else {
            $products = Product::paginate(8);
        }
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'Semua Kategori'
        ]);
    }
}
