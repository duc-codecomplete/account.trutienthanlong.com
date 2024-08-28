@extends('layouts.master')
@section('content')
<style>
    .bank p {
        margin-bottom: auto;
    }
</style>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Nạp tiền
                </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <div class="card card-md">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-10">
                                <h3 class="h1">Nạp tiền qua Internet Banking</h3>
                                <div class="bank text-secondary">
                                    Quý đại hiệp lưu ý:
                                    <p>Cần chuyển đúng nội dung để được cộng Coin Web nhanh nhất.</p>
                                    <p>Sau khi chuyển khoản thành công, quý đại hiệp vui lòng đợi từ 1 phút - 2 phút. Hệ
                                    thống tự động cộng Coin Web vào tài khoản.</p>
                                    <p>Sau khi kiểm tra có Coin Web, quý đại hiệp vào trang Đổi Coin Web để quy đổi coin
                                    web hiện có sang các loại tiền game.</p>
                                </div>
                                <div class="mt-3 text-center">
                                    <img src="/ui/static/vcb.png" alt="" width="50%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection