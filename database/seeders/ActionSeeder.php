<?php

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $actions = [
            [
                'name' => 'Сервіс сховано',
                'slug' => 'hidden-service',
            ],
            [
                'name' => 'Сервіс відображено',
                'slug' => 'active-service',
            ],
            [
                'name' => 'Вибрано "Отримати позику"',
                'slug' => 'get-credit',
            ],

        ];

        foreach ($actions as $action) {
            $data = [
                'name' => $action['name'],
                'slug' => $action['slug'],
            ];


            Action::create($data);
        }
    }
}