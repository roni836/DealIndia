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
            'first_name' => 'navya',
            'last_name' => 'yadav',
            'email' => 'saritaakumari24@gmail.com',
            'password' => Hash::make('dealindia123'),
            'mobile' => '7894561230',
            // 'dob' => '1990-01-01',
            // 'address' => 'Admin Address',
            'isAdmin' => '1',
            // 'gender' => 'male',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        
    }
}
