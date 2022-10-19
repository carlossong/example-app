<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => fake()->numberBetween(1,30),
            'user_id' => fake()->numberBetween(1,11),
            'like' => fake()->numberBetween(1,100),
            'content' => fake()->sentence(10),
        ];
    }
}
