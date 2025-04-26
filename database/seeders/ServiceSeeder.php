<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // ? создание 30 сервисов
        $num = 1;
        for ($i = 0; $i < 30; $i++) {


            $service = new Service([
                'name' => $num . ' service',
                'icon' => 'images/services/credit-plus.png',
                'interset' => round((rand(0, 10) / 100), 2),
                'term' => rand(3, 9) * 10,
                'amount' => rand(1, 10) * 10000,
                'promo_code' => promocodeGenerator(),
                'promo_discount' => rand(1, 10) * 10,
                'vote_rating' => rand(1, 10),
                'vote_count' => rand(10, 1000),
                'rating' => rand(0, 100) / 10,
                'url' => 'https://laravel.com/docs/11.x',
                'license' => 'Свідотцтво №' . fake()->randomNumber(9),
                'comp_name' => fake()->words(4, true),
                'email' => fake()->email(),
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
                'published' => rand(0, 1) == 1,
            ]);


            $category = ServiceCategory::get()->random();
            $category->services()->save($service);

            $num += 1;
        }
    }
}
