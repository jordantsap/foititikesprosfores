<?php

<<<<<<< HEAD
Auth::routes(['verify' => true, 'register' => false]);

Route::get('/user', 'HomeController@index')->name('userdashboard');

=======
Auth::routes(['verify' => true]);

Route::get('/user', 'HomeController@index')->name('userdashboard');

// pages routing...
Route::get('/', function () {
  return view('index');
});

Route::get('/blog', function () {
  return view('pages.blog');
});

>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
Route::get('blog', "ArticleController@index");

Route::get('article/{article}', 'ArticleController@show')->name('article');

Route::post('partner', 'CompanyController@store')->name('partner.store');

Route::get('categories', 'ProductController@index')->name('categories');
<<<<<<< HEAD

Route::get('category/{category}', "ProductController@category")->name('category');

Route::get('types/{type}', 'ProductController@type')->name('types');

Route::get('market/{company}', "ProductController@company")->name('company.show');

Route::get('products', "ProductController@index");//->name('products.index');

Route::get('product/{product}', "ProductController@show")->name('product');

Route::get('filterLower', "ProductController@filterLower")->name('lowerprice');

Route::get('pricerange1100', "ProductController@pricerange1100")->name('pricerange1100');

Route::get('pricerange101200', "ProductController@pricerange101200")->name('pricerange101200');

Route::get('partner-list', 'CompanyController@index')->name('partner-list');

// pages routing...
Route::get('/', function () {
    return view('index');
  });

  Route::get('/blog', function () {
    return view('pages.blog');
  });
=======
Route::get('category/{category}', "ProductController@category")->name('category');
Route::get('types/{type}', 'ProductController@type')->name('types');
Route::get('market/{company}', "ProductController@company")->name('company');

Route::get('products', "ProductController@index")->name('products.index');
Route::get('product/{product}', "ProductController@show")->name('product');
Route::get('filterLower', "ProductController@filterLower")->name('lowerprice');
Route::get('pricerange1100', "ProductController@pricerange1100")->name('pricerange1100');
Route::get('pricerange101200', "ProductController@pricerange101200")->name('pricerange101200');

Route::get('partner-list', 'CompanyController@index')->name('companies-category');

>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

Route::get('partner-form', function () {
  return view('partner-form');
});
<<<<<<< HEAD
=======
// Route::post('partner/register', 'CompanyController@create')->name('partner.register');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

Route::get('whoweare', function () {
  return view('pages.whoweare');
});
Route::get('contact', function () {
  return view('pages.contact');
});

<<<<<<< HEAD
Route::post('contact', 'ContactController@postcontact')->name('postcontact');
=======
Route::post('contact', [App\Http\Controllers\ContactController::class, 'postcontact'])->name('postcontact');
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
