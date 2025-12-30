<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HistoryAnswer;
use App\Models\QuizResult;
use App\Models\Question;

class HistoryAnswersSeeder extends Seeder
{
    public function run(): void
    {
        HistoryAnswer::create([
            'quiz_result_id' => QuizResult::first()->id,
            'question_id' => Question::first()->id,
            'selected' => 'A'
        ]);
    }
}