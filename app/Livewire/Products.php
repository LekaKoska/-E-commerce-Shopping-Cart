<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;
    public string $search = '';
    public function render()
    {
        return view('livewire.products-list', ['products' => Product::latest()->where('name', 'LIKE', "%{$this->search}%")->paginate()]);
    }
}
