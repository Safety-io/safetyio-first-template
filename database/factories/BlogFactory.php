<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1,Category::all()->count()),
            'title' => fake()->sentence(),
            'image' => fake()->imageUrl(),
            'content' => fake()->paragraph(),
            'auteur' => fake()->name(),
            'picture' => fake()->imageUrl(),
            'grade' => fake()->numberBetween(1,5),
            'read_time' => fake()->numberBetween(1,10),
        ];
    }
}
