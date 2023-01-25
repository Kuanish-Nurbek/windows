<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars') -> insert([ 
            [
            'model' => 'Audi',
            'mechanic_id' => 1,
            ],
            [
            'model' => 'BMW',
            'mechanic_id' => 2,
            ],
            [
            'model' => 'Lada',
            'mechanic_id' => 3,
            ],
            
        ]);
    }
}
