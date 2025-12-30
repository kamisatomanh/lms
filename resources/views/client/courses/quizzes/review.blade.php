@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Review Quiz: {{ $quiz->title }}</h3>
    <p>Trạng thái: <strong>{{ ucfirst($quizResult->status) }}</strong></p>
    <p>Tổng điểm: <strong>{{ $quizResult->score }}/{{ $quiz->total_marks }}</strong></p>

    @foreach($quiz->questions as $index => $question)
        @php
            $history = $historyMap[$question->id] ?? null;
            $selected = $history->selected ?? null;
        @endphp

        <div class="card mb-3">
            <div class="card-body">
                <p><strong>Câu {{ $index + 1 }}:</strong> {{ $question->question_text }}</p>

                <ul class="list-group">
                    @foreach(['A','B','C','D'] as $key)
                        @php
                            $isCorrect = $question->correct_answer === $key;
                            $isSelected = $selected === $key;
                        @endphp
                        <li class="list-group-item
                            @if($isCorrect) list-group-item-success @endif
                            @if($isSelected && !$isCorrect) list-group-item-danger @endif
                        ">
                            <strong>{{ $key }}.</strong> {{ $question->{'option_' . strtolower($key)} }}
                            @if($isCorrect) ✅ Correct @endif
                            @if($isSelected && !$isCorrect) ❌ Your choice @endif
                        </li>
                    @endforeach
                </ul>

                <p>Điểm câu hỏi: {{ $isCorrect ? $question->mark : 0 }}/{{ $question->mark }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
