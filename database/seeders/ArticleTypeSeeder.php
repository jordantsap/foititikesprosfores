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
        ArticleType::insert([
            'title' => 'Tips',
        ]);
        ArticleType::insert([
            'title' => 'Blog',
        ]);
        ArticleType::insert([
            'title' => 'Support',
        ]);
    }
}
