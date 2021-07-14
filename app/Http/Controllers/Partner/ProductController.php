<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Company;
use App\Models\Product;
use App\Notifications\ProductCreatedNotification;
use App\Notifications\ProductUpdatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create_products', 'App\Product');
        $categories = Category::all();
        $company = Company::where('user_id', Auth::user()->id)->get();
        $brands = Brand::all();
        $colors = Color::all();
        return view('partner.products.create', compact('colors', 'company', 'brands', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required',
            // 'sku' => '',
            'brand_id' => 'nullable',
            'category_id' => '',
            'color_id' => 'nullable',
            'user_id' => 'nullable|integer|Auth::user()->id',
            // 'active' => 'nullable',
            // 'slider' => 'nullable',
            'company_id' => 'nullable',
            'image' => 'nullable',
            'color' => 'nullable',
            'price' => 'required',
            'link' => 'required',
        ]);

        $product = new Product;
        $product->title = $request->title;
        // $product->id = $request->sku;
        $product->slug = Str::slug($request->input('title'), '-');
        $product->brand_id = $request->brand_id;
        $product->company_id = Auth::user()->company->id;
        $product->price = $request->price;
        $product->link = $request->link;
        $product->category_id = $request->category_id;
        $product->user_id = Auth::user()->id;
        //   $product->type_id = $request->type_id;
        $product->color_id = $request->color_id;
        // $product->active = $request->active;
        // $product->slider = $request->slider;
        $product->description = $request->description;
        // $product->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/products/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $product->image = $filename;
        }

        $product->save();
        // TODO: uncomment to enable THIS before upload
          Notification::route('mail', 'stamogiorgoufoteini@gmail.com')
            ->notify(new ProductCreatedNotification($product));

        // Artisan::call('cache:clear');
        Cache::forget('homeproducts');

        $notification = array(
            'message' => 'Product added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('my.products.show', $product->id))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->authorize('view_products', 'App\Product');

        $product = Product::with(['company'])->find($id);

        return view('partner.products.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //   $this->authorize('update_companies', 'App\Company');
        $product = Product::with('category')->find($id);
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        // $users = User::all();
        return view('partner.products.edit', compact('product', 'categories', 'brands', 'colors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // Product $product
    {

        $this->validate($request, [
            'description' => 'required',
            'brand_id' => 'nullable',
            'color_id' => 'nullable',
            'price' => 'required',
            'image' => 'nullable',
            'link' => 'nullable',
            // 'title' => 'required|max:100',
            // 'slug' => 'unique:products,title',
            // 'active' => 'nullable',
            // 'slider' => 'nullable',
            // 'company_id' => 'required',
            // 'category_id' => '',
            // 'user_id' => 'nullable|integer|Auth::user()->id',
        ]);

        $product = Product::find($id);
        // $product->title = $request->title;
        // $product->slug = Str::slug($request->title, '-');
        $product->brand_id = $request->brand_id;
        $product->color_id = $request->color_id;
        // $product->user_id = $request->user_id;
        // $product->category_id = $request->category_id;
        // $product->company_id = $request->company_id;
        // $product->active = $request->active;
        // $product->slider = $request->slider;
        $product->link = $request->link;
        $product->price = $request->price;
        $product->description = $request->description;

        // $product->image = $request->image;

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/products/" . $filename);
            $oldfile = public_path("images/products/" . $product->image);

            Image::make($image)->resize(800, 400)->save($location);
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            $product->image = $filename;
        }

        $product->save();

        // Artisan::call('cache:clear');
        Cache::forget('homeproducts');

        // TODO: ENABLE NOTIFICATIONS
          Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new ProductUpdatedNotification($product));

        $notification = array(
            'message' => 'Product updated successfully',
            'alert-type' => 'info'
        );

        return redirect(route('my.products.show', $product->id))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
