<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class LessonController extends Controller
{
    public function show($courseId, $lessonId)
    {
        // Lấy bài học
        // $lesson = Lesson::with(['module.course', 'assignments', 'comments.user'])
        //     ->findOrFail($lessonId);
        $lesson = Lesson::with(['module.course'])
            ->findOrFail($lessonId);

        // Lấy danh sách tất cả bài học trong khóa (để hiển thị menu trái)
        $course = Course::with('modules.lessons')->findOrFail($courseId);

        // Lấy video bài học
        $videoUrl = $lesson->video_url;

        return view('client.lessons.show', compact('course', 'lesson', 'videoUrl'));
    }
}
