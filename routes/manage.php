<?php
// administrator prefix in RouteServiceProvider
Route::middleware(['auth', 'verified'])->group(function () {
    //   Route::get('manage', 'Admin\HomeController@index')->name('manage');
    // Route::resource('adverts', 'Admin\AdvertController');
    Route::get('dashboard', 'Admin\HomeController@index')->name('dashboard');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('permissions', 'Admin\PermissionController');
    Route::resource('users', 'Admin\UserController');
    Route::resource('newsletters', 'Admin\NewsletterController');
    Route::resource('articles', 'Admin\ArticleController');
    Route::resource('companies', 'Admin\CompanyController');
    Route::resource('products', 'Admin\ProductController');


    Route::resource('categories', 'Admin\CategoryController');

    //   Route::patch('categories/{category}', 'Admin\CategoryController@destroy')->name('categories.destroy');
    Route::resource('types', 'Admin\TypeController');
    Route::resource('subtypes', 'Admin\SubTypeController');
    Route::resource('brands', 'Admin\BrandController');
    Route::resource('colors', 'Admin\ColorController'); //->only(['index','destroy']);

    // partner routes
    Route::get('my-company/{company}', 'Partner\CompanyController@show')->name('my.company.show');

    Route::get('my-company/{company}/edit', 'Partner\CompanyController@edit')->name('my.company.edit');

    Route::post('my-company/{company}', 'Partner\CompanyController@update')->name('my.company.update');

    Route::get('my-product/create', 'Partner\ProductController@create')->name('my.products.create');

    Route::get('my-product/{product}', 'Partner\ProductController@show')->name('my.products.show');

    Route::get('my-product/{product}/edit', 'Partner\ProductController@edit')->name('my.products.edit');

    Route::post('my-product/{product}', 'Partner\ProductController@update')->name('my.products.update');

    Route::post('my-product', 'Partner\ProductController@store')->name('my.products.store');

    Route::resource('my-brands', 'Partner\BrandController');

    Route::resource('my-colors', 'Partner\ColorController');

    // ADMIN CACHE CLEAR ROUTES
    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return "Artisan::call('cache:clear')";
    });

    Route::get('/clear-allcache', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        return "Artisan::call('cache,view,route:clear')";
    });
});
