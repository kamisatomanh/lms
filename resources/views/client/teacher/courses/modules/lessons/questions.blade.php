@extends('layout.client')

@section('content')
<div class="container mt-4">

    <h3>Câu hỏi bài học: {{ $lesson->title }}</h3>
    <p>
        <strong>Khoá học:</strong> {{ $lesson->module->course->title }} <br>
        <strong>Module:</strong> {{ $lesson->module->title }}
    </p>

    <hr>

    <h5>Danh sách câu hỏi</h5>

    @if($lesson->questions->count() > 0)
        <ol>
            @foreach($lesson->questions as $question)
                <li class="mb-4">

                    <p><strong>Câu hỏi:</strong> {{ $question->question_text }}</p>

                    <ul class="list-unstyled ms-3">
                        <li>
                            A. {{ $question->option_a }}
                            @if($question->correct_answer === 'A')
                                <span class="badge bg-success ms-2">Đúng</span>
                            @endif
                        </li>
                        <li>
                            B. {{ $question->option_b }}
                            @if($question->correct_answer === 'B')
                                <span class="badge bg-success ms-2">Đúng</span>
                            @endif
                        </li>
                        <li>
                            C. {{ $question->option_c }}
                            @if($question->correct_answer === 'C')
                                <span class="badge bg-success ms-2">Đúng</span>
                            @endif
                        </li>
                        <li>
                            D. {{ $question->option_d }}
                            @if($question->correct_answer === 'D')
                                <span class="badge bg-success ms-2">Đúng</span>
                            @endif
                        </li>
                    </ul>

                    <p class="mt-2">
                        <strong>Điểm:</strong> {{ $question->mark }}
                    </p>

                </li>
            @endforeach
        </ol>
    @else
        <div class="alert alert-warning">
            Chưa có câu hỏi nào cho bài học này.
        </div>
    @endif

    <div class="mt-4">
        <a href="{{ route('teacher.courses.modules.lessons.questions.create', [$course->id, $module->id, $lesson->id]) }}"
           class="btn btn-primary">
            + Import câu hỏi từ Word
        </a>

        <a href="{{ route('teacher.courses.show', $course->id) }}"
           class="btn btn-secondary ms-2">
            Quay lại khoá học
        </a>
    </div>

</div>
@endsection