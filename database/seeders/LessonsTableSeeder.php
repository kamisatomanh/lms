<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\Lesson;

class LessonsTableSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Module::all() as $module) {
            for ($i = 1; $i <= 4; $i++) {
                Lesson::create([
                    'module_id' => $module->id,
                    'title' => "Lesson $i of Module {$module->id}",
                    'content' => "Content of lesson $i",
                    'video_url' => 'video/tamchihoa.mp4',
                    'order' => $i
                ]);
            }
        }
    }
}