@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h4>Tạo bài tập ngẫu nhiên theo từng bài giảng</h4>

    <form method="POST"
          action="{{ route('teacher.courses.modules.quizzes.store.random', [$module->course->id, $module->id]) }}">
        @csrf

        <div class="mb-3">
            <label>Tiêu đề Quiz</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <hr>

        <h5>Chọn số câu hỏi random theo từng Lesson</h5>

        @foreach($module->lessons as $lesson)
            <div class="border rounded p-3 mb-3">
                <strong>{{ $lesson->title }}</strong>

                <p class="text-muted">
                    Tổng số câu hỏi: {{ $lesson->lesson_questions_count }}
                </p>

                <input
                    type="number"
                    class="form-control lesson-input"
                    name="lessons[{{ $lesson->id }}]"
                    value="0"
                    min="0"
                    max="{{ $lesson->lesson_questions_count }}"
                    data-max="{{ $lesson->lesson_questions_count }}"
                    {{ $lesson->lesson_questions_count == 0 ? 'disabled' : '' }}
                >

                @if($lesson->lesson_questions_count == 0)
                    <small class="text-danger">Lesson này chưa có câu hỏi</small>
                @endif
            </div>
        @endforeach



        <button class="btn btn-primary mt-3">
            Tạo Quiz Random
        </button>
    </form>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {

    document.querySelectorAll('.lesson-input').forEach(input => {

        input.addEventListener('input', function () {
            let max = parseInt(this.dataset.max);
            let val = parseInt(this.value);

            if (isNaN(val) || val < 0) {
                this.value = 0;
                return;
            }

            if (val > max) {
                this.value = max;
            }
        });

        // Chặn paste số lớn
        input.addEventListener('paste', function (e) {
            e.preventDefault();
        });
    });

});
</script>
@endsection
