@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Sửa Quiz: {{ $quiz->title }} (Module: {{ $module->title }})</h3>

    <form action="{{ route('teacher.courses.modules.quizzes.update', [$course->id, $module->id, $quiz->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Tiêu đề Quiz</label>
            <input type="text" name="title" class="form-control" value="{{ $quiz->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control">{{ $quiz->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tổng điểm</label>
            <input type="number" name="total_marks" class="form-control" value="{{ $quiz->total_marks }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Điểm đạt</label>
            <input type="number" name="passing_marks" class="form-control" value="{{ $quiz->passing_marks }}" required>
        </div>

        <hr>
        <h5>Câu hỏi</h5>

        <div id="questions-wrapper">
            @foreach($quiz->questions as $index => $question)
            <div class="question-item border p-3 rounded mb-3">
                <input type="hidden" name="questions[{{ $index }}][id]" value="{{ $question->id }}">
                <label>Câu hỏi</label>
                <input type="text" name="questions[{{ $index }}][question_text]" class="form-control mb-2" value="{{ $question->question_text }}" required>

                <label>Option A</label>
                <input type="text" name="questions[{{ $index }}][option_a]" class="form-control mb-2" value="{{ $question->option_a }}" required>

                <label>Option B</label>
                <input type="text" name="questions[{{ $index }}][option_b]" class="form-control mb-2" value="{{ $question->option_b }}" required>

                <label>Option C</label>
                <input type="text" name="questions[{{ $index }}][option_c]" class="form-control mb-2" value="{{ $question->option_c }}" required>

                <label>Option D</label>
                <input type="text" name="questions[{{ $index }}][option_d]" class="form-control mb-2" value="{{ $question->option_d }}" required>

                <label>Đáp án đúng</label>
                <select name="questions[{{ $index }}][correct_answer]" class="form-select mb-2" required>
                    <option value="A" {{ $question->correct_answer == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $question->correct_answer == 'B' ? 'selected' : '' }}>B</option>
                    <option value="C" {{ $question->correct_answer == 'C' ? 'selected' : '' }}>C</option>
                    <option value="D" {{ $question->correct_answer == 'D' ? 'selected' : '' }}>D</option>
                </select>

                <label>Điểm câu hỏi</label>
                <input type="number" name="questions[{{ $index }}][mark]" class="form-control mb-2" value="{{ $question->mark }}" required>

                <button type="button" class="btn btn-danger btn-sm remove-question">Xóa</button>
            </div>
            @endforeach
        </div>

        <button type="button" id="add-question" class="btn btn-secondary mb-3">+ Thêm câu hỏi</button>
        <br>
        <button type="submit" class="btn btn-primary">Cập nhật Quiz</button>
    </form>
</div>

<template id="question-template">
    <div class="question-item border p-3 rounded mb-3">
        <label>Câu hỏi</label>
        <input type="text" name="questions[__INDEX__][question_text]" class="form-control mb-2" required>

        <label>Option A</label>
        <input type="text" name="questions[__INDEX__][option_a]" class="form-control mb-2" required>

        <label>Option B</label>
        <input type="text" name="questions[__INDEX__][option_b]" class="form-control mb-2" required>

        <label>Option C</label>
        <input type="text" name="questions[__INDEX__][option_c]" class="form-control mb-2" required>

        <label>Option D</label>
        <input type="text" name="questions[__INDEX__][option_d]" class="form-control mb-2" required>

        <label>Đáp án đúng</label>
        <select name="questions[__INDEX__][correct_answer]" class="form-select mb-2" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>

        <label>Điểm câu hỏi</label>
        <input type="number" name="questions[__INDEX__][mark]" class="form-control mb-2" required>

        <button type="button" class="btn btn-danger btn-sm remove-question">Xóa</button>
    </div>
</template>

<script>
    let questionIndex = {{ $quiz->questions->count() }};

    document.getElementById('add-question').addEventListener('click', function() {
        const template = document.getElementById('question-template').innerHTML.replace(/__INDEX__/g, questionIndex);
        const wrapper = document.getElementById('questions-wrapper');
        const div = document.createElement('div');
        div.innerHTML = template;
        wrapper.appendChild(div);

        div.querySelector('.remove-question').addEventListener('click', function() {
            div.remove();
        });

        questionIndex++;
    });

    document.querySelectorAll('.remove-question').forEach(btn => {
        btn.addEventListener('click', function() {
            btn.closest('.question-item').remove();
        });
    });
</script>
@endsection
