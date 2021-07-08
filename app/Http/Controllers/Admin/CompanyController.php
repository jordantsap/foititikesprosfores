<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Type;
<<<<<<< HEAD
use App\Models\User;
use App\Notifications\CompanyCreatedNotification;
use App\Notifications\CompanyUpdatedNotification;
use Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
=======
use Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
use Intervention\Image\Facades\Image;
use Str;
use Intervention\Image\ImageManagerStatic as ImageMaker;

class CompanyController extends Controller
{

    /**
     * Display a listing of Company.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //   $this->authorize('view_companies', 'App\Company');
        $companies = Company::orderBy('id', 'DESC')->paginate(10);
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating new Company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //   $this->authorize('create_companies', 'App\Company');
        $categories = Category::all();
<<<<<<< HEAD
        $users = User::all();
        return view('admin.companies.create', compact('categories', 'users'));
=======
        return view('admin.companies.create', compact('categories'));
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Store a newly created Company in storage.
     *
     * @param  \App\Http\Requests\StoreCompaniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
<<<<<<< HEAD
            'user_id' => 'nullable',
            'title' => 'required|min:5|max:100',
            'slug' => 'unique:companies,title',
            'active' => 'nullable',
            'password' => 'nullable',
=======
            'user_id' => 'nullable|integer|Auth::user()->id',
            'title' => 'required|min:5|max:100',
            'slug' => 'unique:companies,title',
            'active' => 'nullable',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'category_id' => 'required',
            'manager' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'telephone' => 'required',
<<<<<<< HEAD
            'url' => 'required',
            'email' => 'required|email',
            'afm' => 'required',
            'area' => 'required',
=======
            'website' => '',
            'email' => 'required|email',
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        ));

        $company = new Company();

<<<<<<< HEAD
        $company->user_id = $request->user_id;
        $company->title = $request->title;
        $company->afm = $request->afm;
        $company->area = $request->area;
        $company->url = $request->url;
        $company->active = $request->input('active');
        $company->password = $request->password ?? null;
=======
        $company->user_id = Auth::user()->id;
        $company->title = $request->title;
        $company->active = $request->active;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $company->slug = Str::slug($request->title, '-');
        $company->category_id = $request->category_id;
        $company->manager = $request->manager;
        $company->telephone = $request->telephone;
<<<<<<< HEAD
        $company->email = $request->email;
        // $company->image = $request->image;
=======
        $company->website = $request->website;
        $company->email = $request->email;
        $company->image = $request->image;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/companies/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $company->image = $filename;
<<<<<<< HEAD
        }
=======
          }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        $company->save();

        Artisan::call('cache:clear');

<<<<<<< HEAD
        // Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new CompanyCreatedNotification($company));


=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $notification = array(
            'message' => 'Company added successfully',
            'alert-type' => 'info'
        );
<<<<<<< HEAD

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return redirect(route('companies.show', $company->id))->with($notification);
    }


    /**
     * Show the form for editing Company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //   $this->authorize('update_companies', 'App\Company');
<<<<<<< HEAD
        $company = Company::find($id);
        $categories = Category::all();
        $users = User::all();
        return view('admin.companies.edit', compact('company', 'categories', 'users'));
=======
        $categories = Category::all();
        $company = Company::find($id);
        return view('admin.companies.edit', compact('company', 'categories'));
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }

    /**
     * Update Company in storage.
     *
     * @param  \App\Http\Requests\UpdateCompaniesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //   $this->authorize('update_companies', 'App\Company');
        $this->validate($request, array(
<<<<<<< HEAD
            'user_id' => 'nullable',
            'title' => 'required|min:5|max:100',
            'active' => 'nullable',
            'slug' => 'unique:companies,title',
            'password' => 'nullable',
            'category_id' => 'required',
            'manager' => 'required',
            'telephone' => 'required',
            'url' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        $company = Company::find($id);

        $company->user_id = $request->user_id;
=======
            'user_id' => 'nullableinteger|Auth::user()->id',
            'title' => 'required|min:5|max:100',
            'active' => '',
            'slug' => 'unique:companies,title',
            'category_id' => 'required',
            'manager' => 'required',
            'telephone' => 'required',
            'website' => '',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        $company = Company::find($id);

        $company->user_id = Auth::user()->id;
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $company->title = $request->input('title');
        $company->slug = Str::slug($request->input('title'), '-');
        //  $company->meta_description = $request->input('meta_description');
        //  $company->meta_keywords = $request->input('meta_keywords');
<<<<<<< HEAD
        $company->active = $request->input('active');
        $company->category_id = $request->input('category_id');
        // $company->password = $request->input('password');
        $company->manager = $request->manager;
        $company->telephone = $request->telephone;
        // $company->image = $request->input('image');
        $company->url = strtolower($request->url);
=======
        $company->active = $request->active;
        $company->category_id = $request->input('category_id');
        $company->manager = $request->manager;
        $company->telephone = $request->telephone;
        $company->image = $request->input('image');
        $company->website = strtolower($request->website);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $company->email = strtolower($request->email);

        if ($request->hasFile('image')) {
            //add new photo
<<<<<<< HEAD
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/companies/" . $filename);
            $oldfile = $location;
            // dd($oldfile);
            if (File::exists($oldfile)) {
                File::delete($oldfile);
            }
            Image::make($image)->resize(800, 400)->save($location);
            $company->image = $filename;
        }
=======
              $image = $request->file('image');
              $filename = time() . '.' . $image->getClientOriginalExtension();
              $location = public_path("images/companies/" . $filename);
              $oldfile = public_path("images/companies/" . $company->image);
              // dd($oldfile);
              if(File::exists($oldfile))
              {
                 File::delete($oldfile);
               }
               Image::make($image)->resize(800, 400)->save($location);
              $company->image = $filename;
            }
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        $company->save();

        Artisan::call('cache:clear');

<<<<<<< HEAD
        # TODO: THIS
        // Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new CompanyUpdatedNotification($company));

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $notification = array(
            'message' => 'Company updated successfully',
            'alert-type' => 'info'
        );
<<<<<<< HEAD


=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return redirect(route('companies.show', $company->id))->with($notification);
    }

    /**
     * Display Company.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //   $this->authorize('view_companies', 'App\Company');
<<<<<<< HEAD
        $company = Company::with(['category', 'products'])->find($id);
=======
        $company = Company::has('category')->findOrFail($id);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        return view('admin.companies.company', compact('company'));
    }

    /**
     * Remove Company from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        // $this->authorize('delete_companies', 'App\Models\Company');
=======
        $this->authorize('delete_companies', 'App\Company');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        $company = Company::find($id);
        $company->delete();
        $notification = array(
            'message' => 'Company deleted successfully',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }
}
