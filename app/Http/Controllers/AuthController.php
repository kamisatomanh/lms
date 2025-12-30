<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Course;

class AuthController extends Controller
{
    // Trang đăng nhập
    public function showLogin(Request $request)
    {
        if ($request->redirect) {
            session(['url.intended' => $request->redirect]);
        }
        return view('client.auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)&& Auth::user()->role === 'st') {
            return redirect()->intended(route('home'));
        }elseif (Auth::attempt($credentials)&& Auth::user()->role === 'tc') {
            return redirect()->intended('/teacher/courses')->with('success', 'Đăng nhập thành công');
        }elseif (Auth::attempt($credentials)&& Auth::user()->role === 'ad') {
            return redirect()->intended('/admin')->with('success', 'Đăng nhập thành công');
        }


        return back()->with('error', 'Email hoặc mật khẩu không đúng');
    }

    // Trang đăng ký
    public function showRegister()
    {
        return view('client.auth.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'password'  => 'required|min:6|confirmed',
            'phone'     => 'nullable',
            'birthday'  => 'nullable|date',
        ]);

        $user = User::create([
            'full_name' => $request->full_name,
            'email'     => $request->email,
            'password'  => Hash::make($request->password),
            'phone'     => $request->phone,
            'birthday'  => $request->birthday,
            'role'      => 'st', // mặc định là học sinh
            'avatar'    => null,
            'bio'       => null,
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'Đăng ký thành công');
    }

    // Đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Đăng xuất thành công');
    }
    // Hiển thị trang profile
    public function profile()
    {
        $user = Auth::user();
        return view('client.auth.profile', compact('user'));
    }
    // Cập nhật thông tin profile
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->update($request->all());
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }
    // Hiển thị các khóa học của người dùng
    public function myCourses()
    {
        $userId = Auth::id();

        // Lấy các course mà user đã đăng ký và đang active
        $courses = Course::whereHas('students', function($query) use ($userId) {
            $query->where('user_id', $userId)
                ->where('status', 'active');
        })->with('instructor')->get();
        return view('client.auth.my_courses', compact('courses'));
    }
}
