<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use App\Notifications\NewUserNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    /**
     * Store a newly created Company in storage.
     *
     * @param  \App\Http\Requests\StoreCompaniesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|min:5|max:100',
            'manager' => 'required',
            'slug' => 'unique:companies,title',
            'active' => 'nullable',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
            'category_id' => 'required',
            'user_id' => '',
            'afm' => 'required',
            'telephone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'telephone' => 'required',
            'area' => 'required',
            'url' => 'required',
        ));

        $company = new Company();

        $company->title = $request->title;
        $company->slug = Str::slug($request->title, '-');
        // $company->active = $request->active;
        $company->category_id = $request->category_id;
        $company->email = $request->email;
        // $company->user_id = $user;
        // $company->password = Hash::make($request->password);
        $company->manager = $request->manager;
        $company->telephone = $request->telephone;
        $company->area = $request->area;
        $company->url = $request->url;
        $company->afm = $request->afm;
        // $company->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path("images/companies/" . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $company->image = $filename;
        }

        $user = User::create([
            'username' => $request->title,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('Partner');

        event(new Registered($user)); // https://dev.to/jeroenvanrensen/manual-auth-in-laravel-email-verification-1g8c

        $company->user_id = $user->id;

        $company->save();

        /* setup the email acccounts for notification
        * mine, moridis and blogger
        */
        $emails = [
            'jordantsap@hotmail.gr',
            'cmoridis@gmail.com',
            'stamogiorgoufoteini@gmail.com'
        ];

        Notification::route('mail', $emails)->notify(new NewUserNotification($user));

        $notification = array(
            'message' => "Επιτυχής Δημιουργία της Επιχείρησής σας, Επιβεβαιώστε την στο λογαριασμο σας για να συνεχίσετε",
            'alert-type' => 'info'
        );

        // Artisan::call('cache:clear');
        // Cache::flush();
        Cache::forget('companies');

        return redirect(url('/'))->with($notification);
    }

    public function index()
    {
        $companies = Company::with(['category'])
            ->active()->paginate(8);

        return view('companies.index', compact('companies'));
    }

    public function show(Company $company)
    {
        $company = Company::with('products')->find($company->id);
        // $type =  Type::with('products')->where('id', $id)->first();

        return view('companies.show', compact('company'));
    }

    public function category(Category $category)
    {
        $category = Category::with('companies')->find($category->id);
        // $type =  Type::with('products')->where('id', $id)->first();

        return view('companies.show', compact('company'));
    }
}
