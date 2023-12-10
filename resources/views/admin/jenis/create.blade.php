@extends('admin.layout.appadmin')
@section('content')


<div class="bg-secondary rounded h-100 p-4">
  <h6 class="mb-4">Tabmah data Jenis Produk</h6>
  <form method="POST" action="{{url('admin/jenis_produk/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="text" placeholder="Isi jenis produk"/>
     
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @endsection