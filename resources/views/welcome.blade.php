{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html> --}}







@extends('layouts.app')

<!-- bagian title halaman -->
@section('title', 'GeaShare-Welcome')

<!-- bagian style-head halaman-->
@section('style-head')
    <style>
        @import url('css/style.css');
    </style>
@endsection



<!-- bagian content/isi halaman -->

@section('content')
<div class="mx-o">
    <div class="top top-transition">
        <nav class="navbar navbar-dark bg-transparent">
            <div class="container d-flex justify-content-beetwen p-2 p-sm-3">
              <div>
                <a class="navbar-brand fw-bold" href="/">
                    {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top"> --}}
                    {{config('app.name', 'GeaShare')}}
                  </a>
              </div>
              <div class="navbar-nav flex-row">

                

                {{-- <button type="button" class="btn btn-transparent position-relative">
                    <i class="bi bi-bell"><span class="position-absolute top-10 start-50 bg-danger badge-custom border-light">
                        <p class="font-kecil font-putih">9</p>
                      </span></i> 
                </button>

                <button type="button" class="btn btn-primary position-relative">
                    <i class="bi bi-bell"></i><span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">1</span></span>
                </button> --}}

                <button type="button" class="btn"><a class="nav-a p-0" href="/login">Login</a></button>
                <button type="button" class="btn btn-ungu ms-3"><a class="nav-a p-0" href="/register">Register</a></button>
              </div>
        
        
            </div>
        </nav>
    
        <div class="container mt-5">
            <div class="col-lg-4 col-md-12 bg-putih align-self-center p-3 shadow">
                <h1 class="font-putih text-capitalize fw-bold">Learn and make relations</h1>
    
                <br>
    
                <h5 class="font-putih lh-lg">Start sharing the best stories, experiences and impressions in your life. 
                    Free yourself and establish relationships with others out there. It would be great to share with them.</h5>
    
                <br>
                <button type="button" class="btn btn-ungu br-md"><a class="nav-a p-0" href="/login">Get Started Now!</a></button>
    
            </div>
    
            <div class="col-lg-8"></div>
        </div>
    </div>
    
    
    <div class="bg-abuabu py-5">
        <div class="container d-grid gap-5">
            <div class="card shadow bg-body rounded anima1">
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="images/handholding-phone.jpg" class="img-fluid rounded-start anima1" alt="foto">
                  </div>
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
            </div>

            <div class="card shadow p-3 bg-body rounded anima1">
                <div class="row g-0">
                  <div class="col-md-7">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <a href='https://www.freepik.com/vectors/people'><img src="images/people-talking.jpg" class="img-fluid rounded-start anima1" alt="foto"></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    
    <div class="top1-custom font-putih pt-5">
        <div class="container pb-3 mb-3">
            <div class="row align-items-start">
                <div class="col d-flex flex-column gap-2">
                    <h4>Menu</h4>
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                </div>
                
                <div class="col d-flex flex-column gap-2">
                    <h4>More</h4>
                    <a href="#">Privacy</a>
                    <a href="#">Security</a>
                    <a href="#">Contact Us</a>
                    <a href="#">About</a>
                </div>

                <div class="col d-flex flex-column">
                    <h4 class="pb-2">Follow Us</h4>
                    <div class="d-flex flex-row gap-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="bg-kuning">
        <div class="d-flex justify-content-center bg-putih1">
            <h6 class="font-orange p-3">Copyright © {{config('app.name', 'GesaShare')}} 2021</h6>
        </div>
    </div>
</div>

@endsection