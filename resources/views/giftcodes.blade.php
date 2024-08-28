@extends('layouts.master')
@section('content')

<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards">
      <div class="col-12">
        <form class="card" method="POST">
          @csrf
          <div class="card-header">
            <h3 class="card-title">NHẬN QUÀ - GIFTCODE
            </h3>
          </div>
          <div class="card-body">
            @if(Session::has('error'))
            <div class="alert alert-important alert-danger alert-dismissible" role="alert">
              <div class="d-flex">
                <div>
                  <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon alert-icon">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                    <path d="M12 8v4"></path>
                    <path d="M12 16h.01"></path>
                  </svg>
                </div>
                <div>
                  {{ Session::get('error') }}
                </div>
              </div>
              <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            @if(Session::has('success'))
            <div class="alert alert-important alert-success alert-dismissible" role="alert">
              <div class="d-flex">
                <div>
                  <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon alert-icon">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M5 12l5 5l10 -10"></path>
                  </svg>
                </div>
                <div>
                  {{ Session::get('success') }}
                </div>
              </div>
              <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Nhập Mã Giftcode: </label>
              <div class="col">
                <input name="giftcode" class="form-control" required>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-3 col-form-label required">Chọn Nhân Vật</label>
              <div class="col">
                <select class="form-select" name="char_id">
                  <option value="">---Chọn nhân vật---</option>
                  @foreach (Auth::user()->chars() as $item)
                  <option value="{{ $item['char_id'] }}">{{ $item['char_id'] }} - {{ $item->getName() }} - {{ $item->getClass() }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
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
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($giftcodes as $item)
                  <tr>
                    <td>{{$item->giftcode}}</td>
                    <td>
                      {{$item->award}}
                    </td>

                    <td>Chưa dùng</td>
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