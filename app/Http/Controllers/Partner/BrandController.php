<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
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
        //   $this->authorize('view_companies', 'App\Company');
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);
        return view('partner.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.brands.create');
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
            'image' => 'nullable',
            ]);

        $brand = new Brand;
        $brand->title = $request->title;
        $brand->slug = \Str::slug($request->title, '-');
        $brand->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/brands/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            // Storage::put($image)->save($location);
            $brand->image = $filename;
        }

        $brand->save();

        Artisan::call('cache:clear');

        $notification = array(
        'message' => 'Brand added successfully',
        'alert-type' => 'info'
        );

        return redirect(route('my-brands.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //   $this->authorize('view_articles', 'App\Post');
        //   $type = ArticleType::all();
        $brand = Brand::findOrFail($id);
        return view('partner.brands.brand', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update_categories', 'App\Models\Categories');
        $brand = Brand::find($id);
        return view('partner.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:100',
            'slug' => 'unique:companies,title',
            'active' => 'nullable',
            'image' => 'nullable',
            //  'meta_description'=> 'required',
            //  'meta_keywords'=> 'required',
        ]);

        $brand = brand::find($id);
        $brand->title = $request->title;
        //  $brand->meta_description = $request->input('meta_description');
        //  $brand->meta_keywords = $request->input('meta_keywords');
        $brand->slug = Str::slug($brand->title);
        $brand->active = $request->input('active');
        $brand->image = $request->image;

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
        return redirect(route('my-brands.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete_brands', App\Models\Brand::class);
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
