<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
    <link rel="stylesheet" href="{{ asset('upage/css/custom.css') }}">
</head>

<body>
    <header id="home" class="hero-area">
        <div class="overlay">
            <span></span>
            <span></span>
        </div>
        <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container px-lg-0 px-3">
            <a href="{{ route('home') }}" class="navbar-brand"><img width="220"
                    src="{{ asset('upage/img/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#webinar">Webinar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#workshop">Workshop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#lomba">Lomba</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="#artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#kilasbalik">Kilas Balik</a>
                    </li>
                    <li class="nav-item">
                        @if(Route::has('login'))
                            <a class="btn btn-singin" href="{{ route('login') }}">Login</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>


    <section id="artikel" class="my-4 pb-4" style="margin-top:10em !important">
       
        <div class="container" style="border-bottom:3px solid #66BB6A;position:relative">
        <!-- <a href="{{ route('artikel') }}" class="shadow-sm" style="position:absolute;bottom:-2.2vh;right:0;border:2px solid #66BB6A;border-radius:50px;padding:5px 15px;background:white;color:#66BB6A;font-weight:550">Lihat Semua</a> -->
        <div class="features-text section-header text-center">
            <div class="container" style="border-bottom:3px solid #66BB6A;position:relative; " >
            </div>
            <div style="margin-top: 2em">
              
                <h2 class="section-title">Artikel</h2>
            </div>
        </div>
        @php
                $artikels = [
                    [
                        'id' => 1,
                        'date' => '31 Juli 2021',
                        'img' => 'postagri1.jpg',
                        'title' => 'Jenis-jenis Microgreen',
                        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nam sunt libero soluta laboriosam, doloribus dolor placeat debitis velit officiis quo excepturi id eaque aut veniam nihil necessitatibus sed perferendis!'
                    ],
                    [
                        'id' => 2,
                        'date' => '1 Agustus 2021',
                        'img' => 'postagri2.jpg',
                        'title' => 'Manfaat Microgreen bagi Kesehatan',
                        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nam sunt libero soluta laboriosam, doloribus dolor placeat debitis velit officiis quo excepturi id eaque aut veniam nihil necessitatibus sed perferendis!'
                    ],
                    [
                        'id' => 3,
                        'date' => '2 Agustus 2021',
                        'img' => 'postagri3.jpg',
                        'title' => 'Apa Saja Kandungan Microgreen?',
                        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nam sunt libero soluta laboriosam, doloribus dolor placeat debitis velit officiis quo excepturi id eaque aut veniam nihil necessitatibus sed perferendis!'
                    ],
                ];
            @endphp
            <div class="row justify-content-center mb-4">
            @foreach($artikels as $artikel)
                <div class="col-lg-3 col-12 mb-3">
                    <div class="card border-0 shadow" style="border-radius:0 0 15px 15px">
                    <img src="{{ asset('img/artikel/'.$artikel['img']) }}" alt="" class="card-img-top" style="height:250px;object-fit:cover">
                        <div class="card-body">
                            <p style="font-size:15px;color:#66BB6A"><img width="12" src="{{ asset('upage/img/img-calendar.png') }}" alt="" class="mr-1"> {{ $artikel['date'] }}</p>
                            <a href="" style="color:#FAAC1E;font-size:23px;font-weight:600">{{ $artikel['title'] }}</a>
                            <div class="mt-5" style="text-align:right">
                                <a href="#" data-toggle="modal" data-target="#artikel{{ $artikel['id'] }}" class="" style="background:#66BB6A;color:white;padding:5px 10px;border-radius:15px 0 15px 0">Selengkapnya....</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade mt-5" id="artikel{{ $artikel['id'] }}" tabindex="10" aria-labelledby="artikel{{ $artikel['id'] }}" aria-hidden="true">
                <div class="modal-dialog modal-lg" style="max-width:1000px">
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5" style="background:url('{{ asset('img/artikel/'.$artikel['img']) }}')center no-repeat;background-size:contain;min-height:500px;width:100%">
                            </div>
                            <div class="col-lg-7 p-4">
                            <p style="font-size:15px;color:#FAAC1E"><img width="12" src="{{ asset('upage/img/img-calendar.png') }}" alt="" class="mr-1"> {{ $artikel['date'] }}</p>
                                <p style="font-size:23px;color:#66BB6A;font-weight:600" class="mb-3">{{ $artikel['title'] }}</p>
                            <div style="height:500px;overflow-y:scroll">
                                <p>
                                    {{ $artikel['isi'] }}
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>


    @include('layouts.footer')

    <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div>
    @include('layouts.scripts')
</body>

</html>