@extends('layout.client')

@section('content')
<div class="container">

    <h3>Thêm mới Lesson</h3>

    <form action="{{ route('teacher.courses.modules.lessons.store', [$course->id, $module->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Tên bài học (Title)</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nội dung (Content)</label>
            <textarea name="content" rows="6" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Tải file lên (Video)</label>
            <input type="file" name="video_url" class="form-control">
        </div>

        <button class="btn btn-success">Lưu bài học</button>

    </form>
</div>
@endsection
