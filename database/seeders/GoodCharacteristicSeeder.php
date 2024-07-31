<?php

namespace Database\Seeders;

use App\Models\GoodCharacteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodCharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goodCharacteristics1 = [
            'value'=>"нержавеющая сталь",
            'good_id'=>10092,
            'characteristic_id'=>101,
        ];
        $goodCharacteristics2 = [
            'value'=>"23",
            'good_id'=>10092,
            'characteristic_id'=>202,
        ];
        $goodCharacteristics3 = [
            'value'=>"серебристый",
            'good_id'=>10092,
            'characteristic_id'=>303,
        ];
        $goodCharacteristics4 = [
            'value'=>"Китай",
            'good_id'=>10092,
            'characteristic_id'=>404,
        ];
        $goodCharacteristics5 = [
            'value'=>"черный",
            'good_id'=>10093,
            'characteristic_id'=>303,
        ];
        $goodCharacteristics6 = [
            'value'=>"Америка",
            'good_id'=>10093,
            'characteristic_id'=>404,
        ];
        GoodCharacteristic::query()->create($goodCharacteristics1);
        GoodCharacteristic::query()->create($goodCharacteristics2);
        GoodCharacteristic::query()->create($goodCharacteristics3);
        GoodCharacteristic::query()->create($goodCharacteristics4);
        GoodCharacteristic::query()->create($goodCharacteristics5);
        GoodCharacteristic::query()->create($goodCharacteristics6);
    }
}
