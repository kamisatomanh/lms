<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuizResult;
use App\Models\Quiz;
use App\Models\User;

class QuizResultsSeeder extends Seeder
{
    public function run(): void
    {
        QuizResult::create([
            'user_id' => User::where('role', 'st')->first()->id,
            'quiz_id' => Quiz::first()->id,
            'score' => 80,
            'status' => 'pass',
            'taken_at' => now()
        ]);
    }
}
