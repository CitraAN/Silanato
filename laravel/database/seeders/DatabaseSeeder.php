<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('adminlapas123'),
                'isAdmin' => true
            ],
            [
                'nama' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345678'),
                'isAdmin' => false
            ]
        ]);
    }
}
