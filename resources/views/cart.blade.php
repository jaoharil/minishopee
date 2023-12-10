@extends('admin.front.app')


@section('front')
<script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>

<div class="hero-wrap hero-bread" style="background-image: url('{{ asset('front/images/bg_6.jpg') }}');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home</a></span> <span>Cart</span></p>
        <h1 class="mb-0 bread">My Wishlist</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <table class="table" id="cart">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>&nbsp;</th>
                
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @php $total = 0 @endphp
              @if(session('cart'))
                  @foreach(session('cart') as $id => $details)
                      @php $total += $details['harga'] * $details['quantity'] @endphp
                      <tr data-id="{{ $id }}" class="text-center">
                <td class="product-remove ">
                  <button class="remove-from-chart">🗑️</button>
                </td>

                <td class="image-prod">
                  @empty($details['foto'])
                  <img src="{{ url('admin/img/nophoto.jpg') }}" width="100" height="100" class="img-responsive"/>
@else 
              <img src="{{ url('admin/img') }}/{{$details['foto']}}" width="100" height="100" class="img-responsive"/>
              @endempty</td>

              <td data-th="Price">${{ $details['harga'] }}</td>

                {{-- <td class="price">${{ $details['harga'] }}</td> --}}
                
                <td class="quantity">
                  <div class="input-group mb-3">
                    <input type="text" name="quantity" value="{{ $details['quantity'] }}" class="quantity form-control input-number update-cart" value="1" min="1" max="100" />
                  </div>
                </td>

                <td data-th="Subtotal" class="text-center">${{ $details['harga'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart">hapus</button>
                    </td>
                {{-- <td data-th="Subtotal" class="text-center"></td> --}}
              </tr>
              <!-- END TR-->

              <!-- END TR-->
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row justify-content-start">
      <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
          <h3>Cart Totals</h3>
          <p class="d-flex">
            <span>Subtotal</span>
            <span>${{ $details['harga'] * $details['quantity'] }}</span>
          </p>
          <p class="d-flex">
            <span>Delivery</span>
            <span>$0.00</span>
          </p>
          <p class="d-flex">
            <span>Discount</span>
            <span>$3.00</span>
          </p>
          <hr>
          <p class="d-flex total-price">
            <span>Total</span>
            <span>${{ $details['harga'] * $details['quantity'] }}</span>
          </p>
        </div>
        <p class="text-center"><button class="btn btn-primary py-3 px-4" id="pay-button">Checkout</button>
        </p>
      </div>
    </div>
  </div>
  
  @endforeach
  @endif
</section>
{{-- <section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ftco-animate">
        <div class="cart-list">
          <table class="table" id="cart">
            <thead class="thead-primary">
              <tr class="text-center">
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @php $total = 0 @endphp
              @if(session('cart'))
                  @foreach(session('cart') as $id => $details)
                      @php $total += $details['harga'] * $details['quantity'] @endphp
                      <tr data-id="{{ $id }}">
                          <td data-th="Product">
                              <div class="row">
                                  <div class="col-sm-3 hidden-xs">
                                          @empty($details['foto'])
                                          <img src="{{ url('admin/img/nophoto.jpg') }}" width="100" height="100" class="img-responsive"/>
                        @else 
                                      <img src="{{ url('admin/img') }}/{{$details['foto']}}" width="100" height="100" class="img-responsive"/>
                                      @endempty
                                  </div>
                                  <div class="col-sm-9">
                                      <h4 class="nomargin">{{ $details['nama'] }}</h4>
                                  </div>
                              </div>
                          </td>
                          <td data-th="Price">${{ $details['harga'] }}</td>
                          <td data-th="Quantity">
                              <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                          </td>
                          <td data-th="Subtotal" class="text-center">${{ $details['harga'] * $details['quantity'] }}</td>
                          <td class="actions" data-th="">
                              <button class="btn btn-danger btn-sm remove-from-cart">🗑️</button>
                          </td>
                      </tr>
                  @endforeach
              @endif
          </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="row justify-content-start">
      <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
          <h3>Cart Totals</h3>
          <p class="d-flex">
            <span>Subtotal</span>
            <span>${{ $details['harga'] }}</span>
          </p>
          <p class="d-flex">
            <span>Delivery</span>
            <span>$0.00</span>
          </p>
          <p class="d-flex">
            <span>Discount</span>
            <span>$3.00</span>
          </p>
          <hr>
          <p class="d-flex total-price">
            <span>Total</span>
            <span>${{ $total }}</span>
          </p>
        </div>
        <p class="text-center"><button class="btn btn-primary py-3 px-4" id="pay-button">Checkout</button>
        </p>
      </div>
    </div>
  </div>
</section> --}}
{{-- MIDTRANS --}}
<script type="text/javascript">
  // For example trigger on button clicked, or any time you need
  var payButton = document.getElementById('pay-button');
  payButton.addEventListener('click', function () {
    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
    window.snap.pay('{{ $snapToken }}', {
      onSuccess: function(result){
        /* You may add your own implementation here */
        alert("payment success!"); console.log(result);
      },
      onPending: function(result){
        /* You may add your own implementation here */
        alert("wating your payment!"); console.log(result);
      },
      onError: function(result){
        /* You may add your own implementation here */
        alert("payment failed!"); console.log(result);
      },
      onClose: function(){
        /* You may add your own implementation here */
        alert('you closed the popup without finishing the payment');
      }
    })
  });
</script>
{{-- ENDMIDTRSANS --}}
@endsection

@section('scripts')
<script type="text/javascript">
  $(document).ready(function () {
      // Update cart on quantity change
      $(".update-cart").on("change", function (e) {
          e.preventDefault();

          var ele = $(this);

          $.ajax({
              url: '{{ route('update.cart') }}',
              method: "patch",
              data: {
                  _token: '{{ csrf_token() }}',
                  id: ele.closest("tr").data("id"),
                  quantity: ele.closest("tr").find(".quantity").val()
              },
              success: function (response) {
                  window.location.reload();
              },
              error: function (xhr, status, error) {
                  console.error(error);
              }
          });
      });

      // Remove item from cart
      $(".remove-from-cart").on("click", function (e) {
          e.preventDefault();

          var ele = $(this);

          if (confirm("Are you sure want to remove?")) {
              $.ajax({
                  url: '{{ route('remove.from.cart') }}',
                  method: "DELETE",
                  data: {
                      _token: '{{ csrf_token() }}',
                      id: ele.closest("tr").data("id")
                  },
                  success: function (response) {
                      window.location.reload();
                  },
                  error: function (xhr, status, error) {
                      console.error(error);
                  }
              });
          }
      });
  });
  
</script>

@endsection