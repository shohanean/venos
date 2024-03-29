<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Unit::create([
            'name' => 'Piece'
        ]);

        $this->call([
            UserSeeder::class,
            RolePermissionSeeder::class,
            CustomerSeeder::class,
            CurrencySeeder::class,
            TimezoneSeeder::class,
            DateFormatSeeder::class,
            CountrySeeder::class,
            CityOneSeeder::class,
            CityTwoSeeder::class,
            CityThreeSeeder::class,
            CityFourSeeder::class,
            CityFiveSeeder::class,
            CitySixSeeder::class,
            CitySevenSeeder::class,
            CityEightSeeder::class,
            CityNineSeeder::class,
            CityTenSeeder::class,
            SettingSeeder::class,
        ]);

        \App\Models\Brand::create([
            'user_id' => 1,
            'name' => 'Others'
        ]);
    }
}
