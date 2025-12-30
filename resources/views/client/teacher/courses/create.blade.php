@extends('layout.client')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">➕ Thêm Khóa Học Mới</h2>

    {{-- Hiển thị lỗi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Lỗi!</strong> Vui lòng kiểm tra lại thông tin.<br><br>
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('teacher.courses.store') }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="p-4 border rounded bg-white shadow-sm">

        @csrf

        {{-- Tiêu đề --}}
        <div class="mb-3">
            <label class="form-label">Tên khóa học *</label>
            <input type="text" name="title" class="form-control" placeholder="Ví dụ: Lập trình Laravel từ A-Z" required>
        </div>

        {{-- Mô tả --}}
        <div class="mb-3">
            <label class="form-label">Mô tả *</label>
            <textarea name="description" class="form-control" rows="4" placeholder="Nhập mô tả khóa học..." required></textarea>
        </div>

        {{-- Category --}}
        <div class="mb-3">
            <label class="form-label">Danh mục *</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Chọn danh mục --</option>
                @foreach ($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Giá khóa học --}}
        <div class="mb-3">
            <label class="form-label">Giá khóa học (VNĐ) *</label>
            <input type="number" name="price" class="form-control" placeholder="0" required>
        </div>

        {{-- Thời lượng --}}
        <!-- <div class="mb-3">
            <label class="form-label">Thời lượng khóa học *</label>
            <input type="time" name="time" class="form-control" required>
        </div> -->

        {{-- Trạng thái --}}
        <!-- <div class="mb-3">
            <label class="form-label">Trạng thái khóa học</label>
            <select name="status" class="form-select">
                <option value="draft">Bản nháp</option>
                <option value="published">Xuất bản</option>
                <option value="archived">Lưu trữ</option>
            </select>
        </div> -->

        {{-- Upload ảnh --}}
        <div class="mb-3">
            <label class="form-label">Ảnh khóa học</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        {{-- Upload Video --}}
        <div class="mb-3">
            <label class="form-label">Video giới thiệu khóa học</label>
            <input type="file" name="video_url" class="form-control" accept="video/*">
            <small class="text-muted">Bạn có thể tải video .mp4</small>
        </div>

        {{-- Nút --}}
        <div class="text-end mt-4">
            <a href="{{ route('teacher.courses.index') }}" class="btn btn-secondary">Hủy</a>
            <button type="submit" class="btn btn-primary">Lưu khóa học</button>
        </div>

    </form>

</div>
@endsection
