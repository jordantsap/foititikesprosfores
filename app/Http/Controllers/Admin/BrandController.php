<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'active' => 'nullable',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

        $brand = new Brand;
        $brand->title = $request->title;
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

        Artisan::call('cache:clear');

        $notification = array(
        'message' => 'Brand added successfully',
        'alert-type' => 'info'
        );

        return redirect(route('brands.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //   $this->authorize('view_articles', 'App\Post');
        //   $type = ArticleType::all();
        $brand = Brand::findOrFail($id);
        return view('admin.brands.brand', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update_categories', 'App\Models\Categories');
        $brand = Brand::find($id);
        return view('admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
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
    }
}
