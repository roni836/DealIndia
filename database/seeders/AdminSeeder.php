<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Prince',
            'email' => 'avengerprinceraj',
            'password' => Hash::make('Prince@123'),
            'mobile' => '9123278215',
            'dob' => '1990-01-01',
            'address' => 'Admin Address',
            'isAdmin' => '1',
            'gender' => 'male',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
