@extends('layout.client')

@section('content')
<div class="container mt-4">
    <h3>Đăng ký khóa học: {{ $course->title }}</h3>

    <div class="card mb-3">
        <div class="card-body">
            <p><strong>Mô tả:</strong> {{ $course->description ?? 'Không có mô tả' }}</p>
            <p><strong>Giảng viên:</strong> {{ $course->instructor->name ?? 'N/A' }}</p>
            <p><strong>Giá:</strong> <span class="text-success">{{ number_format($course->price ?? 0, 0, ',', '.') }} VND</span></p>
        </div>
    </div>

    <h5>Thông tin thanh toán</h5>
    <form action="{{ route('course.register.submit', $course->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Họ và tên</label>
            <input type="text" name="full_name" class="form-control" value="{{ Auth::user()->getAttribute('full_name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->getAttribute('email') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" name="phone" class="form-control" value="{{ Auth::user()->getAttribute('phone') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Phương thức thanh toán</label>
            <select name="payment_method" class="form-select" required>
                <option value="card">Thẻ ngân hàng</option>
                <option value="momo">Ví MoMo</option>
                <option value="vnpay">VNPay</option>
                <option value="cod">Thanh toán khi nhận</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Thanh toán & Đăng ký</button>
    </form>
</div>
@endsection
