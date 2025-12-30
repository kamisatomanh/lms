<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Lesson;
use App\Models\Progress;

class ProgressTableSeeder extends Seeder
{
    public function run(): void
    {
        $enrollment = Student::first();
        $lessons = Lesson::take(5)->get();

        foreach ($lessons as $lesson) {
            Progress::create([
                'enrollment_id' => $enrollment->id,
                'lesson_id' => $lesson->id,
                'completed' => false
            ]);
        }
    }
}
