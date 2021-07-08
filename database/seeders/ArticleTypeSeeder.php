<?php

namespace Database\Seeders;

use App\Models\ArticleType;
use Illuminate\Database\Seeder;

class ArticleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('article_types')->truncate();
<<<<<<< HEAD
        ArticleType::insert([
            'title' => 'Tips',
        ]);
        ArticleType::insert([
            'title' => 'Blog',
        ]);
        ArticleType::insert([
            'title' => 'Support',
        ]);
=======
      ArticleType::insert([
        'title' => 'Tips',
      ]);
      ArticleType::insert([
        'title' => 'Blog',
      ]);
      ArticleType::insert([
        'title' => 'Support',
      ]);
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
