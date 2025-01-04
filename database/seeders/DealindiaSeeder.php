<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DealindiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Rohan',
            'last_name' => 'Shri',
            'email' => 'shrirohanshree1008@gmail.com',
            'password' => Hash::make('8709037053@Omkali'),
            'mobile' => '8709037053',
            'isAdmin' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
