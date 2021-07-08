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
            'user_id' => 4,
            // 'description' => $this->faker->name(),
            'telephone' => $this->faker->name(),
            'manager' => $this->faker->name(),
            'area' => $this->faker->name(),
            'url' => $this->faker->name(),
            'afm' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'password' => bcrypt('123456'),
        ];
    }
}
