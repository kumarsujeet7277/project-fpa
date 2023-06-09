<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Country::factory(100)->create();
        \App\Models\City::factory(200)->create();
        \App\Models\Post::factory(5)->create();
        \App\MOdels\Question::factory(5)->create();
        \App\MOdels\Category::factory(5)->create();
        \App\MOdels\Drag::factory(5)->create();
        \App\MOdels\Tournament::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}


