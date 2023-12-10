@extends('admin.layout.appadmin')
@section('content')

@foreach ($jenis_produk as $jenis)
<div class="bg-secondary rounded h-100 p-4">
  <h6 class="mb-4">Edit data Jenis Produk</h6>
  <form method="POST" action="{{url('admin/jenis_produk/update/'.$jenis->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" value="{{$jenis->nama}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endforeach
@endsection