@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Quiz: {{ $quiz->title }}</h3>
    <p>Module: {{ $module->title }}</p>

    <a href="{{ route('quiz.start', [$course->id, $module->id, $quiz->id]) }}" class="btn btn-primary mb-3">
        📝 Bắt đầu làm bài
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Ngày làm</th>
                <th>Điểm</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse($history as $index => $result)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $result->taken_at }}</td>
                    <td>{{ $result->score }}/{{ $quiz->total_marks }}</td>
                    <td>
                        @if($result->status === 'pass')
                            <span class="text-success">Pass</span>
                        @else
                            <span class="text-danger">Fail</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('quiz.review', [$course->id, $module->id, $quiz->id, $result->id]) }}" class="btn btn-sm btn-info">
                            Xem lại
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Chưa có lịch sử làm bài</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
