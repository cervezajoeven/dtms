<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // You should hash the password
        ]);
        DB::table('users')->insert([
            'name' => 'Form Manager',
            'email' => 'form@dtms.gov',
            'password' => Hash::make('password'), // You should hash the password
        ]);
    }
}
