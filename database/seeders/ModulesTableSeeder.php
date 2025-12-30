<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;

class ModulesTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Course::all() as $course) {
            for ($i = 1; $i <= 3; $i++) {
                Module::create([
                    'course_id' => $course->id,
                    'title' => "Module $i of Course {$course->id}",
                    'order' => $i
                ]);
            }
        }
    }
}