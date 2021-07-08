<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

<<<<<<< HEAD
    // public function users()
    // {
    //   $users = DB::table('users')->get();
    //   return view('auth.users.index', compact('users'));
    // }
    // public function blog()
    // {
    //   $blogs = DB::table('blogs')->get();
    //   return view('auth.blog.index', compact('blogs'));
    // }
    // public function companies()
    // {
    //   $user_id = auth()->user()->id;
    //   $user = User::find($user_id);
    //     return view('auth.companies')->with('companies', $user->companies);
    // }
    // public function products()
    // {
    //   $user_id = auth()->user()->id;
    //   $user = User::find($user_id);
    //     return view('auth.products')->with('products', $user->products);
    // }
=======
    public function users()
    {
      $users = DB::table('users')->get();
      return view('auth.users.index', compact('users'));
    }
    public function blog()
    {
      $blogs = DB::table('blogs')->get();
      return view('auth.blog.index', compact('blogs'));
    }
    public function companies()
    {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
        return view('auth.companies')->with('companies', $user->companies);
    }
    public function products()
    {
      $user_id = auth()->user()->id;
      $user = User::find($user_id);
        return view('auth.products')->with('products', $user->products);
    }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
}
