<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

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
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        ];
    }
}
