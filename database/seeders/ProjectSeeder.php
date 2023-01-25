<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects') -> insert([
            [
                'name' => 'my_first_project',
            ],
            [
                'name' => 'my_second_project',
            ],
            [
                'name' => 'my_third_project',
            ],
        ]);
    }
}
