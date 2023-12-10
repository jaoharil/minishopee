@extends('admin.layout.appadmin')
@section('content')

@foreach ($produk as $pr)
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
      <h6 class="mb-4">Edit data Produk</h6>
      <form method="POST" action="{{url('admin/produk/update/'.$pr->id)}}" enctype="multipart/form-data">
        @csrf
          <div class="mb-3">
              <label for="kode" class="form-label ">Kode</label>
              <input type="text" name="kode" class="form-control" id="kode"
                   value="{{$pr->kode}}">
                 
          </div>
          <div class="mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" value="{{$pr->nama}}">
             
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control " id="harga" value="{{$pr->harga}}">
           
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">star</label>
          <input type="text" name="star" class="form-control " id="nama" value="{{$pr->star}}">
          
      
      </div>
      <div class="mb-3">
        <label for="review" class="form-label">Review</label>
        <input type="text" name="review" class="form-control" id="nama" value="{{$pr->review}}">
       
    </div>
    <div class="mb-3">
      <label for="formFileSm" class="form-label">Foto</label>
      <input class="form-control form-control-sm bg-dark" name="foto" id="formFileSm" type="file">
      @if(!empty($pr->foto))
    <img src="{{url('admin/img')}}/{{$pr->foto}}" alt="">
  
    @endif
  </div>
  <div class="mb-3">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <select class="form-select form-select-sm mb-3 @error('jenis_produk_id') is-invalid @enderror" aria-label=".form-select-sm example" name="jenis_produk_id">
      @foreach ($jenis_produk as $p)
        @php $sel = ($p->id == $pr->jenis_produk_id) ? 'selected' : ''; @endphp
        <option value="{{$p->id}}" {{$sel}}>{{$p->nama}}</option>
        @endforeach
  </select>
  </div>
         
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endforeach
@endsection