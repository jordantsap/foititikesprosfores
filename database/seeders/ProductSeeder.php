<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      \DB::table('products')->truncate();
<<<<<<< HEAD
      $blogs = Product::factory()->count(1)->create();
=======
      $blogs = Product::factory()->count(10)->create();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
