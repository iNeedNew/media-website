<?php

namespace Database\Factories;

use App\Models\PostCategory;
use App\Models\User;
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
    public function definition(): array
    {
        return [
            'user_id' => User::query()->pluck('id')->random(),
            'category_id' => PostCategory::query()->pluck('id')->random(),
            'title' => fake()->text(50),
            'content' => fake()->randomHtml(),
            'published' => 1
        ];
    }
}
