<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Notifications\NewCompanyRequestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

<<<<<<< HEAD
class Company22Controller extends Controller
=======
class CompanyController extends Controller
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
{
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::active()->paginate(10);
        return view('partner-list', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|min:5|max:100',
            'slug' => 'unique:companies,title',
            'type_id' => '',
            // 'logo' => 'sometimes|image',
            'telephone' => 'required',
            'manager' => 'required',
            'url' => 'string|required',
            'area' => 'required',
            'afm' => 'required',
            'email' => 'required|email',
            // 'active' => '',
            // 'description' => 'required|min:5',
        ));
        // start new company record for the db

             $company = new Company;

             $company->title = $request->title;
             $company->slug = Str::slug($request->title, '-');
             $company->type_id = rand(1, 10);
            //  $company->active = $request->active;
             $company->manager = $request->manager;
            //  $company->logo = $request->logo;
             $company->url = $request->url;
             $company->telephone = $request->telephone;
             $company->email = $request->email;
            //  $company->description = $request->description;

            //  if ($request->hasFile('header')) {
            //      $header = $request->file('header');
            //      $filename = time() . '.' . $header->getClientOriginalExtension();
            //      $location = public_path("images/companies/" . $filename);
            //     //  Image::make($header)->resize(800, 400)->save($location);
            //      $company->header = $filename;
            //    } else {
            //      $company->header = 'noimage.jpg';
            //    }

            // toaster alert is next

          $company->save();
          // Send notification email to the administrator or pick any email account you want to use
          Notification::route('mail', 'jordantsap@hotmail.gr')->notify(new NewCompanyRequestNotification($company));

          $notification = array(
          'message' => 'Ευχαριστούμε για το ενδιαφέρον σας, Θα είμαστε σε εικοινωνία!!!',
          'alert-type' => 'info'
          );

          return redirect(url('/'))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = Company::with(['products','category'])->find($company->id);

    return view('companies.show', compact('company'));
    }

}
