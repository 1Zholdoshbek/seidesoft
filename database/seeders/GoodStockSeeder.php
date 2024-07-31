<?php

namespace Database\Seeders;

use App\Models\GoodStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goodstock = [
            'count'=>10,
            'good_id'=>10092,
            'stock_id'=>1
        ];
        $goodstock2 = [
            'count'=>5,
            'good_id'=>10092,
            'stock_id'=>2
        ];
        $goodstock3 = [
            'count'=>5,
            'good_id'=>10093,
            'stock_id'=>2
        ];
        GoodStock::query()->create($goodstock);
        GoodStock::query()->create($goodstock2);
        GoodStock::query()->create($goodstock3);
    }
}
