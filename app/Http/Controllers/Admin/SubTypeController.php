<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtypes = SubType::orderBy('id', 'DESC')->paginate();
        return view('admin.subtypes.index', compact('subtypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.subtypes.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->authorize('update_categories', 'App\Models\Categories');
        $this->validate($request, [
            'title' => 'required|max:50|unique:categories',
            'slug' => 'unique:subtypes,title',
            'type_id' => 'integer',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $subtype = new SubType();
        $subtype->title = $request->title;
        $subtype->slug = Str::slug($request->title, '-');
        $subtype->type_id = $request->type_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/subtypes/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $subtype->image = $filename;
        }

        $subtype->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'subtype added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('subtypes.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subtype = Subtype::find($id);

        return view('admin.subtypes.subtype', compact('subtype'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $this->authorize('update_subtypes', 'App\Models\SubType');
        $subtype = Subtype::find($id);
        $types = Type::all();
        return view('admin.subtypes.edit', compact('subtype', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->authorize('update_subtypes', 'App\Models\SubType');
        $this->validate($request, [
            'title' => 'required|max:60',
            'slug' => 'unique:categories,title',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type_id' => 'integer',
        ]);

        $subtype = Subtype::find($id);
        $subtype->title = $request->title;
        $subtype->slug = Str::slug($request->title, '-');
        // $subtype->image = $request->image;
        $subtype->type_id = $request->type_id;

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/subtypes/" . $filename);
            $oldfile = public_path("images/subtypes/" . $subtype->image);
            // dd($oldfile);
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $subtype->image = $filename;
        }

        $subtype->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'subtype updated successfully',
            'alert-type' => 'info'
        );

        return redirect(route('subtypes.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          //   $this->authorize('delete_subtypes', 'App\Models\SubType');
      SubType::where('id',$id)->delete();
      $notification = array(
      'message' => 'User deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');

      return redirect(route('subtypes.index'))->with($notification);
    }
}
