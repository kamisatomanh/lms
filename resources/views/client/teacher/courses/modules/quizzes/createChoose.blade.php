@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h4>Tạo Quiz – Chọn câu hỏi theo bài giảng</h4>

    <form method="POST"
          action="{{ route('teacher.courses.modules.quizzes.store.choose',
          [$module->course->id, $module->id]) }}">
        @csrf

        {{-- Thông tin quiz --}}
        <div class="mb-3">
            <label class="form-label">Tiêu đề Quiz</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <hr>

        {{-- DANH SÁCH CÂU HỎI THEO LESSON --}}
        @foreach($module->lessons as $lesson)
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <strong>Bài giảng: {{ $lesson->title }}</strong>
                </div>

                <div class="card-body">
                    @if($lesson->questions->count())
                        @foreach($lesson->questions as $q)
                            <div class="form-check mb-2">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="question_ids[]"
                                    value="{{ $q->id }}"
                                    id="q{{ $q->id }}"
                                >

                                <label class="form-check-label" for="q{{ $q->id }}">
                                    {{ $q->question_text }}
                                    <span class="text-muted">
                                        ({{ $q->mark }} điểm)
                                    </span>
                                </label>

                                <div class="ms-4 text-muted small">
                                    A. {{ $q->option_a }} <br>
                                    B. {{ $q->option_b }} <br>
                                    C. {{ $q->option_c }} <br>
                                    D. {{ $q->option_d }}
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    @else
                        <p class="text-muted">Chưa có câu hỏi cho bài giảng này</p>
                    @endif
                </div>
            </div>
        @endforeach

        @error('question_ids')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <button class="btn btn-primary">
            Tạo Quiz
        </button>

        <a href="{{ route('teacher.courses.modules.show',
            [$module->course->id, $module->id]) }}"
           class="btn btn-secondary">
            Quay lại
        </a>
    </form>
</div>
@endsection
