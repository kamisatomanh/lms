<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Lesson;

class CommentsSeeder extends Seeder
{
    public function run(): void
    {
        Comment::create([
            'user_id' => User::where('role', 'st')->first()->id,
            'lesson_id' => Lesson::first()->id,
            'level' => 1,
            'parent_id' => null,
            'comment' => 'This lesson is awesome!'
        ]);
    }
}