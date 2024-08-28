@extends('layouts.master')
@section('content')

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <form class="card">
                    <div class="card-header">
                        <h3 class="card-title text-uppercase">Thông tin tài khoản
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">
                                ID
                            </label>
                            <div class="col">
                                <input type="text" disabled class="form-control" value="TL{{Auth::user()->userid}}"
                                    aria-label="Text input with dropdown button">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">
                                Tên tài khoản
                            </label>
                            <div class="col"><input type="text" disabled class="form-control" value="{{Auth::user()->name}}"
                                    aria-label="Text input with dropdown button"></div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">
                                Số điện thoại
                            </label>
                            <div class="col"><input type="text" disabled class="form-control" value="{{Auth::user()->phone}}"
                                    aria-label="Text input with dropdown button"></div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">
                                Email
                            </label>
                            <div class="col"><input type="text" disabled class="form-control" value="{{Auth::user()->email}}"
                                    aria-label="Text input with dropdown button"></div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">
                                Xu
                            </label>
                            <div class="col"><input type="text" disabled class="form-control" value="{{Auth::user()->userid}}"
                                    aria-label="Text input with dropdown button"></div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label required">
                                Mật khẩu
                            </label>
                            <div class="col"><input type="text" disabled class="form-control" value="*******"
                                    aria-label="Text input with dropdown button"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection