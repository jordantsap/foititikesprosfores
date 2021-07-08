<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Shop extends Component
{
    public function lowerprice()
    {
        return Product::orderBy('price', 'asc')->get();
    }
    // public function render()
    // {
    //     return view('livewire.shop');
    // }
}
