<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i<10;$i++){
            $author = [
                'name'  =>  fake()->name(),
                'created_at'    =>  now(),
                'updated_at'    =>  now(),
            ];
            \Illuminate\Support\Facades\DB::table('authours')->insert($author);
        }

    }
}
