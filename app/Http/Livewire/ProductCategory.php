<?php

namespace App\Http\Livewire;

use App\Category;
use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCategory extends Component
{
    use WithPagination;

    public $search, $category;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($kategoriId)
    {
        $kategoriDetail = Category::find($kategoriId);

        if($kategoriDetail) {
            $this->category = $kategoriDetail; 
        }
    }

    public function render()
    {
        if($this->search) {
            $products = Product::where('category_id', $this->category->id)->where('nama', 'LIKE', '%'.$this->search.'%')->paginate(8);
        }else {
            $products = Product::where('category_id', $this->category->id)->paginate(8);
        }
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'Kategori '.$this->category->nama
            ]);
    }
}
