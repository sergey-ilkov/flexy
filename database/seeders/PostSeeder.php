<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // ? создание 10 рандомных постов
        $num = 1;
        for ($i = 0; $i < 10; $i++) {

            $post = [
                'title' => $num . ' сервісів',
                'slug' => $num . '-services',
                'description' => fake()->text(50),
                'views' => rand(100, 10000),
                'image' => 'images/blog/1735284657.png',
                'image_min' => 'images/blog/1735284657-min.png',
                'body' => '<p>' . fake()->text(200) . '</p>',
                'published' => rand(0, 1) == 1,
            ];

            Post::create($post);

            $num += 1;
        }
    }
}