<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // подключаем


class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts') -> insert([
            'title' => 'This is title',
            'slug' => 'postSlug',
            'likes' => 50,
            'created_at' => '2022-12-05 10:37:22',
            'updated_at' => '2022-12-05 10:37:22',
        ]);
    }
}
