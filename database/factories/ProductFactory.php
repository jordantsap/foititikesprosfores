<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

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
            'active' => rand(0,1),
            'featured' => rand(0,1),
            'link' => '',
            'slider' => 1,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'category_id' => rand(1, 4),
            'color_id' => rand(1, 4),
            'user_id' => 4,
            'company_id' => 1,
            'brand_id' => rand(1,4),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->biasedNumberBetween($min = 1, $max = 20000),
            'link' => $this->faker->url,
        ];
    }
}
