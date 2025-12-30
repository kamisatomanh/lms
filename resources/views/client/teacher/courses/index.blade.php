@extends('layout.client')

@section('content')
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Khoá học của tôi</h2>
        <a href="{{ route('teacher.courses.create') }}" class="btn btn-primary">
            + Thêm khóa học
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header bg-primary text-white">Danh sách khóa học</div>

        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Học viên</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th width="180">Hành động</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($courses as $course)
                        <tr>
                            <td>
                                <img src="{{ asset( $course->image) }}" 
                                     style="width: 80px; height: 50px; object-fit: cover;">
                            </td>

                            <td>
                                <a href="{{ route('teacher.courses.show', $course->id) }}">
                                {{ $course->title }}
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-success">
                                    {{ $course->enrollments_count }} học viên
                                </span>
                            </td>

                            <td>
                                @if($course->status === 'published')
                                    <span class="badge bg-primary">Đã xuất bản</span>
                                @elseif($course->status === 'draft')
                                    <span class="badge bg-warning text-dark">Nháp</span>
                                @else
                                    <span class="badge bg-secondary">Lưu trữ</span>
                                @endif
                            </td>

                            <td>{{ $course->created_at->format('d/m/Y') }}</td>

                            <td>
                                <a href="{{ route('teacher.courses.edit', $course->id) }}" 
                                   class="btn btn-sm btn-warning">Sửa</a>

                                @if($course->status == 'draft')
                                <form action="{{ route('teacher.courses.publish', $course->id) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-sm btn-success" 
                                            onclick="return confirm('Đăng khóa học?')">
                                        Đăng
                                    </button>
                                </form>
                                @else
                                <form action="{{ route('teacher.courses.draft', $course->id) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-sm btn-warning" 
                                            onclick="return confirm('Chuyển khóa học về nháp?')">
                                        chuyển về nháp
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
