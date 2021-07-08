<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
=======
use Artisan;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $brands = Brand::all();
=======
        $brands =Brand::all();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
=======
        // $brands =Brand::all();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' =>'required|max:50|unique:brands',
            'slug' => 'unique:brands,title',
<<<<<<< HEAD
            'active' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
=======
            'image' => '',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            ]);

        $brand = new Brand;
        $brand->title = $request->title;
<<<<<<< HEAD
        $brand->slug = \Str::slug($request->title, '-');
        // $brand->image = $request->image;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path("images/brands/" . $filename);
        //     Image::make($image)->resize(800, 400)->save($location);
        //     // Storage::put($image)->save($location);
        //     $brand->image = $filename;
        // }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/brands/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $brand->image = $filename;
          }

        $brand->save();

=======
        $brand->image = $request->image;
        $brand->slug = \Str::slug($request->title, '-');
        $brand->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("brands/" . $filename);
          //   Image::make($header)->resize(800, 400)->save($location);
            // Storage::put($image)->save($location);
            $brand->image = $filename;
          }

>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        Artisan::call('cache:clear');

        $notification = array(
        'message' => 'Brand added successfully',
        'alert-type' => 'info'
        );
<<<<<<< HEAD

        return redirect(route('brands.index'))->with($notification);
=======
        Artisan::call('cache:clear');
        return redirect(route('brands.index',$brand->id))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($id)
    {
        //   $this->authorize('view_articles', 'App\Post');
        //   $type = ArticleType::all();
        $brand = Brand::findOrFail($id);
        return view('admin.brands.brand', compact('brand'));
=======
    public function show(Brand $brand)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit($id)
    {
        // $this->authorize('update_categories', 'App\Models\Categories');
        $brand = Brand::find($id);
        return view('admin.brands.edit', compact('brand'));
=======
    public function edit(Brand $brand)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'slug' => 'unique:companies,title',
            'active' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //  'meta_description'=> 'required',
            //  'meta_keywords'=> 'required',
        ]);

        $brand = Brand::find($id);
        $brand->title = $request->title;
        //  $brand->meta_description = $request->input('meta_description');
        //  $brand->meta_keywords = $request->input('meta_keywords');
        $brand->slug = Str::slug($brand->title);
        $brand->active = $request->input('active');
        // $brand->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/brands/" . $filename);
            $oldfile = $location;

            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $brand->image = $filename;
          }

        $brand->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Brand updated successfully',
            'alert-type' => 'info'
        );
        return redirect(route('brands.index'))->with($notification);
=======
    public function update(Request $request, Brand $brand)
    {
        Artisan::call('cache:clear');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($id)
    {
        $this->authorize('delete_brands', App\Post::class);
        $brand = Brand::find($id);
        $brand->delete();
        $notification = array(
            'message' => 'Brand deleted successfully',
            'alert-type' => 'info'
        );
        Artisan::call('cache:clear');
        return back()->with($notification);
=======
    public function destroy(Brand $brand)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
