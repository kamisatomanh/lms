@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h2>Sửa khóa học</h2>

    <form action="{{ route('teacher.courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- Title --}}
        <div class="mb-3">
            <label class="form-label">Tên khóa học</label>
            <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
        </div>

        {{-- Category --}}
        <div class="mb-3">
            <label class="form-label">Danh mục</label>
            <select name="category_id" class="form-control">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $course->category_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->category_name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label class="form-label">Mô tả khóa học</label>
            <textarea name="description" class="form-control" rows="4">{{ $course->description }}</textarea>
        </div>

        {{-- Giá khóa học --}}
        <div class="mb-3">
            <label class="form-label">Giá khóa học (VNĐ) *</label>
            <input type="number" name="price" class="form-control" placeholder="0" value="{{ $course->price }}" required>
        </div>

        {{-- Image --}}
        <div class="mb-3">
            <label class="form-label">Image hiện tại</label><br>
            @if($course->image)
                <img src="{{ asset($course->image) }}" width="200" class="border mb-2">
            @else
                <p>Không có image</p>
            @endif

            <label class="form-label mt-2">Chọn image mới (nếu muốn thay)</label>
            <input type="file" name="image" class="form-control">
        </div>

        {{-- Video --}}
        <div class="mb-3">
            <label class="form-label">Video hiện tại</label><br>
            @if($course->video_url)
                <video width="300" controls class="border mb-2">
                    <source src="{{ asset($course->video_url) }}" type="video/mp4">
                </video>
            @else
                <p>Không có video</p>
            @endif

            <label class="form-label mt-2">Chọn video mới (nếu muốn thay)</label>
            <input type="file" name="video_url" class="form-control">
        </div>

        {{-- Submit --}}
        <button class="btn btn-primary mt-3">Cập nhật</button>
        <a href="{{ route('teacher.courses.index') }}" class="btn btn-secondary mt-3">Hủy</a>
    </form>
</div>
@endsection
