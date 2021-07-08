<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Field;
use Livewire\Component;

class CreateProductFields extends Component
{
    public $selectedCategories;
    public $categories;
    public $fields;
    // public $category = $this->selectedCategories;


    public function mount()
    {
        $this->categories = Category::all();
        // $this->fields = Field::where(function ($query) {
        //     $query->where('category_id', $this->selectedCategories);
        //     })
        // ->get();
    }
    public function render()
    {

        $fields = Field::where(function ($query) {
                $query->when($this->selectedCategories, function ($query) {
                    $query->whereIn('category_id', $this->selectedCategories);
                });
            })
            ->get();
            // dd($fields);

        return view('livewire.admin.create-product-fields', [
            'selectedCategories' => $this->selectedCategories,
            'categories' => $this->categories,
            'fields' => $fields
        ]);
    }
    public function filterCategories($id)
    {
        // if (($key = array_search($id, $this->selectedCategories)) != false) {
        //     unset($this->selectedCategories[$key]);
        // } else {
        //     $this->selectedCategories[] = $id;
        // }
        return Field::whereIn('category_id', $this->selectedCategories);

    }
}
