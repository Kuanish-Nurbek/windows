<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories') -> insert([
            [
                'name' => 'продукты',
                'slug' => 'products',
            ],
            [
                'name' => 'Фркуты',
                'slug' => 'fruts',
            ],
            [
                'name' => 'Овощи',
                'slug' => 'vegetables',
            ],
            [
                'name' => 'Сладости',
                'slug' => 'candies',
            ],
    
        ]);
    }
}
