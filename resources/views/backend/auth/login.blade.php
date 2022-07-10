<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Aplikasi WHstock</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/googlefonts.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>WH</b>stock</a>
                <p>== Inventory Barang ==</p>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Login Untuk Masuk ke Aplikasi</p>
                {{-- Pesan Sukses Login atau Gagal Login --}} 
                @if (session()->has('success')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                    {{ session('success') }} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button> 
                </div> 
                @endif
                @if (session()->has('loginError')) 
                <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                    {{ session('loginError') }} 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button> 
                </div> 
                @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        autofocus required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email') 
                        <div class="invalid-feedback"> 
                            {{ $message }} 
                        </div> 
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control"
                        placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="forgot-password.html">Lupa Password ?</a>
                </p>
                <p class="mb-0">
                    <a href="{{url('/signup')}}" class="text-center">Register Pengguna Baru</a>
                </p>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
</body>
</html>