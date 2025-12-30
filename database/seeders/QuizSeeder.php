<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Module::all() as $module) {
            Quiz::create([
                'module_id' => $module->id,
                'title' => "Quiz for Module {$module->id}",
                'description' => 'Short quiz',
                'total_marks' => 100,
                'passing_marks' => 50
            ]);
        }
    }
}