<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users') -> insert([
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Asem','surname'=>'Toktamisova'],
            ['name' => 'Nurjigit','surname'=>'Musaev'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Asem','surname'=>'Toktamisova'],
            ['name' => 'Nurjigit','surname'=>'Musaev'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Asem','surname'=>'Toktamisova'],
            ['name' => 'Nurjigit','surname'=>'Musaev'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Asem','surname'=>'Toktamisova'],
            ['name' => 'Nurjigit','surname'=>'Musaev'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Asem','surname'=>'Toktamisova'],
            ['name' => 'Nurjigit','surname'=>'Musaev'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Alex','surname'=>'John'],
            ['name' => 'Asem','surname'=>'Toktamisova'],
            ['name' => 'Nurjigit','surname'=>'Musaev'],
            ['name' => 'Alex','surname'=>'John'],

        ]);
    }
}
