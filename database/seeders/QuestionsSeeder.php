<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Question;

class QuestionsSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Quiz::all() as $quiz) {
            Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => 'What is Laravel?',
                'option_a' => 'A PHP Framework',
                'option_b' => 'A Game',
                'option_c' => 'A Movie',
                'option_d' => 'A Car',
                'correct_answer' => 'A',
                'mark' => 10
            ]);
        }
    }
}