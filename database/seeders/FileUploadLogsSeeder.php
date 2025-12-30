<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FileUploadLog;
use App\Models\Lesson;
use App\Models\User;

class FileUploadLogsSeeder extends Seeder
{
    public function run(): void
    {
        $student = User::where('role', 'st')->first();
        $lesson = Lesson::first();

        FileUploadLog::create([
            'user_id' => $student->id,
            'lesson_id' => $lesson->id,
            'file_name' => 'report.pdf',
            'file_path' => 'uploads/report.pdf',
            'file_size' => 1200
        ]);
    }
}