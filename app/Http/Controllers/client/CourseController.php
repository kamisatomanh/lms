<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index($id)
    {
        // Lấy danh mục theo id (nếu không tồn tại sẽ báo 404)
        $category = Category::findOrFail($id);

        // Lấy các khóa học thuộc danh mục đó
        $courses = Course::where('category_id', $id)->where('status', 'published')->get();

        // Lấy tất cả danh mục (nếu cần dùng cho sidebar/filter)
        $categories = Category::all();

        return view('client.courses.index', compact('courses', 'categories', 'category'));
    }

    public function show($id)
    {
        $course = Course::with([
            'instructor',
            'modules.lessons',
            'modules.quiz'
        ])->findOrFail($id);

        return view('client.courses.show', compact('course'));
    }
    public function register($courseId)
    {
        $course = Course::findOrFail($courseId);

        return view('client.courses.register', compact('course'));
    }
    public function registerSubmit(Request $request, $courseId)
    {
        $user = Auth::user();
        $course = Course::findOrFail($courseId);

        // Xử lý số tiền từ course
        $amount = $course->price ?? 0;

        // Lưu payment
        $payment = Payment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'amount' => $amount,
            'payment_method' => $request->payment_method,
            'status' => 'success', // giả lập thành công ngay, hoặc 'pending' nếu cần thanh toán online
            'paid_at' => now(),
        ]);

        // Nếu thanh toán thành công thì ghi học viên vào bảng students
        if ($payment->status === 'success') {
            Student::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
                'enrolled_at' => now(),
                'status' => 'active',
            ]);
        }


        return redirect()->route('course.show', $courseId)->with('success', 'Bạn đã đăng ký khóa học thành công!');
    }
}
