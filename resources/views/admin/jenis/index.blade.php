@extends('admin.layout.appadmin')
@section('content')


<div class="container-fluid pt-4 px-4 ">
  <div class="row g-4">
    <div class="col-12">
        <div class="bg-secondary rounded h-100 p-4">
            
            <div class="card-header py-3">
    <a href="{{url('admin/jenis_produk/create')}}" class="btn btn-primary" ><i class="fas fa-plus"></i></a>
            </div>
      <div class="col-12">
          <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Jenis Produk</h6>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Aksi</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                        @php
                          $no = 1
                        @endphp
                        @foreach ($jenis_produk as $j)
                          
                       
                          <tr>
                              <th scope="row">{{$no++}}</th>
                              <td>{{ $j->nama }}</td>
                             <td>
                                <a href="{{url('admin/jenis_produk/edit/'.$j->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{url('admin/jenis_produk/delete/'.$j->id)}}" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                
                                  
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$j->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        Apakah anda yakin akan menghapus data {{$j->nama}} ?
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="{{url('admin/jenis_produk/delete/'.$j->id)}}" type="button" class="btn btn-danger">Delete</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                                                            </td>
                            </td>
                             
                          </tr>
                          
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
        </div>
      </div>
  </div>
</div>

@endsection