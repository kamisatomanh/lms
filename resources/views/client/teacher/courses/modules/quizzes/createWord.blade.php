@extends('layout.client')

@section('content')
<div class="container mt-4">
    

    <h3>Tạo bài tập mới cho Chương: {{ $module->title }}</h3>
    <h3>Thêm câu hỏi bằng Word</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" 
          enctype="multipart/form-data"
          action="{{ route('teacher.courses.modules.quizzes.store.word', [$course->id, $module->id]) }}">
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
            <label class="form-label">File Word (.docx)</label>
            <input type="file" 
                   name="file" 
                   class="form-control"
                   accept=".docx"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Import câu hỏi
        </button>
    </form>

    <hr>

    <h5>📌 Định dạng Word bắt buộc</h5>
<pre>
CÂU 1:
Câu hỏi: Nội dung câu hỏi?

A. Đáp án A
B. Đáp án B
C. Đáp án C
D. Đáp án D

ĐÁP ÁN: B
ĐIỂM: 1
---
</pre>
</div>
@endsection
