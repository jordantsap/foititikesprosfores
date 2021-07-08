<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Type;
use Artisan;
use DB;
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
        // $this->authorize('update_categories', 'App\Models\Categories');
        $this->validate($request, [
            'title' => 'required|max:50|unique:categories',
            'slug' => 'unique:categories,title',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $category = new Category;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title, '-');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/categories/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $category->image = $filename;
          }

        $category->save();

        Artisan::call('cache:clear');

        $notification = array(
            'message' => 'Category added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('categories.index'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $category = Category::with('products')->find($id);

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
        // $this->authorize('update_categories', 'App\Models\Categories');
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
        // $this->authorize('update_categories', 'App\Models\Categories');
        $this->validate($request, [
            'title' => 'max:50',
            'slug' => 'unique:categories,title',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::find($id);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title, '-');

        if ($request->hasFile('image')) {
            //add new photo
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/categories/" . $filename);
            $oldfile = $location; //public_path("images/categories/" . $category->image);

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
        return redirect(route('categories.index'))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
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
    }
}
