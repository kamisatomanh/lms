@extends('layout.client')

@section('content')

<div class="container py-4">

    {{-- ==================== KHỐI VIDEO XEM TRƯỚC ==================== --}}
    <div class="row">
        <div class="col-md-8">

            <div class="card mb-4">
                <div class="card-body p-0">

                    @if($course->video_url)
                        <video width="100%" controls>
                            <source src="{{ asset($course->video_url) }}" type="video/mp4">
                        </video>
                    @else
                        <div class="p-5 text-center bg-dark text-white">
                            <h4>Chưa có video xem trước</h4>
                        </div>
                    @endif

                </div>
            </div>

            {{-- ==================== MÔ TẢ KHÓA HỌC ==================== --}}
            <div class="card mb-4">
                <div class="card-header">
                    <h4>{{ $course->title }}</h4>
                </div>
                <div class="card-body">
                    <p>{{ $course->description }}</p>

                    <p class="mt-3">
                        <strong>Giảng viên: </strong> {{ $course->instructor->full_name }}
                    </p>

                    <p>
                        <strong>Giá: </strong>
                        @if($course->price == 0)
                            Miễn phí
                        @else
                            {{ number_format($course->price) }} đ
                        @endif
                    </p>
                    
                </div>
            </div>

        </div>

        {{-- ==================== THÔNG TIN PHỤ BÊN PHẢI ==================== --}}
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">

                    <img width="100%" src="{{ asset($course->instructor->avatar) }}"
                         class="rounded-circle mb-3" />

                    <h5>{{ $course->instructor->full_name }}</h5>
                    <p class="text-muted">{{ $course->instructor->bio }}</p>
                    @php
                    use App\Models\Student;
                    use Illuminate\Support\Facades\Auth;

                    $user = Auth::user();
                    $alreadyRegistered = false;

                    if ($user) {
                        $alreadyRegistered = Student::where('user_id', $user->id)
                            ->where('course_id', $course->id)
                            ->where('status', 'active')
                            ->exists();
                    }
                    @endphp

                    @if($alreadyRegistered)
                        <button class="btn btn-success w-100 mt-3" disabled>
                            Bạn đã đăng ký khóa học này
                        </button>

                    @elseif(Auth::check())
                        <a href="{{ route('course.register', $course->id) }}"
                        class="btn btn-primary w-100 mt-3 text-white">
                            Đăng ký khóa học
                        </a>

                    @else
                        <a href="{{ route('login') }}?redirect={{ url()->current() }}"
                        class="btn btn-primary w-100 mt-3 text-white">
                            Đăng nhập để đăng ký
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>

    {{-- ==================== DANH SÁCH BÀI HỌC ==================== --}}
    <div class="card mb-5">
        <div class="card-header">
            <h4>Nội dung khóa học</h4>
        </div>

        <div class="card-body">
            @if($alreadyRegistered)
                @foreach($course->modules as $module)
                    <div class="mb-3 border rounded">

                        <div class="p-3 bg-light fw-bold">
                            {{ $module->order }}. {{ $module->title }}
                        </div>

                        <ul class="list-group list-group-flush">
                            @foreach($module->lessons as $lesson)
                                <li class="list-group-item d-flex justify-content-between">
                                    <a href="{{ route('lesson.show', [$course->id, $lesson->id]) }}">
                                        <span>{{ $lesson->order }}. {{ $lesson->title }}</span>

                                        @if($lesson->video_url)
                                            <span class="text-primary">▶ Video</span>
                                        @else
                                            <span class="text-muted">Không có video</span>
                                        @endif
                                    </a>
                                    
                                </li>
                            @endforeach
                                <li class="list-group-item d-flex justify-content-between">
                                    @if($module->quiz)
                                        <a href="{{ route('quiz.index', [$course->id, $module->id, $module->quiz->id]) }}">
                                            <span>{{ $module->quiz->title }} - Tổng điểm: {{ $module->quiz->total_marks }}</span>
                                            <span class="text-success">📝 Quiz</span>
                                        </a>
                                    @endif
                                </li>
                        </ul>

                    </div>
                @endforeach
            @else
                <div class="alert alert-warning">
                    Vui lòng đăng ký khóa học để truy cập nội dung bài học.
                </div>
            @endif
            

        </div>
    </div>

</div>

@endsection
