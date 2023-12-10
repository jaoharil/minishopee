@extends('admin.layout.appadmin')
@section('content')


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
                              <th scope="col">Nama</th>
                              <th scope="col">Tempat Lahir</th>
                              <th scope="col">Jenis Kelamin</th>
                              
                              <th scope="col">Tanggal Lahir</th>
                              <th scope="col">Email</th>
                              <th scope="col">Action</th>
                              
                              
                          </tr>
                      </thead>
                      <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach ($pelanggan as $pe)
                          <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $pe->kode }}</td>
                              <td>{{ $pe->nama }}</td>
                              <td>{{ $pe->tmp_lahir }}</td>
                              <td>{{ $pe->jk }}</td>
                              <td>{{ $pe->tgl_lahir }}</td>
                              <td>{{ $pe->email }}</td>
                              <td></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection