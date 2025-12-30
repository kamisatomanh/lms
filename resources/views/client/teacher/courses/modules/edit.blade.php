@extends('layout.client')

@section('content')
<div class="container mt-2">
    <h3>Sửa Module & Lesson cho khóa học: {{ $course->title }}</h3>

    <form action="{{ route('teacher.courses.modules.update', [$course->id, $module->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div id="module-wrapper">

            <div class="module-item border p-3 rounded mb-4">
                <input type="text" name="title" class="form-control mt-2 module-title" placeholder="TitledBorder" value="{{ $module->title }}">
                <button type="submit" class="btn btn-primary mt-3 float-end">Lưu thay đổi</button>
            </div>
            
        </div>
        
    </form>
</div>
@endsection