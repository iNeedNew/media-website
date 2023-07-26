<?php

namespace Database\Factories;

use App\Models\MediaContent;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MediaContentPost>
 */
class MediaContentPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_id' => Post::query()->pluck('id')->random(),
            'media_content_id' => MediaContent::query()->pluck('id')->random()
        ];
    }
}
