<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::orderBy('id', 'DESC')->paginate(10);
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $color = Color::find($id);

        return view('admin.colors.color', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return abort(404);

        // $this->authorize('update_colors', 'App\Models\Color');
        // $color = Color::find($id);
        // return view('admin.colors.edit', compact('color'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   $this->authorize('create_colors', 'App\Models\Color');
        //  $products = Product::all();
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('update_colors', 'App\Models\Color');
        $this->validate($request, [
            'title' => 'required|max:50|unique:categories',
            'slug' => 'unique:colors,title',
            // 'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $color = new Color;
        $color->title = $request->title;
        $color->slug = Str::slug($request->title, '-');
        // $color->image = $request->image;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path("images/colors/" . $filename);
        //     Image::make($image)->resize(800, 400)->save($location);
        //     $color->image = $filename;
        // }

        $color->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Color added successfully',
            'alert-type' => 'info'
        );

        return redirect(route('colors.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //   $this->authorize('delete_products', 'App\Product');
        Color::where('id', $id)->delete();
        $notification = array(
            'message' => 'Color deleted successfully',
            'alert-type' => 'success'
        );
        Artisan::call('cache:clear');

        return redirect(route('colors.index'))->with($notification);
    }
}
