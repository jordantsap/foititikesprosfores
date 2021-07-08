<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
        //   $this->authorize('view_companies', 'App\Company');
        $colors = Color::orderBy('id', 'DESC')->paginate(10);
        return view('partner.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.colors.create');
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
            'image' => '',
        ]);

        $color = new Color;
        $color->title = $request->title;
        $color->slug = Str::slug($request->title, '-');
        $color->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/colors/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $color->image = $filename;
        }

        $color->save();
        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Color added successfully',
            'alert-type' => 'info'
        );

        return redirect(route('my-colors.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update_colors', 'App\Models\Color');
        // $color = Color::find($id);
        return abort(404);
        // return view('admin.colors.edit', compact('color'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //   $this->authorize('delete_products', 'App\Product');
      Color::where('id',$id)->delete();
      $notification = array(
      'message' => 'Color deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');

      return redirect(route('my-colors.index'))->with($notification);
    }
}
