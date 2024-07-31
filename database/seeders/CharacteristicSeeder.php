<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $characteristic=[
            'id'=>101,
            'name'=>"Материал"
        ];
        $characteristic2=[
            'id'=>202,
            'name'=>"Длина, см"
        ];
        $characteristic3=[
            'id'=>303,
            'name'=>"Цвет",
        ];
        $characteristic4=[
            'id'=>404,
            'name'=>"Производитель"
        ];
        Characteristic::query()->create($characteristic);
        Characteristic::query()->create($characteristic2);
        Characteristic::query()->create($characteristic3);
        Characteristic::query()->create($characteristic4);


    }
}
