@extends('layouts.login_layouts')

@section('title', 'Register | Agridation 2021')

@section('content')
<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5 ">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="px-5 pt-3 pb-5">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">   
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img src="{{ asset('upage/img/logo-register.png') }}" class="img-fluid mb-2 mw-75 sm-3 md-1 lg-1" alt="">
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                </div>
                            </div>
                            <h1 class="h3 text-gray-900 mb-2"><b>Buat Akun</b></h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <h6 style="color: #66BB6A"><b>Nama Lengkap</b></h6>
                                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Masukkan nama lengkap" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 style="color: #66BB6A"><b>Alamat Email</b></h6>
                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Masukkan alamat email" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h6 style="color: #66BB6A"><b>Alamat</b></h6>
                                <input id="address" type="text" class="form-control form-control-user @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required placeholder="Masukkan alamat domisili" autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6 style="color: #66BB6A"><b>No. WhatsApp</b></h6>
                                    <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" required placeholder="Masukkan nomor WhatsApp" autocomplete="phone">

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <h6 style="color: #66BB6A"><b>Kartu Identitas (KTP/KTM)</b></h6>
                                    <input id="identity_card" type="file" class="py-1 form-control form-control-user @error('identity_card') @enderror" name="identity_card" required placeholder="Kartu Identitas">

                                    @error('identity_card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6 style="color: #66BB6A"><b>Asal Instansi</b></h6>
                                    <input id="agency" type="text" class="form-control form-control-user @error('agency') is-invalid @enderror" name="agency" required placeholder="Masukkan asal instansi" autocomplete="agency">

                                    @error('agency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <h6 style="color: #66BB6A"><b>Jenis Kelamin</b></h6>
                                        <div class="row">
                                            <div class="container">
                                                <div class="col-3">
                                                    <input id="gender" type="radio" class="form-check-input @error('gender') @enderror" name="gender" value="pria">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                    Pria
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <input id="gender" type="radio" class="form-check-input @error('gender') @enderror" name="gender" value="wanita">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                    Wanita
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                    
                                    
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    
                                
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6 style="color: #66BB6A"><b>Password</b></h6>
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required placeholder="Masukkan password" autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-sm-6">
                                    <h6 style="color: #66BB6A"><b>Konfirmasi Password</b></h6>
                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required placeholder="Konfirmasi password" autocomplete="new-password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                <b>Daftar</b>
                            </button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <a class="small" href="{{route('password.request')}}">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                        @if (Route::has('login'))
                            <a href="{{ route('login') }}" class="small success">Sudah memiliki akun? <b>Login</b></a>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
