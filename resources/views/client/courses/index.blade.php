@extends('layout.client')


@section('content')
<h2 class="fw-bold mb-4">
    Khóa học thuộc danh mục: {{ $category->category_name }}
</h2>
<div class="row g-4">
    @forelse ($courses as $course)
        <div class="col-lg-4 col-md-6">
            <a href="{{ route('course.show', $course->id) }}">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('uploads/courses/' . $course->image) }}" class="card-img-top" alt="">

                    <div class="card-body">
                        <h5>{{ $course->title }}</h5>
                        <p class="text-muted">Giảng viên: {{ $course->instructor->full_name }}</p>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <p>Không có khóa học nào trong danh mục này.</p>
    @endforelse
</div>
@endsection