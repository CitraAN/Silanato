<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>SILANATO</title>
    <link rel="stylesheet" href="{{ asset('sidebar/css/style.css')}}" />
    <style>
         body {
        background-image: url("images/bg/gg1.png");
        height: 100%;
    },
        .card {
            background-color: rgba(245, 245, 245, 0);
            border: none;
        }

        .card-title {
            font-size: 15px;
            font-weight: bold;
            color: #000000;
        },
    </style>
</head>

<body class="bg-white"> 

    <nav class="navbar navbar-expand-lg navbar-light bg-primary justify-content-sm-start fixed-top border-bottom border-dark">
        <div class="container-fluid">
            {{-- <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="#">FrontendFunn</a> --}}
            <button class="navbar-toggler align-self-start" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-light p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu"
                id="navbarSupportedContent">
                <ul class="navbar-nav align-self-stretch">
                    <li class="nav-item mb-3">
                        <a class="h6 text-dark" href="{{ route('home') }}">
                        <img src="{{ asset('logo/home2-removebg-preview.png')}}" alt="" height="24" class="d-inline-block align-text-top">
                            Dashboard</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="h6 text-dark" href="{{ route('detail-profil',Auth::user()->id) }}">
                        <img src="{{ asset('logo/profil.png')}}" alt="" height="24" class="d-inline-block align-text-top">
                            Detail Profil</a>
                    </li>
                    <li class="nav-item mb-4">
                        <a class="h6 text-dark" href="{{ url('password/reset') }}">
                            <img src="{{ asset('logo/ubah pass.png')}}" alt="" height="24" class="d-inline-block align-text-top">
                            Lupa Password</a>
                    </li>
                    <li class="nav-item mb-5">
                        <a class="h6 text-dark" href="{{ url('tentang') }}">
                            <img src="{{ asset('logo/logo_informasi-removebg-preview.png')}}" alt="" height="24" class="d-inline-block align-text-top">
                            Tentang</a>
                    </li>
                    <li class="nav-item mb-5">
                        <a class="h6 text-white btn btn-danger pr-5" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                              </svg>&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="overlay"></div>

    <div class="container" style="margin-top: 5rem">
        <div class="row mb-2 mt-3">
            <div class="col d-flex justify-content-center">
                <img class="rounded mr-2" src="{{ asset('assets/img/logo-menu/kemenkumham.png')}}"
                    style="height: 70px;">
                <img class="rounded ml-2" src="{{ asset('assets/img/logo-menu/SILANATO 1.png')}}" style="height: 70px;">
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <h6 class="text-center text-dark">SISTEM INFORMASI DAN LAYANAN <br>LAPAS NARKOTIKA IIB PURWOKERTO </h6>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 rounded" style="height: 150px" src="{{ asset('assets/img/logo-menu/gambar4.png')}}"
                        alt="First slide" id="slider1">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded" style="height: 150px" src="{{ asset('assets/img/logo-menu/gambar5.png')}}"
                        alt="First slide" id="slider2">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded" style="height: 150px" src="{{ asset('assets/img/logo-menu/gambar3.png')}}"
                        alt="First slide" id="slider3">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 rounded" style="height: 150px" src="{{ asset('assets/img/logo-menu/gambar1.png')}}"
                        alt="First slide" id="slider4">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('assets/img/logo-menu/gambar2.png')}}" alt="First slide"
                        id="slider5">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="bg-white mt-3 rounded" style="padding: 1rem;">


        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 5rem">
                    <a class="card-title h6" href="{{ route('kunjungan') }}"><img src="{{ asset('assets/img/logo-menu/kunjungan.png')}}" class="card-img-top bg-light rounded" alt="">
                    <div class="d-flex justify-content-center mt-1">
                        kunjungan</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 5rem">
                    <a class="card-title h6" href="{{ url('informasi') }}"><img src="{{ asset('assets/img/logo-menu/informasi.png')}}" class="card-img-top bg-light rounded"
                        style="width: 78px; height: 55px;" alt="">
                    <div class="d-flex justify-content-center mt-1">
                        Informasi</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 5rem">
                    <a class="card-title h6 text-center" href="{{ url('sosmed') }}"><img src="{{ asset('assets/img/logo-menu/sosmed.png')}}" class="card-img-top bg-light rounded"
                        style="width: 78px; height: 55px;" alt="">
                    <div class="d-flex justify-content-center mt-1">
                        Media Sosial</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 5rem">
                    <a class="card-title h6" href="{{ url('panduan') }}"><img src="{{ asset('assets/img/logo-menu/panduan.png')}}" class="card-img-top bg-light rounded"
                        style="width: 78px; height: 55px;" alt="">
                    <div class="d-flex justify-content-center mt-1 ">
                        Panduan</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 5rem">
                    <a class="card-title h6" href="{{ url('lokasi') }}"><img src="{{ asset('assets/img/logo-menu/lokasi.png')}}" class="card-img-top bg-light rounded"
                        style="width: 78px; height: 55px;" alt="">
                    <div class="d-flex justify-content-center mt-1">
                        Lokasi</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 5rem">
                    <a class="card-title h6" href="https://wbs.kemenkumham.go.id"> <img src="{{ asset('assets/img/logo-menu/wbs.png')}}" class="card-img-top bg-light rounded"
                        style="width: 78px; height: 55px;" alt="">
                    <div class="d-flex justify-content-center mt-1">
                        WBS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha256-OUFW7hFO0/r5aEGTQOz9F/aXQOt+TwqI1Z4fbVvww04=" crossorigin="anonymous"></script>

    <script src="{{ asset('sidebar/js/script.js')}}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
