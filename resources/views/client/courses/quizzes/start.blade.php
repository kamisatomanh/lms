@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Làm Quiz: {{ $quiz->title }}</h3>
    <p>{{ $quiz->description }}</p>

    <form action="{{ route('quiz.submit', [ $quiz->module->course_id, $quiz->module_id, $quiz->id]) }}" method="POST">
        @csrf

        @foreach($quiz->questions as $index => $question)
            <div class="card mb-3">
                <div class="card-body">
                    <p><strong>Câu {{ $index + 1 }}:</strong> {{ $question->question_text }}</p>

                    @foreach($question->shuffled_options as $key => $option)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                                name="answers[{{ $question->id }}]" 
                                value="{{ $key }}" 
                                id="q{{ $question->id }}_{{ $key }}">
                            <label class="form-check-label" for="q{{ $question->id }}_{{ $key }}">
                                {{ $option }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary">Nộp bài</button>
    </form>
</div>
@endsection
