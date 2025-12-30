<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;
use App\Models\Category;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        //$teacher = User::where('role', 'tc')->first();
        $category = Category::first();

        for ($i = 1; $i <= 5; $i++) {
            Course::create([
                'title' => "Course $i",
                'description' => "Description for Course $i",
                'instructor_id' => 2,
                'video_url' => 'video/tamchihoa.mp4',
                'category_id' => $category->id,
                'price' => rand(100000, 500000),
                'time' => '01:30:00',
                'status' => 'published'
            ]);
        }
    }
}