<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Category;
use App\Models\Module;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\FileUploadLog;
use Illuminate\Support\Str;
use App\Models\Quiz;
use App\Models\LessonQuestion;

use PhpOffice\PhpWord\IOFactory;

class TeacherController extends Controller
{
    public function courseIndex()
    {
        $teacherId = Auth::id();

        $courses = Course::withCount('students')
            ->where('instructor_id', $teacherId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('client.teacher.courses.index', compact('courses'));
    }

    public function courseCreate()
    {
        $categories = Category::all();
        return view('client.teacher.courses.create', compact('categories'));
    }

    public function courseStore(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png',
        //     'video_url' => 'nullable|mimes:mp4,mov,avi,webm',
        // ]);

        // --- Upload thumbnail ---
        $imagePath = null;
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Lưu vào public/course/thumbnails/
            $file->move(public_path('course/images'), $filename);

            $imagePath = 'course/images/' . $filename;
        }

        // --- Upload video ---
        $videoPath = null;
        if ($request->hasFile('video_url')) {

            $video = $request->file('video_url');
            $videoName = uniqid() . '_' . time() . '.' . $video->getClientOriginalExtension();

            // Lưu vào public/course/videos/
            $video->move(public_path('course/videos'), $videoName);

            $videoPath = 'course/videos/' . $videoName;
        }

        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'instructor_id' => Auth::id(),
            'category_id' => $request->category_id,
            'price' => $request->price,
            'image' => $imagePath,
            'video_url' => $videoPath,
            'status' => 'draft'
        ]);

        return redirect()->route('teacher.courses.index')->with('success', 'Đã tạo khóa học thành công!');
    }

    public function courseEdit($id)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($id);
        $categories = Category::all();
        return view('client.teacher.courses.edit', compact('course', 'categories'));
    }

    public function courseUpdate(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        // Update thông tin cơ bản
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
        ]);

        // =====================
        // XỬ LÝ ẢNH (image)
        // =====================
        if ($request->hasFile('image')) {

            // Xóa ảnh cũ nếu tồn tại
            if ($course->image && file_exists(public_path($course->image))) {
                unlink(public_path($course->image));
            }

            $file = $request->file('image');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('course/images'), $filename);

            $course->image = 'course/images/' . $filename;
            $course->save();
        }

        // =====================
        // XỬ LÝ VIDEO (video_url)
        // =====================
        if ($request->hasFile('video_url')) {

            // Xóa video cũ nếu tồn tại
            if ($course->video_url && file_exists(public_path($course->video_url))) {
                unlink(public_path($course->video_url));
            }

            $video = $request->file('video_url');
            $videoName = uniqid() . '_' . time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('course/videos'), $videoName);

            $course->video_url = 'course/videos/' . $videoName;
            $course->save();
        }
        return redirect()->route('teacher.courses.index')->with('success', 'Cập nhật thành công!');
    }

    public function courseArchive($id)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($id);
        $course->status = 'archived';
        $course->save();

        return redirect()->route('teacher.courses.index')->with('success', 'Đã xóa khóa học!');
    }

    public function courseDraft($id)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($id);
        $course->status = 'draft';
        $course->save();

        return redirect()->route('teacher.courses.index')->with('success', 'Khóa học đã được chuyển về nháp!');
    }
    public function coursePublish($id)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($id);
        $course->status = 'published';
        $course->save();

        return redirect()->route('teacher.courses.index')->with('success', 'Khóa học đã được xuất bản!');
    }

    public function courseShow($id)
    {
        $course = Course::with([
            // Module & Lesson
            'modules.lessons',

            // Quiz & Quiz Results
            'modules.quiz',
            'modules.quiz.results',

            // Thông tin giảng viên
            'instructor',

            // Danh mục
            'category',

            // Học viên đăng ký
            'students',

            // Đánh giá khoá học
            'ratings.user',

            // Thanh toán
            'payments'
        ])->findOrFail($id);

        // 📌 Thêm thống kê
        $statistics = [
            'total_modules'     => $course->modules->count(),
            'total_lessons'     => $course->modules->sum(fn($m) => $m->lessons->count()),
            'total_quizzes'     => $course->modules->filter(fn($m) => $m->quiz !== null)->count(),
            'total_quiz_attempts' => $course->modules->sum(fn($m) => $m->quiz ? $m->quiz->results->count() : 0),
            'total_students'    => $course->students->count(),
            'avg_rating'        => number_format($course->ratings->avg('rating'), 1),
        ];

        return view('client.teacher.courses.show', compact('course', 'statistics'));
    }

    public function moduleCreate($id)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($id);
        return view('client.teacher.courses.modules.create', compact('course'));
    }

    public function moduleStore(Request $request, $courseId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);

        if (!$request->has('modules')) {
            return back()->with('error', 'Chưa nhập module');
        }

        foreach ($request->modules as $index => $m) {

            // 🔥 Lấy tổng số module đang có → tránh trùng order
            $currentModuleOrder = Module::where('course_id', $course->id)->count() + 1;

            $module = Module::create([
                'course_id' => $course->id,
                'title'     => $m['title'],
                'order'     => $currentModuleOrder
            ]);

            // Nếu module có lesson
            if (isset($m['lessons'])) {

                // 🔥 Lấy số lượng lesson cũ để tránh trùng order
                $existingLessonCount = Lesson::where('module_id', $module->id)->count();

                foreach ($m['lessons'] as $lessonIndex => $lessonData) {

                    // Auto order lesson
                    $lessonOrder = $existingLessonCount + $lessonIndex + 1;

                    $videoPath = null;

                    // Nếu có file video
                    if (
                        isset($lessonData['video'])
                        && $lessonData['video'] instanceof \Illuminate\Http\UploadedFile
                    ) {
                        $file = $lessonData['video'];
                        $filename = uniqid() . "." . $file->getClientOriginalExtension();
                        $file->move(public_path('videos/lessons'), $filename);

                        $videoPath = "videos/lessons/" . $filename;

                        
                    }

                    // Tạo lesson
                    $lesson = Lesson::create([
                        'module_id'  => $module->id,
                        'title'      => $lessonData['title'],
                        'content'    => $lessonData['content'],
                        'video_url'  => $videoPath,
                        'order'      => $lessonOrder
                    ]);

                    
                }
            }
        }

        return redirect()
            ->route('teacher.courses.show', $course->id)
            ->with('success', 'Thêm module và bài học thành công!');
    }

    public function moduleMultiEdit($courseId)
    {
        $course = Course::findOrFail($courseId);

        // Load module + lesson có order tăng dần
        $modules = Module::where('course_id', $courseId)
            ->orderBy('order')
            ->with(['lessons' => function ($q) {
                $q->orderBy('order');
            }])
            ->get();

        return view('client.teacher.courses.modules.multiEdit', compact('course', 'modules'));
    }

    

    public function moduleEdit($courseId, $moduleId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::findOrFail($moduleId);

        return view('client.teacher.courses.modules.edit', compact('course', 'module'));
    }

    public function moduleUpdate(Request $request, $courseId, $moduleId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);

        // Cập nhật module
        $module->update([
            'title' => $request->title,
        ]);

        return redirect()
            ->route('teacher.courses.show', $course->id)
            ->with('success', 'Cập nhật module thành công!');
    }

    public function moduleDelete($courseId, $moduleId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        // Xoá tất cả lesson trong module
        foreach ($module->lessons as $lesson) {

            // Xoá video nếu có
            if ($lesson->video_url && file_exists(public_path($lesson->video_url))) {
                unlink(public_path($lesson->video_url));
            }
            $lesson->delete();
        }
        // Xoá module
        $module->delete();
        return redirect()
            ->route('teacher.courses.show', $course->id)
            ->with('success', 'Xoá module thành công!');
    }   

    public function lessonCreate($courseId, $moduleId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);

        return view('client.teacher.courses.modules.lessons.create', compact('course', 'module'));
    }
    
    public function lessonStore(Request $request, $courseId, $moduleId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        //$module = Module::where('course_id', $course->id)->findOrFails($moduleId);
        // Lấy order cao nhất
        $lastOrder = Lesson::where('module_id', $moduleId)->max('order') ?? 0;

        $videoPath = null;

        // Nếu có upload file
        if ($request->hasFile('video_url')) {

            $file = $request->file('video_url');
            $fileSize = $file->getSize();

            $extension = $file->getClientOriginalExtension();
            $randomName = Str::random(20) . "." . $extension;

            $path = "lessons/" . $randomName;

            // Không dùng storage → move trực tiếp
            $file->move(public_path('lessons'), $randomName);

            $videoPath = $path;
        }

        // Tạo lesson
        $lesson = Lesson::create([
            'module_id' => $moduleId,
            'title'     => $request->title,
            'content'   => $request->content,
            'order'     => $lastOrder + 1,
            'video_url' => $videoPath
        ]);

        // Ghi log file nếu có
        // if ($videoPath) {
        //     FileUploadLog::create([
        //         'user_id'   => Auth::id(),
        //         'lesson_id' => $lesson->id,
        //         'file_name' => $randomName,
        //         'file_path' => $videoPath,
        //         'file_size' => $fileSize,
        //     ]);
        // }

        return redirect()
            ->route('teacher.courses.show', $course->id)
            ->with('success', 'Thêm bài học thành công!');
    }

    public function lessonShow($courseId, $moduleId, $lessonId)
    {
        // Lấy bài học
        $lesson = Lesson::with(['module.course'])
            ->findOrFail($lessonId);

        // Lấy danh sách tất cả bài học trong khóa (để hiển thị menu trái)
        $course = Course::with('modules.lessons')->findOrFail($courseId);

        // Lấy video bài học
        $videoUrl = $lesson->video_url;

        return view('client.teacher.courses.modules.lessons.show', compact('course', 'videoUrl', 'lesson'));
    }

    public function lessonEdit($courseId, $moduleId, $lessonId)
    {
        // Lấy course
        $course = Course::findOrFail($courseId);

        // Lấy module thuộc course
        $module = Module::where('course_id', $course->id)
                        ->findOrFail($moduleId);

        // Lấy lesson thuộc module
        $lesson = Lesson::where('module_id', $module->id)
                        ->findOrFail($lessonId);

        // Lấy tất cả file đã upload (nếu muốn hiển thị log file)
        //$file = FileUploadLog::where('lesson_id', $lessonId)->first();
        //dd($file);
        return view(
            'client.teacher.courses.modules.lessons.edit',
            compact('course', 'module', 'lesson')
        );
    }

    public function lessonUpdate(Request $request, $courseId, $moduleId, $lessonId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $lesson = Lesson::where('module_id', $module->id)->findOrFail($lessonId);

        if ($request->hasFile('file')) {

            // Xoá file cũ nếu tồn tại
            if ($lesson->video_url && file_exists(public_path($lesson->video_url))) {
                unlink(public_path($lesson->video_url));
            }

            $file = $request->file('file');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('videos/lessons'), $filename);

            $lesson->video_url = 'videos/lessons/' . $filename;
            $lesson->save();
        }
        
        $lesson->update([
            'title'   => $request->title,
            'content' => $request->content,
        ]);
        
        return redirect()
            ->route('teacher.courses.show', $course->id)
            ->with('success', 'Sửa bài học thanh cong!');
    }

    public function lessonDelete($courseId, $moduleId, $lessonId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $lesson = Lesson::where('module_id', $module->id)->findOrFail($lessonId);
       
        // Xoá video nếu có
        if ($lesson->video_url && file_exists(public_path($lesson->video_url))) {
            unlink(public_path($lesson->video_url));
        }

        $lesson->delete();
        return redirect()
            ->route('teacher.courses.show', $course->id)
            ->with('success', 'Xóa bài học thanh cong!');
    }

    public function quizShow($courseId, $moduleId, $quizId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $quiz = Quiz::where('module_id', $module->id)->findOrFail($quizId);

        return view('client.teacher.courses.modules.quizzes.show', compact('course', 'module', 'quiz'));
    }

    public function quizCreate($courseId, $moduleId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);

        return view('client.teacher.courses.modules.quizzes.create', compact('course', 'module'));
    }

    public function quizStore(Request $request, $courseId, $moduleId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_marks' => 'required|integer|min:0',
            'passing_marks' => 'required|integer|min:0',
            'questions.*.question_text' => 'required|string',
            'questions.*.option_a' => 'required|string',
            'questions.*.option_b' => 'required|string',
            'questions.*.option_c' => 'required|string',
            'questions.*.option_d' => 'required|string',
            'questions.*.correct_answer' => 'required|in:A,B,C,D',
            'questions.*.mark' => 'required|integer|min:0',
        ]);

        $module = Module::findOrFail($moduleId);

        // Tạo Quiz
        $quiz = Quiz::create([
            'module_id' => $module->id,
            'title' => $request->title,
            'description' => $request->description,
            'total_marks' => $request->total_marks,
            'passing_marks' => $request->passing_marks,
        ]);

        // Lưu từng câu hỏi
        if ($request->has('questions')) {
            foreach ($request->questions as $q) {
                Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $q['question_text'],
                    'option_a' => $q['option_a'],
                    'option_b' => $q['option_b'],
                    'option_c' => $q['option_c'],
                    'option_d' => $q['option_d'],
                    'correct_answer' => $q['correct_answer'],
                    'mark' => $q['mark'],
                ]);
            }
        }

        return redirect()->route('teacher.courses.modules.show', [$course->id, $module->id])
            ->with('success', 'Quiz và câu hỏi đã được thêm thành công!');
    }

    public function quizzShow($courseId, $moduleId, $quizId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $quiz = Quiz::where('module_id', $module->id)->findOrFail($quizId);

        return view('client.teacher.courses.modules.quizzes.show', compact('course', 'module', 'quiz'));
    }

    public function quizEdit($courseId, $moduleId, $quizId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $quiz = Quiz::where('module_id', $module->id)->findOrFail($quizId);

        return view('client.teacher.courses.modules.quizzes.edit', compact('course', 'module', 'quiz'));
    }

    public function quizUpdate(Request $request, $courseId, $moduleId, $quizId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $quiz = Quiz::where('module_id', $module->id)->findOrFail($quizId);

        // Cập nhật quiz
        $quiz->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'total_marks' => $request->input('total_marks'),
            'passing_marks' => $request->input('passing_marks')
        ]);

        $questionsData = $request->input('questions', []);

        // Lấy danh sách id các câu hỏi hiện có
        $existingQuestionIds = $quiz->questions()->pluck('id')->toArray();
        $submittedIds = [];

        foreach ($questionsData as $qData) {
            if (!empty($qData['id'])) {
                // Update câu hỏi cũ
                $question = Question::find($qData['id']);
                if ($question) {
                    $question->update([
                        'question_text' => $qData['question_text'],
                        'option_a' => $qData['option_a'],
                        'option_b' => $qData['option_b'],
                        'option_c' => $qData['option_c'],
                        'option_d' => $qData['option_d'],
                        'correct_answer' => $qData['correct_answer'],
                        'mark' => $qData['mark']
                    ]);
                    $submittedIds[] = $question->id;
                }
            } else {
                // Thêm câu hỏi mới
                $newQuestion = new Question([
                    'question_text' => $qData['question_text'],
                    'option_a' => $qData['option_a'],
                    'option_b' => $qData['option_b'],
                    'option_c' => $qData['option_c'],
                    'option_d' => $qData['option_d'],
                    'correct_answer' => $qData['correct_answer'],
                    'mark' => $qData['mark']
                ]);
                $quiz->questions()->save($newQuestion);
                $submittedIds[] = $newQuestion->id;
            }
        }

        // Xóa câu hỏi bị xóa trong form
        $toDelete = array_diff($existingQuestionIds, $submittedIds);
        if (!empty($toDelete)) {
            Question::whereIn('id', $toDelete)->delete();
        }

        return redirect()
            ->route('teacher.courses.modules.quizzes.show', [$course->id, $module->id, $quiz->id])
            ->with('success', 'Cập nhật Quiz thành công!');
    }
    public function quizCreateWord($courseId, $moduleId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);

        return view('client.teacher.courses.modules.quizzes.createWord', compact('course', 'module'));
    }

    /**
     * Xử lý file Word
     */
    public function quizStoreWord(Request $request, $courseId, $moduleId)
    {
        $course = Course::where('instructor_id', Auth::id())
            ->findOrFail($courseId);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|mimes:docx',
        ]);

        $module = Module::findOrFail($moduleId);

        /** =========================
         * 1️⃣ PARSE WORD
         * ========================= */
        $questions = $this->parseWordQuestions(
            $request->file('file')
        );

        if (empty($questions)) {
            return back()->withErrors(
                'File Word không có câu hỏi hợp lệ'
            );
        }

        /** =========================
         * 2️⃣ TÍNH ĐIỂM
         * ========================= */
        $totalMarks = collect($questions)->sum('mark');
        $passingMarks = ceil($totalMarks * 0.75);

        /** =========================
         * 3️⃣ TẠO QUIZ
         * ========================= */
        $quiz = Quiz::create([
            'module_id' => $module->id,
            'title' => $request->title,
            'description' => $request->description,
            'total_marks' => $totalMarks,
            'passing_marks' => $passingMarks,
        ]);

        /** =========================
         * 4️⃣ LƯU QUESTIONS
         * ========================= */
        foreach ($questions as $q) {
            Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => $q['question_text'],
                'option_a' => $q['option_a'],
                'option_b' => $q['option_b'],
                'option_c' => $q['option_c'],
                'option_d' => $q['option_d'],
                'correct_answer' => $q['correct_answer'],
                'mark' => $q['mark'],
            ]);
        }

        return redirect()
            ->route('teacher.courses.modules.quizzes.show', [$course->id, $module->id, $quiz->id])
            ->with('success', 'Quiz đã được tạo từ file Word!');
    }

    /**
     * Parse nội dung Word
     */
    private function parseWordQuestions($file): array
    {
        $phpWord = \PhpOffice\PhpWord\IOFactory::load(
            $file->getPathname()
        );

        $text = '';
        foreach ($phpWord->getSections() as $section) {
            foreach ($section->getElements() as $el) {
                if (method_exists($el, 'getText')) {
                    $text .= $el->getText() . "\n";
                }
            }
        }

        $questions = [];
        $blocks = preg_split('/-{3,}/', $text);

        foreach ($blocks as $block) {

            preg_match('/Câu hỏi:(.*)/', $block, $q);
            preg_match('/A\.(.*)/', $block, $a);
            preg_match('/B\.(.*)/', $block, $b);
            preg_match('/C\.(.*)/', $block, $c);
            preg_match('/D\.(.*)/', $block, $d);
            preg_match('/ĐÁP ÁN:\s*([ABCD])/', $block, $ans);
            preg_match('/ĐIỂM:\s*(\d+)/', $block, $mark);

            if (!$q || !$ans) continue;

            $questions[] = [
                'question_text' => trim($q[1]),
                'option_a' => trim($a[1] ?? ''),
                'option_b' => trim($b[1] ?? ''),
                'option_c' => trim($c[1] ?? ''),
                'option_d' => trim($d[1] ?? ''),
                'correct_answer' => $ans[1],
                'mark' => (int) ($mark[1] ?? 1),
            ];
        }

        return $questions;
    }

    public function lessonQuestions($courseId, $moduleId, $lessonId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $lesson = Lesson::with('questions')
            ->whereHas('module.course', function ($q) {
                $q->where('instructor_id', Auth::id());
            })
            ->findOrFail($lessonId);

        return view('client.teacher.courses.modules.lessons.questions', compact('lesson', 'course', 'module'));
    }
    public function lessonQuestionsCreate($courseId, $moduleId, $lessonId)
    {
        $course = Course::where('instructor_id', Auth::id())->findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $lesson = Lesson::whereHas('module.course', function ($q) {
            $q->where('instructor_id', Auth::id());
        })->findOrFail($lessonId);
        return view('client.teacher.courses.modules.lessons.questionsImport', compact('lesson', 'course', 'module'));
    }
    public function lessonQuestionsStore(Request $request, $courseId, $moduleId, $lessonId)
    {
        // 1. Kiểm tra quyền giáo viên với bài học
        $lesson = Lesson::whereHas('module.course', function ($q) {
            $q->where('instructor_id', Auth::id());
        })->findOrFail($lessonId);

        // 2. Validate file
        $request->validate([
            'file' => 'required|mimes:docx'
        ]);

        try {
            // 3. Đọc file Word
            $phpWord = IOFactory::load($request->file('file')->getPathname());

            $text = '';
            foreach ($phpWord->getSections() as $section) {
                foreach ($section->getElements() as $element) {
                    if (method_exists($element, 'getText')) {
                        $text .= $element->getText() . "\n";
                    }
                }
            }

            // 4. Tách từng câu hỏi (---)
            $blocks = preg_split('/-{3,}/', $text);
            $count = 0;

            foreach ($blocks as $block) {

                preg_match('/Câu hỏi:(.*)/', $block, $q);
                preg_match('/A\.(.*)/', $block, $a);
                preg_match('/B\.(.*)/', $block, $b);
                preg_match('/C\.(.*)/', $block, $c);
                preg_match('/D\.(.*)/', $block, $d);
                preg_match('/ĐÁP ÁN:\s*([ABCD])/', $block, $ans);
                preg_match('/ĐIỂM:\s*(\d+)/', $block, $mark);

                // Bỏ qua nếu thiếu câu hỏi hoặc đáp án
                if (empty($q) || empty($ans)) {
                    continue;
                }

                LessonQuestion::create([
                    'lesson_id'       => $lesson->id,
                    'question_text'   => trim($q[1]),
                    'option_a'        => trim($a[1] ?? ''),
                    'option_b'        => trim($b[1] ?? ''),
                    'option_c'        => trim($c[1] ?? ''),
                    'option_d'        => trim($d[1] ?? ''),
                    'correct_answer'  => $ans[1],
                    'mark'            => (int) ($mark[1] ?? 1),
                ]);

                $count++;
            }

            return redirect()
                ->route('teacher.courses.modules.lessons.questions', [
                    $lesson->module->course->id,
                    $lesson->module->id,
                    $lesson->id
                ])
                ->with('success', "Đã import $count câu hỏi thành công!");

        } catch (\Throwable $e) {
            return back()->withErrors([
                'file' => 'Không thể xử lý file Word: ' . $e->getMessage()
            ]);
        }
    }
    public function quizCreateChoose($course_id, $module_id)
    {
        $module = Module::whereHas('course', function ($q) {
            $q->where('instructor_id', Auth::id());
        })
        ->with(['lessons.questions']) // LOAD lesson + question
        ->findOrFail($module_id);

        return view('client.teacher.courses.modules.quizzes.createChoose', compact('module'));
    }
    public function quizStoreChoose(Request $request, $course_id, $module_id)
    {
        $module = Module::whereHas('course', function ($q) {
            $q->where('instructor_id', Auth::id());
        })->findOrFail($module_id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'question_ids' => 'required|array|min:1',
            'question_ids.*' => 'exists:lesson_questions,id',
        ]);

        // Lấy câu hỏi đã chọn
        $lessonQuestions = LessonQuestion::whereIn(
            'id',
            $request->question_ids
        )->get();

        // Tính điểm
        $totalMarks = $lessonQuestions->sum('mark');
        $passingMarks = ceil($totalMarks * 0.75);

        // Tạo quiz
        $quiz = Quiz::create([
            'module_id' => $module->id,
            'title' => $request->title,
            'description' => $request->description,
            'total_marks' => $totalMarks,
            'passing_marks' => $passingMarks,
        ]);

        // Copy câu hỏi sang bảng questions
        foreach ($lessonQuestions as $q) {
            Question::create([
                'quiz_id' => $quiz->id,
                'question_text' => $q->question_text,
                'option_a' => $q->option_a,
                'option_b' => $q->option_b,
                'option_c' => $q->option_c,
                'option_d' => $q->option_d,
                'correct_answer' => $q->correct_answer,
                'mark' => $q->mark,
            ]);
        }

    
        return redirect()
            ->route('teacher.courses.show', [$course_id])
            ->with('success', 'Tạo quiz (chọn câu hỏi) thành công!');
    }

    public function quizCreateRandom($course_id, $module_id)
    {
        $module = Module::whereHas('course', function ($q) {
            $q->where('instructor_id', Auth::id());
        })
        ->with(['lessons' => function ($q) {
            $q->withCount('lessonQuestions');
        }])
        ->findOrFail($module_id);

        return view(
            'client.teacher.courses.modules.quizzes.createRandom',
            compact('module')
        );
    }
   public function quizStoreRandom(Request $request, $course_id, $module_id)
    {
        $module = Module::whereHas('course', function ($q) {
            $q->where('instructor_id', Auth::id());
        })->with('lessons')->findOrFail($module_id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'lessons' => 'required|array'
        ]);

        // 1️⃣ Tạo quiz
        $quiz = Quiz::create([
            'module_id' => $module->id,
            'title' => $request->title,
            'description' => $request->description,
            'total_marks' => 0,
            'passing_marks' => 0,
        ]);

        $totalMarks = 0;

        // 2️⃣ Lặp từng lesson được chọn
        foreach ($request->lessons as $lessonId => $limit) {

            if ((int)$limit <= 0) continue;

            // Lấy random câu hỏi từ lesson_questions
            $lessonQuestions = LessonQuestion::where('lesson_id', $lessonId)
                ->inRandomOrder()
                ->limit((int)$limit)
                ->get();

            foreach ($lessonQuestions as $lq) {

                Question::create([
                    'quiz_id' => $quiz->id,
                    'question_text' => $lq->question_text,
                    'option_a' => $lq->option_a,
                    'option_b' => $lq->option_b,
                    'option_c' => $lq->option_c,
                    'option_d' => $lq->option_d,
                    'correct_answer' => $lq->correct_answer,
                    'mark' => $lq->mark,
                ]);

                $totalMarks += $lq->mark;
            }
        }

        // 3️⃣ Cập nhật điểm
        $quiz->update([
            'total_marks' => $totalMarks,
            'passing_marks' => ceil($totalMarks * 0.75),
        ]);

        return redirect()
            ->route('teacher.courses.show', $course_id)
            ->with('success', 'Tạo quiz random thành công!');
    }

}
