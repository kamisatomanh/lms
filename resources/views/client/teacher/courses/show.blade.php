@extends('layout.client')

@section('content')

<div class="container mt-4">

    {{-- ===================== THÔNG TIN KHÓA HỌC ===================== --}}
    <div class="card mb-4 shadow-sm">
        <div class="row g-0">

            {{-- Ảnh khóa học --}}
            <div class="col-md-4">
                <img src="{{ asset($course->image) }}" 
                     class="img-fluid rounded-start" 
                     alt="Course Image">
            </div>

            {{-- Thông tin khóa học --}}
            <div class="col-md-8">
                <div class="card-body">

                    <h3 class="card-title">{{ $course->title }}</h3>
                    <p class="text-muted">{{ $course->description }}</p>

                    <table class="table table-sm">
                        <tr>
                            <th>Giảng viên:</th>
                            <td>{{ $course->instructor->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Danh mục:</th>
                            <td>{{ $course->category->category_name }}</td>
                        </tr>
                        <tr>
                            <th>Giá:</th>
                            <td>{{ number_format($course->price) }} VNĐ</td>
                        </tr>
                        <tr>
                            <th>Thời lượng:</th>
                            <td>{{ $course->time }}</td>
                        </tr>
                        <tr>
                            <th>Trạng thái:</th>
                            <td>
                                <span class="badge 
                                    @if($course->status=='published') bg-success
                                    @elseif($course->status=='draft') bg-secondary
                                    @else bg-danger
                                    @endif">
                                    {{ $course->status }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Số học viên:</th>
                            <td>{{ $course->students->count() }}</td>
                        </tr>
                        <tr>
                            <th>Điểm đánh giá TB:</th>
                            <td>
                                {{ round($course->ratings->avg('rating'), 1) }}/5
                                ⭐
                            </td>
                        </tr>
                    </table>

                    {{-- Video demo --}}
                    @if ($course->video_url)
                        <video controls class="w-100 mt-2 rounded">
                            <source src="{{ asset($course->video_url) }}" type="video/mp4">
                        </video>
                    @endif

                </div>
            </div>

        </div>
    </div>


    {{-- ===================== MODULE + LESSON + QUIZ ===================== --}}
    <div class="accordion" id="moduleAccordion">

        @foreach ($course->modules as $module)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading{{ $module->id }}">
                <button class="accordion-button collapsed" type="button" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#module{{ $module->id }}">
                    Chương {{ $module->order }}: {{ $module->title }}
                </button>
            </h2>

            <div id="module{{ $module->id }}" 
                 class="accordion-collapse collapse"
                 data-bs-parent="#moduleAccordion">

                <div class="accordion-body">

                    {{-- ====== Bài học ====== --}}
                    <h5>📘 Danh sách bài học</h5>

                    @if ($module->lessons->count() > 0)
                        <ul class="list-group small mb-3">
                            @foreach ($module->lessons as $lesson)
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    <a href="{{ route('teacher.courses.modules.lessons.show', [$course->id, $module->id, $lesson->id]) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        {{ $lesson->order }}. {{ $lesson->title }}
                                    </a>

                                    <div>
                                        <a href="{{ route('teacher.courses.modules.lessons.questions', [$course->id, $module->id, $lesson->id]) }}" 
                                           class="btn btn-sm btn-warning">Bài tập</a>
                                        <a href="{{ route('teacher.courses.modules.lessons.edit', [$course->id, $module->id, $lesson->id]) }}" 
                                           class="btn btn-sm btn-warning">Sửa</a>

                                        <form action="{{ route('teacher.courses.modules.lessons.delete', [$course->id, $module->id, $lesson->id]) }}"
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Xoá bài học này?')">
                                                Xoá
                                            </button>
                                        </form>
                                    </div>

                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p class="text-muted"><i>Chưa có bài học nào</i></p>
                    @endif
                    {{-- Nút hành động cho module --}}
                    <div class="mt-3 d-flex gap-2">

                        {{-- thêm bài học --}}
                        <a href="{{ route('teacher.courses.modules.lessons.create', [$course->id, $module->id]) }}"
                        class="btn btn-success btn-sm">
                            ➕ Thêm bài học
                        </a>

                        {{-- sửa module --}}
                        <a href="{{ route('teacher.courses.modules.edit', [$course->id, $module->id]) }}"
                        class="btn btn-warning btn-sm">
                            ✏️ Sửa chương
                        </a>

                        {{-- xoá module --}}
                        <form action="{{ route('teacher.courses.modules.delete', [$course->id, $module->id]) }}"
                            method="POST"
                            onsubmit="return confirm('Bạn chắc chắn muốn xoá module này?');">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                🗑️ Xoá chương
                        </form>

                    </div>


                    {{-- ====== Quiz ====== --}}
                    <h5 class="mt-3">📝 Bài tập</h5>

                    @if ($module->quiz)
                        <div class="alert alert-info small">
                            <strong>{{ $module->quiz->title }}</strong>
                            <p>{{ $module->quiz->description }}</p>

                            <p>
                                <strong>Số lượt làm bài:</strong>
                                {{ $module->quiz->results->count() }}
                            </p>

                            <a href="{{ route('teacher.courses.modules.quizzes.show', [$course->id, $module->id, $module->quiz->id]) }}"
                               class="btn btn-sm btn-primary">
                                Xem bài tập
                            </a>
                        </div>
                    @else
                        <p class="text-muted"><i>Chưa có bài tập cho chương này</i></p>
                        <a href="{{ route('teacher.courses.modules.quizzes.create', [$course->id, $module->id]) }}"
                           class="btn btn-success btn-sm">
                            ➕ Tạo bài tập
                        </a>
                    @endif

                </div>
            </div>

        </div>
        @endforeach
        {{-- ========================================= --}}
        {{--            ACTION BUTTONS                --}}
        {{-- ========================================= --}}

        <div class="container my-5">
            <div class="d-flex justify-content-center gap-3">

                {{-- Nút thêm module --}}
                <a href="{{ route('teacher.courses.modules.create', $course->id) }}" 
                class="btn btn-success btn-lg">
                    ➕ Thêm Chương Mới
                </a>

                {{-- Nút sửa khoá học --}}
                <a href="{{ route('teacher.courses.modules.multiEdit', $course->id) }}" 
                class="btn btn-warning btn-lg">
                    ✏️ Sửa các Chương
                </a>
            </div>
        </div>

    </div>

</div>

@endsection
