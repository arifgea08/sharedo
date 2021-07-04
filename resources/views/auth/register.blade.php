@extends('first.masters')

@section('first-content')
    <div class="top1">

        <!-- navigasi -->
        <nav class="navbar navbar-dark bg-transparent">
            <div class="container d-flex justify-content-beetwen p-2">
                <div>
                    <a class="navbar-brand fw-bold" href="/">
                        {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
                        {{ config('app.name', 'ShareDo') }}
                    </a>
                </div>
            </div>
        </nav>

        <div class="container-lg d-flex justify-content-center">
            <div class="card mb-3 bg-putih mt-5 p-3" style="min-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-12 font-putih">
                        <div class="card-body">
                            <h1 class="fw-bold d-flex justify-content-center">Register</h1>
                            <br>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- form username -->
                                <div class="mb-3 d-flex justify-content-start">
                                    <div class="me-2">
                                        <i class="bi bi-person me-3"></i>
                                    </div>
                                    <div>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <!-- form email -->
                                <div class="mb-3 d-flex justify-content-start">
                                    <div class="me-2">
                                        <i class="bi bi-envelope me-3"></i>
                                    </div>
                                    <div>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
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
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- form confirm password -->
                                <div class="mb-3 d-flex justify-content-start">
                                    <div class="me-2">
                                        <i class="bi bi-key me-3"></i>
                                    </div>
                                    <div>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>

                                <br>
                                <div class="ms-5">
                                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>

                                    <!-- untuk pindah login -->
                                    <div class="mb-3 d-flex justify-content-start">
                                        <div class="py-2 font-abu">
                                            <h6>Have Account? Login<a class="link-b" href=" {{ route('login') }}">
                                                    here!</a></h6>
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
