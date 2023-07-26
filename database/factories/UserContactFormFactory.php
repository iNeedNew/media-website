<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserContactForm>
 */
class UserContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from_user_id' => User::query()->pluck('id')->random(),
            'to_user_id' => User::query()->pluck('id')->random(),
            'subject' => fake()->text(50),
            'text' => fake()->text(),
        ];
    }
}
