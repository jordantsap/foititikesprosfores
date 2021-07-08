<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

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
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
            'category_id' => rand(1,4),
<<<<<<< HEAD
            'user_id' => 4,
=======
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            // 'description' => $this->faker->name(),
            'telephone' => $this->faker->name(),
            'manager' => $this->faker->name(),
            'area' => $this->faker->name(),
<<<<<<< HEAD
            'url' => $this->faker->name(),
            'afm' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'password' => bcrypt('123456'),
=======
            'website' => $this->faker->name(),
            'afm' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('123456'),
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
        ];
    }
}
