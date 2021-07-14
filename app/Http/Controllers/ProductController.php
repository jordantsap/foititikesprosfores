<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
// use App\Models\Company;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $pagination = 20;

    public function __construct()
    {
        $this->middleware('web');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate('9');

        return view('products.index', compact('products'));
    }

    public function filterLower()
    {
        $products = Product::orderBy('price', 'desc')->paginate('10');
        return view('products.index', compact('products'));
    }
    public function pricerange1100()
    {
        $products = Product::where('price', '<=', 100)->paginate('10');
        return view('products.index', compact('products'));
    }
    public function pricerange101200()
    {
        $products = Product::where('price', '>=', 100)->paginate('10');
        return view('products.index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::with('category')->find($product->id);

        return view("products.product", compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function category(Category $category)
    {
        $category = Category::where('id', $category->id)->first();
        $products = $category->products()->paginate(10);

        return view('products.category', compact('category', 'products'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function type(Type $type)
    {
        $type =  Type::where('id', $type->id)->first();
        // $products = $type->products()->paginate(10);

        return view('products.type', compact('type'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function company(Company $company)
    {
        $company =  Company::find($company->id);
        $products = $company->products()->paginate(10);

        return view('products.company', compact('company', 'products'));
    }
}
