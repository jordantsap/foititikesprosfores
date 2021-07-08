<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Type;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
=======
use Illuminate\Support\Facades\Artisan;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

class SubTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $subtypes = SubType::orderBy('id', 'DESC')->paginate();
        return view('admin.subtypes.index', compact('subtypes'));
=======
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $types = Type::all();
        return view('admin.subtypes.create', compact('types'));
=======
        //
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
=======
        Artisan::call('cache:clear');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($id)
    {
        $subtype = Subtype::find($id);

        return view('admin.subtypes.subtype', compact('subtype'));
=======
    public function show(SubType $subType)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit($id)
    {
        // $this->authorize('update_subtypes', 'App\Models\SubType');
        $subtype = Subtype::find($id);
        $types = Type::all();
        return view('admin.subtypes.edit', compact('subtype', 'types'));
=======
    public function edit(SubType $subType)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
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
=======
    public function update(Request $request, SubType $subType)
    {
        //
        Artisan::call('cache:clear');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubType  $subType
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
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
=======
    public function destroy(SubType $subType)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
