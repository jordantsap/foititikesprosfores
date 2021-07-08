<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use App\Support\Collection;

class Products extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'tailwind';
    public $pagesize = 9;
    // public $products = [];

    protected $listeners = ['lowpricefirst'];


    // public function mount()
    // {

    //     $this->products = Product::get();
    // }

    public function lowpricefirst()
    {
        dd('dfhhtg');
        // $products = Product::with('category')
        //     ->orderBy('price', 'DESC')
        //     ->get();
        // return $products;
        // // $products = Product::get();
        // // $products = Product::paginate(20);
        // // return [
        // //     'products' => $products
        // // ];
    }

    public function render()
    {

        $this->products = Product::with('category')
            ->paginate(5);

        return view(
            'products.index',
            ['products' => $this->products]
        );
    }
}
