<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Seeder;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(DatabaseManager $manager, Hasher $hasher): void
    {
        $datetime = Carbon::now()->toDateTimeString();
        $userId = $manager->table('users')->insertGetId([
            'name'  =>  'laravel user',
            'email' =>  'mail@example.com',
            'password'  =>  $hasher->make('password'),
            'created_at'    =>  $datetime,
        ]);
        $manager->table('user_tokens')->insert([
            'user_id'   =>  $userId,
            'api_token' =>  Str::random(50),
            'created_at'    =>  $datetime,
        ]);
    }
}
