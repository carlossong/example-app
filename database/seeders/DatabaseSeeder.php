<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use Illuminate\Support\Str;
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
        \App\Models\User::factory()->create([
            'name' => 'José Carlos',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Master10'),
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(30)->create();
        \App\Models\Comment::factory(300)->create();
        \App\Models\Category::factory(10)->create();

        $posts = Post::all();
        foreach($posts as $post){
            $post->categories()->sync(rand(1,10));
        }
    }
}
