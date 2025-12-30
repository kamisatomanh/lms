@extends('layout.client')

@section('content')
<div class="container mt-4">

    <h3>Import câu hỏi cho bài học</h3>

    <div class="card mt-3">
        <div class="card-body">

            <p>
                <strong>Bài học:</strong> {{ $lesson->title }} <br>
                <strong>Module:</strong> {{ $lesson->module->title }} <br>
                <strong>Khoá học:</strong> {{ $lesson->module->course->title }}
            </p>

            <hr>

            {{-- Thông báo lỗi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form upload --}}
            <form method="POST"
                  action="{{ route('teacher.courses.modules.lessons.questions.store', [$course->id, $module->id, $lesson->id]) }}"
                  enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Chọn file Word (.docx)</label>
                    <input type="file"
                           name="file"
                           class="form-control"
                           accept=".docx"
                           required>
                </div>

                <div class="alert alert-info">
                    <strong>Định dạng file Word:</strong><br><br>

<pre>
Câu hỏi: Nội dung câu hỏi
A. Đáp án A
B. Đáp án B
C. Đáp án C
D. Đáp án D
ĐÁP ÁN: A
ĐIỂM: 2
---
Câu hỏi: ...
</pre>
                </div>

                <button type="submit" class="btn btn-success">
                    Import câu hỏi
                </button>

                <a href="{{ route('teacher.courses.show', $course->id) }}"
                   class="btn btn-secondary ms-2">
                    Quay lại
                </a>

            </form>

        </div>
    </div>
</div>
@endsection
