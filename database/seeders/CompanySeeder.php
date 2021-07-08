<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('companies')->truncate();
<<<<<<< HEAD
      $blogs = Company::factory()->count(1)->create();
=======
      $blogs = Company::factory()->count(15)->create();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
