<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('courses')
            ->orderBy('courses_count', 'desc')
            ->limit(4)
            ->get();
        $courses = Course::with('instructor')->limit(3)->get();
        $introductors = User::where('role', 'tc')->limit(4)->get();
        return view('client.home', compact('categories', 'courses', 'introductors'));
    }
}
