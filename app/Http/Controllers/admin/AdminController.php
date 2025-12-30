<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Module;
use App\Models\Payment;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Progress;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\HistoryAnswer;
use App\Models\Answer;
use App\Models\Rating;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function coursesIndex()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    public function courseDraftIndex()
    {
        $courses = Course::where('status', 'draft')->get();
        return view('admin.courses.draft_index', compact('courses'));
    }

    public function coursePublish($id)
    {
        $course = Course::find($id);
        $course->status = 'published';
        $course->save();
        return view('admin.courses.index', compact('course'));
    }
    public function courseDraft($id)
    {
        $course = Course::find($id);
        $course->status = 'draft';
        $course->save();
        return view('admin.courses.index', compact('course'));
    }
    public function courseArchive($id)
    {
        $course = Course::find($id);
        $course->status = 'archived';
        $course->save();
        return view('admin.courses.index', compact('course'));
    }
    public function courseDelete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return view('admin.courses.index', compact('course'));
    }
    public function studentsIndex()
    {
        $students = User::where('role', 'st')->get();
        return view('admin.users.students', compact('students'));
    }
    public function teachersIndex()
    {
        $teachers = User::where('role', 'tc')->get();
        return view('admin.users.teachers', compact('teachers'));
    }
    public function adminsIndex()
    {
        $admins = User::where('role', 'ad')->get();
        return view('admin.users.admins', compact('admins'));
    }
    public function userCreate()
    {
        return view('admin.users.create');
    }

    public function userStore(Request $request)
    {
        $user = new User();
        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->password = Hash::make('123456');
        $user->role = $request->input('role');
        $user->phone = $request->input('phone');
        $user->birthday = $request->input('birthday');
        $user->bio = $request->input('bio');
        $imagePath = null;
        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Lưu vào public/user/avatars/
            $file->move(public_path('user/avatars'), $filename);

            $imagePath = 'user/avatars/' . $filename;
        }

        $user->avatar = $imagePath;
        dd( $user);
        $user->save();

        return redirect()->route('admin.users.students')->with('success', 'User created successfully.');
    }
    public function userEdit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }
    public function userUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->birthday = $request->input('birthday');
        $user->bio = $request->input('bio');
        if ($user->avatar && file_exists(public_path($user->avatar))) {
                unlink(public_path($user->avatar));
            }
        $imagePath = null;
        if ($request->hasFile('avatar')) {

            $file = $request->file('avatar');
            $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();

            // Lưu vào public/user/avatars/
            $file->move(public_path('user/avatars'), $filename);

            $imagePath = 'user/avatars/' . $filename;
        }

        $user->avatar = $imagePath;

        $user->save();

        return redirect()->route('admin.users.students')->with('success', 'User updated successfully.');
    }
}
