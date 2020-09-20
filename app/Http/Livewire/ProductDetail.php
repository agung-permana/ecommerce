<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{
    public $product, $jumlah_pesanan;

    public function mount($id)
    {
        $productDetail = Product::find($id);

        if($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function masukankeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);

        //validari jika belum login
        if(!Auth::user()) {
            return redirect()->route('login');
        }
    }   

    public function render()
    {
        return view('livewire.product-detail');
    }
}
