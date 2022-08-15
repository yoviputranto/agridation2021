@extends('layouts.login_layouts')

@section('title', 'Login | Agridation 2021')
@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="px-5 pt-3 pb-5">
                                <div class="text-center">
                                    <div class="row">
                                        <div class="col-lg-2 col-sm-12">   
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <img src="{{ asset('upage/img/logo-register.png') }}" class="img-fluid mb-2 mw-75 sm-3 md-1 lg-1" alt="">
                                        </div>
                                        <div class="col-lg-2 col-sm-12">
                                        </div>
                                    </div>
                                    <h1 class="h4 text-gray-900 mb-4"><b>Login</b></h1>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }} ">
                                @csrf
                                    <div class="form-group">
                                        <h6 style="color: #66BB6A"><b>Alamat Email</b></h6>
                                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan alamat email yang terdaftar" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <h6 style="color: #66BB6A"><b>Password</b></h6>
                                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Masukkan password yang terdaftar" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        <b>Login</b>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small text-success" href="{{route('password.request')}}">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="small text-success">Belum punya akun? <b>Buat Akun</b></a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
