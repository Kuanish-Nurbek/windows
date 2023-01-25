<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class EvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('environments') -> insert([
            [
                'project_id' => 1,
                'name' => 'environmet_project_1',
            ],
            [
                'project_id' => 2,
                'name' => 'environmet_project_2',
            ],
            [
                'project_id' => 3,
                'name' => 'environmet_project_3',
            ],
        ]);
    }
}
