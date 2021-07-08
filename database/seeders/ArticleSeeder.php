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
        \DB::table('articles')->truncate();
        $blogs = Article::factory()->count(5)->create();
    }
}
