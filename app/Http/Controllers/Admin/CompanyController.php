<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\Type;
use App\Models\User;
use App\Notifications\CompanyCreatedNotification;
use App\Notifications\CompanyUpdatedNotification;
use Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
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
        $users = User::all();
        return view('admin.companies.create', compact('categories', 'users'));
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
            'user_id' => 'nullable',
            'title' => 'required|min:5|max:100',
            'slug' => 'unique:companies,title',
            'active' => 'nullable',
            'password' => 'nullable',
            'category_id' => 'required',
            'manager' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'telephone' => 'required',
            'url' => 'required',
            'email' => 'required|email',
            'afm' => 'required',
            'area' => 'required',
        ));

        $company = new Company();

        $company->user_id = $request->user_id;
        $company->title = $request->title;
        $company->afm = $request->afm;
        $company->area = $request->area;
        $company->url = $request->url;
        $company->active = $request->input('active');
        $company->password = $request->password ?? null;
        $company->slug = Str::slug($request->title, '-');
        $company->category_id = $request->category_id;
        $company->manager = $request->manager;
        $company->telephone = $request->telephone;
        $company->email = $request->email;
        // $company->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/companies/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $company->image = $filename;
        }

        $company->save();

        Artisan::call('cache:clear');

        // Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new CompanyCreatedNotification($company));


        $notification = array(
            'message' => 'Company added successfully',
            'alert-type' => 'info'
        );
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
        $company = Company::find($id);
        $categories = Category::all();
        $users = User::all();
        return view('admin.companies.edit', compact('company', 'categories', 'users'));
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
        $company->title = $request->input('title');
        $company->slug = Str::slug($request->input('title'), '-');
        //  $company->meta_description = $request->input('meta_description');
        //  $company->meta_keywords = $request->input('meta_keywords');
        $company->active = $request->input('active');
        $company->category_id = $request->input('category_id');
        // $company->password = $request->input('password');
        $company->manager = $request->manager;
        $company->telephone = $request->telephone;
        // $company->image = $request->input('image');
        $company->url = strtolower($request->url);
        $company->email = strtolower($request->email);

        if ($request->hasFile('image')) {
            //add new photo
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

        $company->save();

        Artisan::call('cache:clear');

        # TODO: THIS
        // Notification::route('mail', 'stamogiorgoufoteini@gmail.com')->notify(new CompanyUpdatedNotification($company));

        $notification = array(
            'message' => 'Company updated successfully',
            'alert-type' => 'info'
        );


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
        $company = Company::with(['category', 'products'])->find($id);
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
        // $this->authorize('delete_companies', 'App\Models\Company');
        $company = Company::find($id);
        $company->delete();
        $notification = array(
            'message' => 'Company deleted successfully',
            'alert-type' => 'info'
        );
        return back()->with($notification);
    }
}
