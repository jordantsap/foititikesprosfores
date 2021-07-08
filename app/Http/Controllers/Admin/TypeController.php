<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
=======
use Illuminate\Support\Facades\Artisan;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::orderBy('id', 'DESC')->paginate(10);
    //   dd($articles);
      return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $categories = Category::all();
        return view('admin.types.create', compact('categories'));
=======
        return view('admin.types.create');//, compact('types'));
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
            'category_id' => 'integer',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $type = new Type();
        $type->title = $request->title;
        $type->slug = Str::slug($request->title, '-');
        $type->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/types/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $type->image = $filename;
            dd($filename);
        }

        $type->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Type added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('types.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = Type::where('id', $id)->firstOrFail();

        return view('admin.types.type', compact('type'));

    }
=======
        //
        Artisan::call('cache:clear');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Type  $type
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Type $type)
    // {
    //     $type = Type::with('products')->where('id', $type->id)->firstOrFail();

    //     return view('products.type', compact('type'));

    // // return view('companies.show', compact('company'));
    // }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit($id)
    {
        $type = Type::find($id);
        $categories = Category::all();
        return view('admin.types.edit', compact('type', 'categories'));
=======
    public function edit(Type $type)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        // $this->authorize('update_subtypes', 'App\Models\SubType');
        $this->validate($request, [
            'title' => 'required|max:60',
            'slug' => 'unique:types,title',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'integer',
        ]);

        $type = Type::find($id);
        $type->title = $request->title;
        $type->slug = Str::slug($request->title, '-');
        $type->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/types/" . $filename);
            $oldfile = $location;//public_path("images/types/" . $type->image);
            // dd($oldfile);
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $type->image = $filename;
        }

        $type->save();

        $notification = array(
            'message' => 'Type updated successfully',
            'alert-type' => 'info'
        );
        Artisan::call('cache:clear');
        return redirect(route('types.index'))->with($notification);
=======
    public function update(Request $request, Type $type)
    {
        //
        Artisan::call('cache:clear');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($id)
    {
         //   $this->authorize('delete_subtypes', 'App\Models\SubType');
      Type::where('id',$id)->delete();
      $notification = array(
      'message' => 'User deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');

      return redirect(route('types.index'))->with($notification);
=======
    public function destroy(Type $type)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
