<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'full_name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('123456'),
            'role' => 'ad',
            
        ]);

        User::factory()->create([
            'full_name' => 'Teacher One',
            'email' => 'teacher@example.com',
            'password' => Hash::make('123456'),
            'role' => 'tc',
            'avatar' => 'image/changli.jpg',
            'bio' => 'hình ảnh minh hoạ cho giảng viên',
        ]);

        User::factory(10)->create([
            'role' => 'st'
        ]);
    }
}
