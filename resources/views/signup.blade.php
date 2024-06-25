@extends('layouts.auth')
@section('content')
<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">Đăng Ký</h2>

        <form action="" method="POST" autocomplete="off" novalidate>
            @csrf
            @if ($errors->any())
            <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                <small>{{ $errors->first() }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                <small>{{ Session::get('error') }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(Session::has('success'))
            <div class="alert alert-important alert-success alert-dismissible" role="alert">
                <small>{{ Session::get('success') }}</small>
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
                    placeholder="Mật khẩu" required="required" name="passwd">
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Nhập lại mật khẩu
                </label>
                <input type="password" class="form-control" autocomplete="off"
                    placeholder="Nhập lại mật khẩu" required="required" name="passwdConfirm">
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Email
                </label>
                <input type="email" class="form-control" autocomplete="off"
                    placeholder="Email" required="required" name="email">
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Đăng Ký</button>
            </div>
        </form>
    </div>
</div>
<div class="text-center text-secondary mt-3">
    Đã có tài khoản? <a href="/dang-nhap" tabindex="-1">Đăng Nhập</a>
</div>
@endsection