<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем

// use Database\Seeders\UserSeeder;		// подключаем отдельные сидеры
// use Database\Seeders\DomainSeederr; 


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // DB::table('domains') -> insert([ 
        //     [
        //         'name' => Str::random(5).'.'.Str::random(5).'.com',
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => Hash::make(12345),
        //     ],
        //     [
        //         'name' => Str::random(5).'.'.Str::random(5).'.com',
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => Hash::make(12345),
        //     ],
        //     [
        //         'name' => Str::random(5).'.'.Str::random(5).'.com',
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => Hash::make(12345),
        //     ],
        // ]);

        $this -> call([
            ProjectSeeder::class,
            EvironmentSeeder::class,
            DeploymentSeeder::class,
        ]);
    }
}
