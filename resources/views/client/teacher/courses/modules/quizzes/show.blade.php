@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Quiz: {{ $quiz->title }}</h3>
    <p><strong>Mô tả:</strong> {{ $quiz->description }}</p>
    <p><strong>Tổng điểm:</strong> {{ $quiz->total_marks }}</p>
    <p><strong>Điểm đạt:</strong> {{ $quiz->passing_marks }}</p>

    <hr>
    <h5>Câu hỏi</h5>

    @if($quiz->questions->count() > 0)
        <ol>
            @foreach($quiz->questions as $question)
                <li class="mb-3">
                    <p><strong>Câu hỏi:</strong> {{ $question->question_text }}</p>
                    <ul>
                        <li>A: {{ $question->option_a }} @if($question->correct_answer == 'A') <span class="badge bg-success">Đúng</span> @endif</li>
                        <li>B: {{ $question->option_b }} @if($question->correct_answer == 'B') <span class="badge bg-success">Đúng</span> @endif</li>
                        <li>C: {{ $question->option_c }} @if($question->correct_answer == 'C') <span class="badge bg-success">Đúng</span> @endif</li>
                        <li>D: {{ $question->option_d }} @if($question->correct_answer == 'D') <span class="badge bg-success">Đúng</span> @endif</li>
                    </ul>
                    <p><strong>Điểm câu hỏi:</strong> {{ $question->mark }}</p>
                </li>
            @endforeach
        </ol>
    @else
        <p>Chưa có câu hỏi nào trong quiz này.</p>
    @endif

    <a href="{{ route('teacher.courses.show', $course->id) }}" class="btn btn-secondary mt-3">Quay lại khoá học</a>
    <a href="{{ route('teacher.courses.modules.quizzes.edit', [$course->id, $module->id, $quiz->id]) }}" class="btn btn-primary mt-3">Sửa Quiz</a>
</div>
@endsection
