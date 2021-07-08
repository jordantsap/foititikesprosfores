<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'active' => '1',
            'featured' => rand(0,1),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'articletype_id' => rand(1,2),
            'description' => $this->faker->name(),
        ];
    }
}
