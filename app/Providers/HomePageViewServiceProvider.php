<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Models\SubType;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class HomePageViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /* this is the file that loads all the data that is shown in the megamenu and home views partials */
<<<<<<< HEAD

=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        view()->composer(['partials.sidebar', 'partials.megamenu', 'partner-form'], function ($view) {

            $categories = Cache::rememberForever('categories', function(){

              return Category::with('types', 'subtypes')->orderBy('title', 'ASC')->featured()->get();

            });

            $view->with('categories', $categories);

          });
<<<<<<< HEAD
=======
        view()->composer('partials.slider', function ($view) {

            $products = Product::active()->addToSlider()->get();

            $view->with('products', $products);

          });
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54

        view()->composer('partials.sidebar', function ($view) {

            $companies = Cache::rememberForever('companies', function(){

              return Company::orderBy('title', 'ASC')->active()->get();

            });

            $view->with('companies', $companies);

          });

        view()->composer('home-categories', function ($view) {

            $homecategories = Cache::rememberForever('home-categories', function(){
              return Category::featured()->take(8)->get();
            });
            $view->with('categories', $homecategories);
          });

        view()->composer('home-products', function ($view) {

            $homeproducts = Cache::rememberForever('homeproducts', function(){
              return Product::featured()->take(8)->get();
            });
            $view->with('homeproducts', $homeproducts);
          });

        view()->composer('home-tips', function ($view) {

            $hometips = Cache::rememberForever('hometips', function(){
              return Article::tips()->take(8)->get();
            });
            $view->with('hometips', $hometips);
          });

        view()->composer('home-posts', function ($view) {

            $homeposts = Cache::rememberForever('homeposts', function(){
              return Article::blog()->take(8)->get();
            });
            $view->with('homeposts', $homeposts);
          });
<<<<<<< HEAD

          // NO CACHING
        view()->composer('index', function ($view) {

            $products = Product::active()->addToSlider()->get();

            $view->with('products', $products);

          });
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
