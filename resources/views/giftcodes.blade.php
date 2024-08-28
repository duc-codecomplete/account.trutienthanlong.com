@extends('layouts.master')
@section('content')

<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards">
      <div class="col-12">
        <form class="card">
          <div class="card-header">
            <h3 class="card-title">NHẬN QUÀ - GIFTCODE
            </h3>
          </div>
          <div class="card-body">
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Nhập Mã Giftcode: </label>
              <div class="col">
                <input type="" class="form-control" aria-describedby="emailHelp" placeholder="">
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Chọn Nhân Vật</label>
              <div class="col">
                <select class="form-select">
                  <option value="">---Chọn nhân vật---</option>
                  @foreach (Auth::user()->chars() as $item)
                  <option>Option 3</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-12">
        <form class="card">
          <div class="card-header text-center">
            <h3 class="card-title">DANH SÁCH GIFTCODE - DÙNG CHUNG TẤT CẢ TÀI KHOẢN

            </h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                  <tr>

                    <th>Mã giftcode</th>
                    <th>Phần thưởng</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($giftcodes as $item)
                  <tr>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                    <td>
                      <span class="flag flag-xs flag-country-us me-2"></span>
                      Carlson Limited
                    </td>

                    <td>$887</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection