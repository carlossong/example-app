<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(3),
            'user_id' => fake()->numberBetween(1,11),
            'description' => fake()->sentence(3),
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(30),
            'like' => fake()->numberBetween(15,60),
            'status' => fake()->numberBetween(1,5),
        ];
    }
}
