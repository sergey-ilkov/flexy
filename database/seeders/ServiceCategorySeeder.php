<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // ? создание категорий для сервисов
        $categories = [
            [
                'name' => 'f-рейтинг',
                'slug' => 'f-rating',
            ],
            [
                'name' => 'f-схвалення',
                'slug' => 'f-approve',
            ],
            [
                'name' => 'f-вартість',
                'slug' => 'f-cost',
            ],
        ];

        foreach ($categories as $category) {
            $data = [
                'name' => $category['name'],
                'slug' => $category['slug'],
            ];

            ServiceCategory::create($data);
        }
    }
}