<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use Livewire\Component;

class Filters extends Component
{
    public $categories;
    public $companies;
    public $products = [];

    public function mount() {
        $this->categories = Category::all();
        $this->companies = Company::all();
    }
    public function lowpricefirst() {
        $this->products = Product::orderBy('price', 'ASC')->paginate(9);
    }

    public function render()
    {
        return view('livewire.filters');
    }

}
