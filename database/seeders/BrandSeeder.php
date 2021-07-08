<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->truncate();
<<<<<<< HEAD
        $blogs = Brand::factory()->count(2)->create();
=======
      $blogs = Brand::factory()->count(10)->create();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
