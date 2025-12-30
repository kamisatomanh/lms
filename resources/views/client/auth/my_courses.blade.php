@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Khóa học của tôi</h3>

    @if($courses->isEmpty())
        <p>Bạn chưa đăng ký khóa học nào.</p>
    @else
        <div class="row">
            @foreach($courses as $course)
            <div class="col-md-4 mb-3">
                <div class="card">
                    @if($course->image)
                        <img src="{{ asset($course->image) }}" class="card-img-top" alt="{{ $course->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->title }}</h5>
                        <p class="card-text">{{ Str::limit($course->description, 100) }}</p>
                        <p class="text-muted">Giảng viên: {{ $course->instructor->full_name }}</p>
                        <a href="{{ route('course.show', $course->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
