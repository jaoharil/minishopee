@extends('admin.layout.appadmin')

@section('content')

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-6 col-xl-3">
        
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
          
              <i class="fa fa-chart-line fa-3x text-primary"></i>
              <div class="ms-3">
                  <p class="mb-2">Data Produk</p>
                  <h6 class="mb-0">{{$produk}}</h6>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-bar fa-3x text-primary"></i>
              <div class="ms-3">
                  <p class="mb-2">Jenis Produk</p>
                  <h6 class="mb-0">{{$jenis_produk}}</h6>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-area fa-3x text-primary"></i>
              <div class="ms-3">
                  <p class="mb-2">Pelanggan</p>
                  <h6 class="mb-0">{{$pelanggan}}</</h6>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-xl-3">
          <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
              <i class="fa fa-chart-pie fa-3x text-primary"></i>
              <div class="ms-3">
                  <p class="mb-2">Kartu</p>
                  <h6 class="mb-0">{{$kartu}}</h6>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Sale & Revenue End -->


<!-- Sales Chart Start -->
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      <div class="col-sm-12 col-xl-6">
          <div class="bg-secondary text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Worldwide Sales</h6>
                  <a href="">Show All</a>
              </div>
              <canvas id="worldwide-sales"></canvas>
          </div>
      </div>
      <div class="col-sm-12 col-xl-6">
          <div class="bg-secondary text-center rounded p-4">
              <div class="d-flex align-items-center justify-content-between mb-4">
                  <h6 class="mb-0">Salse & Revenue</h6>
                  <a href="">Show All</a>
              </div>
              <canvas id="salse-revenue"></canvas>
          </div>
      </div>
  </div>
</div>
<!-- Sales Chart End -->









@endsection