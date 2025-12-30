<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\User;
use App\Models\Course;

class StudentsTableSeeder extends Seeder
{
    public function run(): void
    {
        $students = User::where('role', 'st')->get();
        $course = Course::first();

        foreach ($students as $st) {
            Student::create([
                'user_id' => $st->id,
                'course_id' => $course->id,
                'enrolled_at' => now(),
                'status' => 'active'
            ]);
        }
    }
}