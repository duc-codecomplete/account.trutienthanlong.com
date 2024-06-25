@extends('layouts.auth')
@section('content')
<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">Đăng Nhập</h2>
        <form action="" method="POST" autocomplete="off" novalidate>
            @csrf
                @if(Session::has('error'))
                <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                    <small>{{ Session::get('error') }}</small>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            <div class="mb-3">
                <label class="form-label">Tên đăng nhập</label>
                <input type="" class="form-control" placeholder="Tên đăng nhập" autocomplete="off" name="login"
                    required>
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Mật khẩu
                </label>
                <input type="password" class="form-control" autocomplete="off"
                    placeholder="Mật khẩu" required="required" name="password">
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Đăng Nhập</button>
            </div>
        </form>
    </div>
</div>
<div class="text-center text-secondary mt-3">
    Chưa có tài khoản? <a href="/dang-ky" tabindex="-1">Đăng Ký</a>
</div>
@endsection