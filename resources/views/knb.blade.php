@extends('layouts.master')
@section('content')

<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-12">
                <form class="card">
                    <div class="card-header">
                        <h3 class="card-title">CHUYỂN ĐỔI KNB
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="space-y-4">
                            <div>
                                <div id="faq-1" class="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="accordion-item">
                                        <div class="accordion-header" role="tab">
                                            <button class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#faq-1-1">Lưu ý!</button>
                                        </div>
                                        <div id="faq-1-1" class="accordion-collapse collapse show" role="tabpanel"
                                            data-bs-parent="#faq-1">
                                            <div class="accordion-body pt-0">
                                                <div>
                                                    <p>Tỉ lệ: 1000 XU = 3 KNB = 3 VIP
                                                    </p>
                                                    <p>Thời gian xử lí từ 2 đến 5 phút nếu lâu hơn hãy thoát ra vào lại.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mb-3 row">
                                    <label class="col-3 col-form-label required">Số lượng xu: </label>
                                    <div class="col">
                                        <input type="number" min="1" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection