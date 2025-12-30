@extends('layout.client')

@section('content')
<div class="container" style="max-width: 450px; margin-top: 40px;">
    <h3 class="text-center">Đăng nhập</h3>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
            <label>Mật khẩu:</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button class="btn btn-primary w-100">Đăng nhập</button>
    </form>

    <p class="mt-3 text-center">
        Chưa có tài khoản? <a href="{{ route('register') }}">Đăng ký</a>
    </p>
</div>
@endsection
