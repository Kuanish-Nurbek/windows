<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries') -> insert([
            [
                'name' => 'Kazakhstan',
            ],
            [
                'name' => 'Kanada',
            ],
            [
                'name' => 'England',
            ],
            [
                'name' => 'Franch',
            ],
        ]);
    }
}
