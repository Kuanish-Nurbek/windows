<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners') -> insert([ 
            [
            'name' => 'Aslan',
            'car_id' => 1,
            ],
            [
            'name' => 'Arman',
            'car_id' => 2,
            ],
            [
            'name' => 'Nurim',
            'car_id' => 3,
            ],
        ]);
    }
}
