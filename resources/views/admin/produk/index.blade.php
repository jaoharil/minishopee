@extends('admin.layout.appadmin')
@section('content')


<div class="container-fluid pt-4 px-4 ">
  <div class="row g-4">
      
      <div class="col-12">
          <div class="bg-secondary rounded h-100 p-4">
              <h6 class="mb-4">Produk</h6>
              <div class="card-header py-3">
                <a href="{{url('admin/produk/create')}}" class="btn btn-primary" ><i class="fas fa-plus"></i></a>
                <a href="{{url('admin/produk/produkPDF')}}" class="btn btn-danger"><i class="fas fa-file-pdf"></i></a>
                <a href="{{url('admin/produk/export')}}" class="btn btn-success"><i class="fas fa-file-excel"></i></a>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-upload"></i>
                </button>
                </div>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">No</th>
                              <th scope="col">Kode</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Haga</th>
                              <th scope="col">Star</th>
                              <th scope="col">Review</th>
                              <th scope="col">Foto</th>
                              <th scope="col">Action</th>
                              
                              
                          </tr>
                      </thead>
                      <tbody>
                        @php
                        $no = 1
                        @endphp
                        @foreach ($produk as $p)
                          <tr>
                              <th scope="row">{{ $no++ }}</th>
                              <td>{{ $p->kode }}</td>
                              <td>{{ $p->nama }}</td>
                              <td>{{ $p->harga }}</td>
                              <td>{{ $p->star }}</td>
                              <td>{{ $p->review }}</td>
                              <td>{{ $p->foto }}</td>
                              <td>
                                <a href="{{url('admin/produk/show/'.$p->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{url('admin/produk/edit/'.$p->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="{{url('admin/produk/pdfshow/'.$p->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-file-pdf"></i></a>
                                <a href="{{url('admin/produk/delete/'.$p->id)}}" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          Apakah anda yakin akan menghapus data {{$p->nama}} ?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <a href="{{url('admin/produk/delete/'.$p->id)}}" type="button" class="btn btn-danger">Delete</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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

@endsection