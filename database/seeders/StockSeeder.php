<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stock=[
            'name'=>'test stock 1',
            'address'=> "Москва, ул. Ленина, д. 1"
        ];
        $stock2=[
            'name'=>'test stock 2',
            'address'=> "Москва, ул. Ленина, д. 2"
        ];
        Stock::query()->create($stock);
        Stock::query()->create($stock2);

    }
}
