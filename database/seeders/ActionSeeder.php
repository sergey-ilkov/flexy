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
                'name' => 'Ви сховали сервіс',
                'slug' => 'hidden-service',
            ],
            [
                'name' => 'Ви активували сервіс',
                'slug' => 'active-service',
            ],
            // [
            //     'name' => 'Заявка на кредит (на розгляді)',
            //     'slug' => 'application-pending',
            // ],
            // [
            //     'name' => 'Заявка на кредит (схвалено)',
            //     'slug' => 'application-approved',
            // ],
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