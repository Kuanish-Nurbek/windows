<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class DeploymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deployments') -> insert([
            [
                'environment_id' => 1,
                'commit_hash' => 'deployment_1',
            ],
            [
                'environment_id' => 1,
                'commit_hash' => 'deployment_1',
            ],
            [
                'environment_id' => 2,
                'commit_hash' => 'deployment_2',
            ],
            [
                'environment_id' => 2,
                'commit_hash' => 'deployment_2',
            ],
            [
                'environment_id' => 3,
                'commit_hash' => 'deployment_3',
            ],
            [
                'environment_id' => 3,
                'commit_hash' => 'deployment_3',
            ],
         
        ]);
    }
}
