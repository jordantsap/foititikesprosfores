<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleSeeder extends Seeder
{
    use HasFactory;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \DB::table('articles')->truncate();
        $blogs = Article::factory()->count(5)->create();
=======

      \DB::table('articles')->truncate();
      $blogs = Article::factory()->count(15)->create();
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
    }
}
