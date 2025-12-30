@extends('layout.client')

@section('content')
<div class="container" style="max-width: 500px; margin-top: 40px;">
    <h3 class="text-center">Đăng ký</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="m-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/register') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Họ và tên:</label>
            <input type="text" name="full_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Số điện thoại:</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
            <label>Ngày sinh:</label>
            <input type="date" name="birthday" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mật khẩu:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Nhập lại mật khẩu:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button class="btn btn-success w-100">Đăng ký</button>
    </form>

    <p class="mt-3 text-center">
        Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a>
    </p>
</div>
@endsection
