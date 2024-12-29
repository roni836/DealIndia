<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Sam',
            'email' => 'samcool3203@gmail.com',
            'password' => Hash::make('dealindia123'),
            'mobile' => '8555667788',
            'dob' => '1990-01-01',
            'address' => 'Admin Address',
            'isAdmin' => '1',
            'gender' => 'male',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}
