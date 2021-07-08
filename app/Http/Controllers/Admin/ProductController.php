<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
<<<<<<< HEAD
use App\Models\Color;
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
use App\Models\Company;
use DB;
use App\Models\Product;
use App\Models\Type;
<<<<<<< HEAD
use App\Notifications\ProductCreatedNotification;
use App\Notifications\ProductUpdatedNotification;
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
use Artisan;
use Image;
use Auth;
use File;
<<<<<<< HEAD
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
use Str;

// use Illuminate\Http\File;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //   $this->authorize('view_products', 'App\Product');
        $products = Product::with(['category', 'company'])->orderBy('id', 'DESC')->paginate(9);
        return view('admin.products.index', compact('products'));
=======
    //   $this->authorize('view_products', 'App\Product');
        $products = Product::with('category')->orderBy('id', 'DESC')->paginate(9);
        return view('admin.products.index', compact('products'));

>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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
        $brands = Brand::all();
        $companies = Company::all();
<<<<<<< HEAD
        $colors = Color::all();
        return view('admin.products.create', compact('colors', 'companies', 'brands', 'categories'));
=======
        return view('admin.products.create', compact('companies', 'brands', 'categories'));
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $this->validate($request, [
            'title' => 'required|max:100',
            'description' => 'required',
            // 'sku' => '',
            'brand_id' => 'nullable',
            'category_id' => '',
            'color_id' => 'nullable',
            'active' => 'nullable',
            'slider' => 'nullable',
            'company_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => '',
            'price' => 'required',
            'link' => 'required',
        ]);

        $product = new Product;
        $product->title = $request->input('title');
        // $product->id = $request->sku;
        $product->slug = Str::slug($request->input('title'), '-');
        $product->brand_id = $request->brand_id;
        $product->company_id = $request->company_id;
        $product->price = $request->price;
        $product->link = $request->link;
        $product->category_id = $request->category_id;
        //   $product->type_id = $request->type_id;
        $product->color_id = $request->color_id;
        $product->active = $request->input('active');
        $product->slider = $request->input('slider');
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
        // Artisan::call('cache:clear');
        Cache::forget('homeproducts');

        // TODO: uncomment to enable THIS before upload
        //   Notification::route('mail', 'stamogiorgoufoteini@gmail.com')
        //     ->notify(new ProductCreatedNotification($product));


        $notification = array(
            'message' => 'Product added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('products.index'))->with($notification);
=======
      $this->validate($request,[
          'title' =>'required|max:100',
          'description' =>'required',
          'sku' =>'required',
          'user_id' => 'nullable|integer|Auth::user()->id',
          'brand_id' => 'nullable',
          'category_id' => '',
          'active' => 'nullable',
          'slider' => 'nullable',
          'product_type' => '',
          'image' => '',
          'color' => '',
          'price' => '',
          ]);

      $product = new Product;
      $product->title = $request->input('title');
      $product->slug = Str::slug($request->input('title'), '-');
      $product->user_id = Auth::user()->id ?? null;
      $product->brand_id = $request->brand_id;
      $product->price = $request->price;
      $product->category_id = $request->category_id;
      $product->image = $request->image;
      $product->sku = $request->sku;
      $product->color = $request->color;
      $product->active = $request->active;
      $product->slider = $request->slider;
      $product->description = $request->description;

      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path("products/" . $filename);
          Image::make($image)->resize(800, 400)->save($location);
          $product->image = $filename;
        }

      $product->save();

      Artisan::call('cache:clear');

      $notification = array(
      'message' => 'Product added successfully',
      'alert-type' => 'info'
      );
      return redirect(route('product.show',$product->id))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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

        return view('admin.products.product', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        //   $this->authorize('update_products', 'App\Product');
        $product = Product::with('company')->find($id);
        $categories = Category::all();
        $colors = Color::all();
        $companies = Company::all();
        $brands = Brand::all();
        return view('admin.products.edit', compact('colors', 'product', 'categories', 'companies', 'brands'));
=======
    //   $this->authorize('update_products', 'App\Product');
      $categories = Category::all();
      $companies = Company::all();
      $brands = Brand::all();
      $product = Product::with('company')->find($id);
        return view('admin.products.edit', compact('product','categories', 'companies', 'brands'));
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

<<<<<<< HEAD
        $this->validate($request, [
            'title' => 'required|max:100',
            'slug' => 'unique:products,title',
            'description' => 'required',
            'active' => 'nullable',
            'slider' => 'nullable',
            'company_id' => 'required',
            'brand_id' => 'nullable',
            'category_id' => '',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => '',
            'price' => 'required',
            // 'sku' => 'required',
            //   'user_id' => 'nullable|integer|Auth::user()->id',
        ]);

        $product = Product::find($product->id);
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-');
        // $product->brand_id = $request->brand_id;
        // $product->category_id = $request->category_id;
        // $product->company_id = $request->company_id;
        $product->active = $request->input('active');
        $product->slider = $request->input('slider');
        // $product->sku = $request->sku;
        $product->link = $request->link;
        $product->description = $request->description;
        //   $product->user_id = Auth::user()->id ?? null;
        // $product->image = $request->image;

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/products/" . $filename);
            $oldfile = $location;
            // dd($oldfile);
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
        //   Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new ProductUpdatedNotification($product));

        $notification = array(
            'message' => 'Product updated successfully',
            'alert-type' => 'info'
        );


        return redirect(route('products.index'))->with($notification);
=======
      $this->validate($request,[
          'title' =>'required|max:100',
          'slug' => 'unique:products,title',
          'description' =>'required',
          'active' => 'nullable',
          'slider' => 'nullable',
          'company_id' => 'required',
          'brand_id' => 'nullable',
          'category_id' => '',
          'image' => '',
          'price' => 'required',
          'sku' => 'required',
          'user_id' => 'nullable|integer|Auth::user()->id',
          ]);

      $product = Product::find($product->id);
      $product->title = $request->title;
      $product->slug = Str::slug($request->title, '-');
    //   $product->user_id = $request->user_id;
      $product->brand_id = $request->brand_id;
      $product->category_id = $request->category_id;
      $product->image = $request->image;
      $product->active = $request->active;
      $product->slider = $request->slider;
      $product->sku = $request->sku;
      $product->description = $request->description;
      $product->user_id = Auth::user()->id ?? null;

      if ($request->hasFile('image')) {
        //add new photo
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path("images/products/" . $filename);
          $oldfile = public_path("images/products/" . $product->image);
          // dd($oldfile);
          if(File::exists($oldfile))
          {
             File::delete($oldfile);
           }
        //    Image::make($header)->resize(800, 400)->save($location);
          $product->image = $filename;
        }

      $product->save();

      Artisan::call('cache:clear');

      $notification = array(
      'message' => 'Product updated successfully',
      'alert-type' => 'info'
      );
      return redirect(route('products.show', $product->id))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        //   $this->authorize('delete_products', 'App\Models\Product');
        Product::where('id', $id)->delete();
        $notification = array(
            'message' => 'User deleted successfully',
            'alert-type' => 'success'
        );
        Artisan::call('cache:clear');

        return redirect(route('products.index'))->with($notification);
=======
    //   $this->authorize('delete_products', 'App\Product');
      Product::where('id',$id)->delete();
      $notification = array(
      'message' => 'User deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');

      return redirect(route('products.index'))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
