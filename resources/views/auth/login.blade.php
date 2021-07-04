@extends('first.masters')

<!-- bagian title halaman -->
@section('title', 'ShareDo-Login')

<!-- bagian style-head halaman-->
@section('style-head')
    <style>
        @import url('css/style.css');
        .img-fluid{
            height: 200px;
            width: 200px;
            background-color: transparent;
        }
    </style>
@endsection



<!-- bagian content/isi halaman -->
@section('first-content')

<div class="top1">

    <!-- navigasi -->
    <nav class="navbar navbar-dark bg-transparent">
        <div class="container d-flex justify-content-beetwen p-2">
          <div>
            <a class="navbar-brand fw-bold" href="/">
                {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
                {{config('app.name', 'GeaShare')}}
              </a>
          </div>
        </div>
    </nav>


    <div class="container-lg d-flex justify-content-center">
        <div class="card mb-3 bg-putih mt-5 p-3" style="min-width: 400px;">
            <div class="row g-0">
              <div class="col-md-12 font-putih">
                <div class="card-body">
                  <h1 class="fw-bold d-flex justify-content-center">{{ __('Login') }}</h1>
                  <br>
                  <form method="post" action="{{ route('login') }}">

                    @csrf

                    <!-- form username -->
                    <div class="mb-3 d-flex justify-content-start">
                        <div class="me-2">
                            <i class="bi bi-person me-3"></i>
                        </div>
                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <!-- form password -->
                    <div class="mb-3 d-flex justify-content-start">
                        <div class="me-2">
                            <i class="bi bi-key me-3"></i>
                        </div>
                        <div>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="ms-5">
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                          </div>

                            @if (Route::has('password.request'))
                                <a class="link-custom font-abu" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                          <br>

                          <button type="submit" class="btn btn-primary mt-2">{{ __('Login') }}</button>
                          
                          <!-- untuk pindah login -->
                          <div class="mb-3 d-flex justify-content-start">
                              <div class="py-2 font-abu">
                                  <h6>Have Account? Register<a class="link-b" href="{{ route('register')}}"> here!</a></h6>
                              </div>
                          </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>

@endsection
