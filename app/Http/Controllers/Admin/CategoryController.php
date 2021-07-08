<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Type;
use Artisan;
<<<<<<< HEAD
use DB;
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('view_roles', 'App\Role');
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->authorize('create_types', 'App\Model\Type');

        return view('admin.categories.create');
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
            'slug' => 'unique:categories,title',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
=======
        $this->validate($request, [
            'title' => 'required|max:50|unique:categories',
            'slug' => 'unique:categories,title',
            'image' => '',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        ]);
        $category = new Category;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title, '-');
<<<<<<< HEAD
=======
        $category->image = $request->image;
        $category->save();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
<<<<<<< HEAD
            $location = public_path("images/categories/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $category->image = $filename;
          }

        $category->save();
=======
            $location = public_path("categories/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $category->image = $filename;
        }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Category added successfully',
            'alert-type' => 'info'
        );
<<<<<<< HEAD
        return redirect(route('categories.index'))->with($notification);
=======
        return redirect(route('categories.index', $category->id))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function show($id)
    {

        $category = Category::with('products')->find($id);
=======
    public function show(Category $category)
    {
        //   $this->authorize('view_roles', Role::class);
        $category = Category::find($category->id);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        return view('admin.categories.category', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        // $this->authorize('update_categories', 'App\Models\Categories');
=======
        //   $this->authorize('update_roles', 'App\Role');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
<<<<<<< HEAD
        // $this->authorize('update_categories', 'App\Models\Categories');
        $this->validate($request, [
            'title' => 'max:50',
            'slug' => 'unique:categories,title',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
=======
        // $this->authorize('update_roles', 'App\Role');
        $this->validate($request, [
            'title' => 'max:50',
            'slug' => 'unique:categories,title',
            'image' => '',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        ]);

        $category = Category::find($id);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title, '-');
<<<<<<< HEAD
=======
        $category->image = $request->image;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/categories/" . $filename);
<<<<<<< HEAD
            $oldfile = $location; //public_path("images/categories/" . $category->image);

=======
            $oldfile = public_path("images/categories/" . $category->image);
            // dd($oldfile);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $category->image = $filename;
        }

        $category->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Category updated successfully',
            'alert-type' => 'info'
        );
<<<<<<< HEAD

=======
        Artisan::call('cache:clear');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return redirect(route('categories.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function destroy($id)
    {
        //   $this->authorize('delete_categories', 'App\Models\Category');
      DB::table('categories')->where('id',$id)->delete();

      $notification = array(
      'message' => 'Category deleted successfully',
      'alert-type' => 'success'
      );
      Artisan::call('cache:clear');
      Artisan::call('view:clear');
      Artisan::call('route:clear');

      return redirect(route('categories.index'))->with($notification);
=======
    public function destroy(Category $category)
    {
        //
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
