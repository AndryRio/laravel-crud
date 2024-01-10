<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'John Smith',
            'email' => 'john_smith@gmial.com',
            'password' => Hash::make('password'),
            'remember_token' => str_random(10),
        ]);
    }
}
