@extends('admin.layout.appadmin')
@section('content')


@if($errors->any())
<div class="alert alert-danger">
  <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
  </ul>
</div>
@endif
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4">Tambah data Produk</h6>
      <form method="POST" action="{{url('admin/produk/store')}}" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
              <label for="kode" class="form-label ">Kode</label>
              <input type="text" name="kode" class="form-control @error('kode') is-invalid @enderror" id="kode"
                  aria-describedby="emailHelp">
                  @error('kode')
                  <div class="invalid-feedback">
                  {{$message}}
                  </div>
                  @enderror
          </div>
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
              @error('nama')
      <div class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" id="harga">
            @error('harga')
      <div class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">star</label>
          <input type="text" name="star" class="form-control @error('star') is-invalid @enderror" id="nama">
          @error('star')
      <div class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="review" class="form-label">Review</label>
        <input type="text" name="review" class="form-control @error('review') is-invalid @enderror" id="nama">
        @error('review')
      <div class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="formFileSm" class="form-label">Foto</label>
      <input class="form-control form-control-sm bg-dark @error('foto') is-invalid @enderror" name="foto" id="formFileSm" type="file">
      @error('foto')
      <div class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <select class="form-select form-select-sm mb-3 @error('jenis_produk_id') is-invalid @enderror" aria-label=".form-select-sm example" name="jenis_produk_id">
      @foreach ($jenis_produk as $p)
        <option value="{{$p->id}}">{{$p->nama}}</option>
        @endforeach
      </select>
      @error('jenis_produk_id')
      <div class="invalid-feedback">
      {{$message}}
      </div>
      @enderror
  </select>
  </div>
         
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>
@endsection