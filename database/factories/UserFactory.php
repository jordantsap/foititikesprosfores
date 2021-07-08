<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
<<<<<<< HEAD
            'password' => bcrypt('123456'),
=======
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
>>>>>>> 72f5bd286446c606870d889bbc2aae65f481cb54
            'remember_token' => Str::random(10),

            // 'title' => $this->faker->name(),
            // 'slug' => $this->faker->slug(),
            // 'active' => '1',
            // 'image' => $this->faker->imageUrl($width = 640, $height = 480),
            // 'category_id' => rand(1,4),
            // 'telephone' => $this->faker->name(),
            // 'manager' => $this->faker->name(),
            // 'area' => $this->faker->name(),
            // 'website' => $this->faker->name(),
            // 'afm' => $this->faker->name(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => null,
    //         ];
    //     });
    // }
}
