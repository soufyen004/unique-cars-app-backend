<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'carName' => 'bmw m3 competetion',
            'manufacturerName' => 'bmw',
            'manufacturerId' => 3,
            'manufacturerLogo' => 'bmw.png',
            'manufacturerLogoId' => '3',
            'acceleration' => 6.7,
            'mileage' => 124000,
            'coverImage' => 'bmw_m3_comp.jpeg',
            'colorName' => 'silver',
            'colorId' => 3,
            'cilynders' => 4,
            'energyTypeId' => 2,
            'energyTypeName' => 'petrol',
            'horsePower' => 218,
            'modelName' => 'series 5',
            'modelId' => 11,
            'transmissionName' => 'automatic',
            'transmissionId' => 1,
            'yearOfConstruction' => 2014,
            'publisherFullName' => 'ahmed lberkani',
            'publisherUserId' => 75
        ]);
        DB::table('cars')->insert([
            'carName' => 'volkswagen golf 6',
            'manufacturerName' => 'volkswagen',
            'manufacturerId' => 3,
            'manufacturerLogo' => 'volkswagen.png',
            'manufacturerLogoId' => '5',
            'acceleration' => 6.7,
            'mileage' => 155000,
            'coverImage' => 'volkswagen_golf6.jpeg',
            'colorName' => 'black',
            'colorId' => 1,
            'cilynders' => 4,
            'energyTypeId' => 1,
            'energyTypeName' => 'diesel',
            'horsePower' => 185,
            'modelName' => 'golf 6',
            'modelId' => 23,
            'transmissionName' => 'manual',
            'transmissionId' => 1,
            'yearOfConstruction' => 2013,
            'publisherFullName' => 'youssef kermaoui',
            'publisherUserId' => 34
        ]);
    }
}
