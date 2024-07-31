<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = [
            'id' => 1091,
            'name'=>"test category 1",
        ];
        $category2 = [
            'id'=>1092,
            'name'=>"test category 2",
        ];
        Category::query()->create($category1);
        Category::query()->create($category2);

    }
}
