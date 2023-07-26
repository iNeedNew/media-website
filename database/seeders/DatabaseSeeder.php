<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(20)->create();
        \App\Models\UserPhone::factory(50)->create();
        \App\Models\UserEmail::factory(50)->create();
        \App\Models\UserOffice::factory(50)->create();
        \App\Models\UserContactForm::factory(100)->create();

        \App\Models\PostCategory::factory(30)->create();
        \App\Models\Post::factory(60)->create();
        \App\Models\PostReaction::factory(100)->create();
        \App\Models\MediaContent::factory(50)->create();
        \App\Models\MediaContentPost::factory(140)->create();
    }
}
