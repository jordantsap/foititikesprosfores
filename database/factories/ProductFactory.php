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
<<<<<<< HEAD
            'active' => rand(0,1),
            'featured' => rand(0,1),
=======
            'active' => '1',
            'featured' => rand(0,1),
            'sku' => $this->faker->name(),
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'link' => '',
            'slider' => 1,
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'category_id' => rand(1, 4),
<<<<<<< HEAD
            'color_id' => rand(1, 4),
            'user_id' => 4,
            'company_id' => 1,
=======
            'color' => 'Μαύρο',
            'field_id' => rand(1, 4),
            'value_id' => rand(1, 4),
            'type_id' => $this->faker->biasedNumberBetween($min = 1, $max = 8),
            'company_id' => rand(1, 7),
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'brand_id' => rand(1,4),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->biasedNumberBetween($min = 1, $max = 20000),
            'link' => $this->faker->url,
        ];
    }
}
