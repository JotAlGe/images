<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
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

        \App\Models\User::factory()->create([
            'name' => 'Juan',
            'lastname' => 'González',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);


        /* \App\Models\Color::factory(3)->has(Category::factory()->count(5))->create(); */
        \App\Models\Color::factory()->count(10)->create();
        \App\Models\Category::factory()->count(5)->create();
        \App\Models\Photo::factory(10)->has(Comment::factory()->count(2))->create();
        \App\Models\Comment::factory(10)->has(User::factory()->count(1))->create();
        //\App\Models\Photo::factory(10)->has(Comment::factory()->count(2))->create();
    }
}
