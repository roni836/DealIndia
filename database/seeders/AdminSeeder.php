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
            'first_name' => 'Prince',
            'last_name' => 'Yadav',
            'email' => 'avengerprinceraj@gmail.com',
            'password' => Hash::make('Prince@123'),
            'mobile' => '9123278215',
            'isAdmin' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
