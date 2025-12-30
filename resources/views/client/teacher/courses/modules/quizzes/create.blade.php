@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Tạo bài tập mới cho Chương: {{ $module->title }}</h3>
    <button class="btn btn-primary"><a href="{{ route('teacher.courses.modules.quizzes.create.word', [$course->id, $module->id]) }}" class="text-light">Thêm bằng file word</a></button>
    <button class="btn btn-primary"><a href="{{ route('teacher.courses.modules.quizzes.create.choose', [$course->id, $module->id]) }}" class="text-light">Lựa chọn câu hỏi</a></button>
    <button class="btn btn-primary"><a href="{{ route('teacher.courses.modules.quizzes.create.random', [$course->id, $module->id]) }}" class="text-light">Ngẫu nhiên</a></button>
    <form action="{{ route('teacher.courses.modules.quizzes.store', [$course->id, $module->id]) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tiêu đề Quiz</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tổng điểm</label>
            <input type="number" name="total_marks" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Điểm đạt</label>
            <input type="number" name="passing_marks" class="form-control" required>
        </div>

        <hr>
        <h5>Câu hỏi</h5>

        <div id="questions-wrapper"></div>

        <button type="button" id="add-question" class="btn btn-secondary mb-3">+ Thêm câu hỏi</button>
        <br>
        <button type="submit" class="btn btn-primary">Lưu Bài tập</button>
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
    let questionIndex = 0;

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
</script>
@endsection
