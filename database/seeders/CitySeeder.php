<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities') -> insert([
            
            [
                'name' => 'Astana',
                'country_id' => 1,
            ],
            [
                'name' => 'Toronto',
                'country_id' => 2,
            ],
            [
                'name' => 'London',
                'country_id' => 3,
            ],
            [
                'name' => 'Paris',
                'country_id' => 4,
            ],
            [
                'name' => 'Almata',
                'country_id' => 1,
            ],
            [
                'name' => 'Manchester',
                'country_id' => 3,
            ],
            [
                'name' => 'Vancouver',
                'country_id' => 2,
            ],
        ]);
    }
}
