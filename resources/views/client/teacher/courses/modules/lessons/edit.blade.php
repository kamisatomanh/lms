@extends('layout.client')

@section('content')
<div class="container">

    <h3>Thêm mới Lesson</h3>

    <form action="{{ route('teacher.courses.modules.lessons.update', [$course->id, $module->id, $lesson->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Tên bài học (Title)</label>
            <input type="text" name="title" class="form-control" value="{{ $lesson->title }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nội dung (Content)</label>
            <textarea name="content" rows="6" class="form-control">{{ $lesson->content }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Video hiện tại</label><br>
            @if($lesson->video_url)
                <video width="300" controls class="border mb-2">
                    <source src="{{ asset($lesson->video_url) }}" type="video/mp4">
                </video>
            @else
                <p>Không có video</p>
            @endif

            <label class="form-label mt-2">Chọn video mới (nếu muốn thay)</label>
            <input type="file" name="video_url" class="form-control">
        </div>

        <button class="btn btn-success">Lưu bài học</button>

    </form>
</div>
@endsection
