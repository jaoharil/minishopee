@extends('admin.layout.appadmin')
@section('content')

@if (Auth::user()->role != 'admin')
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
                              <th scope="col">Nama</th>
                              <th scope="col">Role</th>
                              <th scope="col">Email</th>
                              <th scope="col">Foto</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach ($user as $u)
                          <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $u->nama }}</td>
                              <td>{{ $u->email }}</td>
                              <td>{{ $u->role }}</td>
                              <td>{{ $u->foto }}</td>
                             
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