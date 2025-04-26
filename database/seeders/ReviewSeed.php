<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 6; $i++) {

            $data = [
                'name' => fake()->firstName(),
                'surname' => fake()->lastName(),
                'rating' => rand(1, 10),
                'text' => fake()->text(rand(150, 300)),
            ];

            Review::create($data);
        }
    }
}