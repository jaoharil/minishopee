@extends('layouts.app')

@section('content')
<div class="container-fluid position-relative d-flex p-0">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div>
  <!-- Spinner End -->


  <!-- Sign Up Start -->
  <div class="container-fluid">
      <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
          <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
              <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="card-header">{{ __('Register') }}</div>
                  <form class="user" method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="form-floating mb-3">
                      {{-- <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                      <label for="floatingText">Username</label> --}}
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                      name="name" value="{{ old('name') }}" required autocomplete="name" autofocus 
                      placeholder="Full Name" >
                      <label for="floatingText">{{ __('Name') }}</label>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                  </div>
                  <div class="form-floating mb-3">
                      {{-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label> --}}
                      <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" 
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email Address">
                                        <label for="floatingInput">{{ __('Email Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>
                  <div class="form-floating mb-4">
                      {{-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label> --}}
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            <label for="floatingPassword">{{ __('Password') }}</label>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                  </div>
                  <div class="form-floating mb-4">
                    {{-- <input id="password-confirm" type="password" class="form-control form-control-user" 
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Repeat Password"> --}}
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <label for="floatingPassword"> {{ __('Confirm Password') }}</label>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                      
                      <a href="">Forgot Password</a>
                  </div>
                  <button type="submit" class="btn btn-primary py-3 w-100 mb-4">  {{ __('Register') }}</button>
                  <p class="text-center mb-0">Already have an Account? <a href="{{ route('login') }}">Sign In</a></p>
              </div>
          </div>
      </div>
  </div>
  <!-- Sign Up End -->
</div>

@endsection