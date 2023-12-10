@extends('admin.layout.appadmin')
@section('content')

@if (Auth::user()->role != 'staff')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
      
      <div class="col-12">
          <div class="bg-secondary rounded h-100 p-4">
              <h6 class="mb-4">Responsive Table</h6>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kode</th>
                              <th scope="col">Name</th>
                              <th scope="col">Diskon</th>
                              <th scope="col">Iuran</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach ($kartu as $k)
                          <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $k->kode }}</td>
                              <td>{{ $k->nama }}</td>
                              <td>{{ $k->diskon }}</td>
                              <td>{{ $k->iuran }}</td>
                             
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>
@else
                @include('admin.notfound')
                    @endif
@endsection