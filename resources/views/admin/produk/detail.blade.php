@extends('admin.layout.appadmin')
@section('content')



@foreach ($produk as $p)
<div class="col-sm-12 col-xl-6 m-auto pt-5">
  <input type="hidden" value="{{$p->id}}">
  <div class="bg-secondary rounded h-100 p-4">
      <h6 class="mb-4"> {{$p->nama}}</h6>
      <div class="owl-carousel testimonial-carousel">
          <div class="testimonial-item text-center">
            @empty($p->foto)
              <img class="img-fluid rounded-circle mx-auto mb-4" src="{{url('admin/img/nophoto.jpeg')}}"" style="width: 100px; height: 100px;">
              @else
              <img class="img-fluid rounded-circle mx-auto mb-4" src="{{url('admin/img')}}/{{$p->foto}}" style="width: 100px; height: 100px;">
              @endempty
              <h5 class="mb-1">Kode : {{$p->kode}}</h5>
              <h5 class="mb-1">nama : {{$p->nama}}</h5>
              <p>Rp. {{$p->harga_jual}}</p>
              <p class="mb-0">{{$p->star}}</p>
              <button class="btn btn-outline-warning m-2 flex-shrink-0" type="button">
                <i class="bi-cart-fill me-1"></i>
                Add to cart
            </button>
          </div>
         
      </div>
  </div>
</div>
@endforeach
@endsection