<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Course;

class CategoryController extends Controller
{
    public function index()
    {
        // Lấy tất cả danh mục + tổng khóa học của mỗi danh mục
        $categories = Category::withCount('courses')
            ->orderBy('courses_count', 'desc')
            ->get();

        return view('client.category', compact('categories'));
    }
}
