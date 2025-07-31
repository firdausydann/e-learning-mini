<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

User::create([
    'name' => 'Admin',
    'email' => 'admin@mail.com',
    'password' => Hash::make('password'),
    'role' => 'admin',
]);

class AdminUserSeeder extends Seeder

{
    public function run(): void
    {
        //
    }
}
