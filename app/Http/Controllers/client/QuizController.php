<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Module;
use App\Models\Quiz;
use App\Models\QuizResult;
use Illuminate\Support\Facades\Auth;
use App\Models\HistoryAnswer;
use Carbon\Carbon;

class QuizController extends Controller
{
    public function indexQuiz($courseId, $moduleId, $quizId)
    {
        $course = Course::findOrFail($courseId);
        $module = Module::where('course_id', $course->id)->findOrFail($moduleId);
        $quiz = Quiz::where('module_id', $module->id)->findOrFail($quizId);

        // Lấy lịch sử làm bài của user hiện tại
        $history = QuizResult::with('historyAnswers.question')
            ->where('quiz_id', $quiz->id)
            ->where('user_id', Auth::id())
            ->orderByDesc('taken_at')
            ->get();

        return view('client.courses.quizzes.index', compact('course', 'module', 'quiz', 'history'));
    }
    // Hiển thị quiz để làm
    public function startQuiz($courseId, $moduleId, $quizId)
    {
        $quiz = Quiz::with('questions')->findOrFail($quizId);

        // Xáo trộn option cho từng câu hỏi nhưng giữ key A/B/C/D
        $quiz->questions->transform(function($question) {
            $options = collect([
                'A' => $question->option_a,
                'B' => $question->option_b,
                'C' => $question->option_c,
                'D' => $question->option_d,
            ]);

            $shuffled = $options->keys()->shuffle()->mapWithKeys(function($k) use ($options) {
                return [$k => $options[$k]];
            });

            $question->shuffled_options = $shuffled;
            return $question;
        });


        return view('client.courses.quizzes.start', compact('quiz'));
    }

    // Xử lý submit quiz
    public function submitQuiz(Request $request, $courseId, $moduleId, $quizId)
    {
        $quiz = Quiz::with('questions')->findOrFail($quizId);
        $answers = $request->input('answers', []); // ['question_id' => 'A/B/C/D']

        $score = 0;

        $quizResult = QuizResult::create([
            'user_id' => Auth::id(),
            'quiz_id' => $quiz->id,
            'score' => 0,
            'status' => 'fail',
            'taken_at' => Carbon::now(),
        ]);

        foreach ($quiz->questions as $question) {
            $selected = $answers[$question->id] ?? null;
            if ($selected && $selected === $question->correct_answer) {
                $score += $question->mark;
            }

            HistoryAnswer::create([
                'quiz_result_id' => $quizResult->id,
                'question_id' => $question->id,
                'selected' => $selected,
            ]);
        }

        $quizResult->update([
            'score' => $score,
            'status' => $score >= $quiz->passing_marks ? 'pass' : 'fail',
        ]);
        return redirect()->route('quiz.index', ['courseId' => $courseId, 'moduleId' => $moduleId, 'quizId' => $quizId])
                         ->with('success', 'Quiz submitted successfully!');
    }
    // Xem lại kết quả quiz
    public function reviewQuiz($courseId, $moduleId, $quizId, $resultId)
    {
        $quizResult = QuizResult::with([
            'quiz.questions',
            'historyAnswers.question'
        ])->findOrFail($resultId);

        $quiz = $quizResult->quiz;

        // Map lịch sử làm bài theo question_id
        $historyMap = $quizResult->historyAnswers->keyBy('question_id');
        
        return view('client.courses.quizzes.review', compact('quiz', 'quizResult', 'historyMap'));
    }
}
