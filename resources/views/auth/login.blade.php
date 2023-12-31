@extends('layouts.app')

@section('content')

<div class="container-fluid position-relative d-flex p-0">
  <!-- Spinner Start -->
  {{-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div> --}}
  <!-- Spinner End -->


  <!-- Sign In Start -->
  <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
              <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                  <div class="d-flex align-items-center justify-content-between mb-3">
                      <a href="index.html" class="">
                          <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>MiniShop</h3>
                      </a>
                      <h3>Sign In</h3>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-floating mb-3">
                      {{-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label> --}}
                      <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-floating mb-4">
                      {{-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label> --}}
                      <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <a href="">Forgot Password</a>
                  </div>
                  {{-- <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button> --}}
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                        <hr>
                                        <div class="text-center">
                                          <a class="small" href="{{'/'}}">Kembali ke halaman depan</a>
                                      </div>
                  <p class="text-center mb-0">Don't have an Account? <a href="{{ route('register') }}">Sign Up</a></p>
              </div>
          </div>
      </div>
  </div>
  <!-- Sign In End -->
</div>

@endsection