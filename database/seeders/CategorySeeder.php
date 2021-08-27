<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = [
            1 => [
                'title' => 'Burgers',
                'description' => ''
            ],
            2 => [
                'title' => 'Meals',
                'description' => ''
            ],
            3 => [
                'title' => 'Desserts',
                'description' => ''
            ],
            4 => [
                'title' => 'Drinks',
                'description' => ''
            ],
            5 => [
                'title' => 'Snacks',
                'description' => ''
            ],
            6 => [
                'title' => 'Sauces',
                'description' => ''
            ]
        ];

        foreach ($data as $item => $details) {
            $category = new Category();

            $category->title = $details['title'];
            $category->description = $details['description'];

            $category->save();
        }
    }
}
