<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleType;
use Auth;
use Illuminate\Support\Facades\Artisan;
use Image;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->authorizeResource(Article::class, 'article');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::with('articletype')->orderBy('id', 'DESC')->paginate(10);

        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   $this->authorize('create_articles', 'App\Post');
        $types = ArticleType::all();
        return view('admin.articles.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'image' => 'nullable',
<<<<<<< HEAD
            'articletype_id' => 'required',
            'slug' => 'unique:articles,title',
=======
            'article_type_id' => 'required',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'active' => '',
            'description' => 'required',
            //   'meta_description'=> 'required',
            //   'meta_keywords'=> 'required',
        ]);

        $article = new Article;
        $article->title = $request->title;
        $article->slug = Str::slug($article->title);
<<<<<<< HEAD
        $article->articletype_id = $request->articletype_id;
=======
        $article->image = $request->input('image');
        $article->article_type_id = $request->article_type_id;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $article->active = $request->input('active');
        $article->description = $request->input('description');
        //   $article->meta_description = $request->input('meta_description');
        //   $article->meta_keywords = $request->input('meta_keywords');
        //   $article->user_id = Auth::user()->id;
<<<<<<< HEAD
        // $article->image = $request->input('image');
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
<<<<<<< HEAD
            $location = public_path("images/articles/" . $filename);
=======
            $location = public_path("articles/" . $filename);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            Image::make($image)->resize(800, 400)->save($location);
            $article->image = $filename;
          }

        $article->save();

        Artisan::call('cache:clear');

        $notification = array(
<<<<<<< HEAD
            'message' => 'Article added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('articles.index'))->with($notification);
=======
            'message' => 'Post added successfully',
            'alert-type' => 'info'
        );
        return redirect(route('admin.articles.article'))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
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
        $article = Article::with('articletype')->findOrFail($id);
        return view('admin.articles.article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //   $this->authorize('update_articles', App\Post::class);
        $article = Article::findOrFail($id);
        $types = ArticleType::all();
        return view('admin.articles.edit', compact('article', 'types'));
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
<<<<<<< HEAD
            'articletype_id' => 'required|integer',
            'active' => 'nullable',
            // 'slug' => 'unique:articles,title',
            'image' => 'image',
            'description' => 'required',
            // NO slug in update to keep the url
=======
            'article_type_id' => 'required|integer',
            'active' => 'nullable',
            'image' => 'image',
            'description' => 'required',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            //  'meta_description'=> 'required',
            //  'meta_keywords'=> 'required',
        ]);

        $article = Article::find($id);
        $article->title = $request->title;
        //  $article->meta_description = $request->input('meta_description');
        //  $article->meta_keywords = $request->input('meta_keywords');
<<<<<<< HEAD
        // $article->slug = Str::slug($article->title);
        $article->articletype_id = $request->articletype_id;
=======
        $article->slug = Str::slug($article->title);
        $article->article_type_id = $request->article_type_id;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $article->active = $request->input('active');
        $article->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/articles/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $article->image = $filename;
          }

        $article->save();

        Artisan::call('cache:clear');

        $notification = array(
<<<<<<< HEAD
            'message' => 'Article updated successfully',
            'alert-type' => 'info'
        );
        return redirect(route('articles.index'))->with($notification);
=======
            'message' => 'Post updated successfully',
            'alert-type' => 'info'
        );
        return redirect(route('articles.show', $article->id))->with($notification);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete_articles', App\Post::class);
        $article = Article::find($id);
        $article->delete();
        $notification = array(
<<<<<<< HEAD
            'message' => 'Article deleted successfully',
            'alert-type' => 'info'
        );
        Artisan::call('cache:clear');

=======
            'message' => 'Post deleted successfully',
            'alert-type' => 'info'
        );
        Artisan::call('cache:clear');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return back()->with($notification);
    }
}
