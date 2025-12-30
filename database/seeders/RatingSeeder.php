<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;
use App\Models\User;
use App\Models\Course;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        $student = User::where('role', 'st')->first();
        $course = Course::first();

        Rating::create([
            'user_id' => $student->id,
            'course_id' => $course->id,
            'rating' => 5,
            'comment' => 'Great course!'
        ]);
    }
}