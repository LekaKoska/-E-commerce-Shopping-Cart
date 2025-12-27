<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public function addToCart()
    {
        dd(auth()->id());
    }
    public function render()
    {
        return view('livewire.products-list', ['products' => Product::latest()->paginate()]);
    }
}
