<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('style/css/style.css')}}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>SILANATO</title>
</head>

<body>

    <div class="container-fluid h-100">
        <div class="row h-100">
            <aside class="col-12 col-md-2 p-0 bg-dark">
                <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start">
                    <div class="collapse navbar-collapse">
                        <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                            <li class="nav-item">
                                <a class="nav-link pl-0" href="#">Link</a>
                            </li>
                            ..
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col">
                ..
            </main>
        </div>
    </div>

    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img id="logo" src="{{ asset('assets/img/logo-menu/kemenkumham.png')}}" alt="logo">
                    <img id="logo" src="{{ asset('assets/img/logo-menu/SILANATO 1.png')}}" alt="logo">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 id="title-header">SISTEM INFORMASI DAN LAYANAN <br>LAPAS NARKOTIKA IIB PURWOKERTO </h6>
                </div>
            </div>
        </div>
    </div>


    <div class="background">
        <img id="background" src="{{ asset('assets/img/logo-menu/background123.jpg')}}" alt="background">
        <div class="slider">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('assets/img/logo-menu/gambar4.png')}}"
                                        alt="First slide" id="slider1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/logo-menu/gambar5.png')}}"
                                        alt="First slide" id="slider1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/logo-menu/gambar3.png')}}"
                                        alt="First slide" id="slider1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/logo-menu/gambar1.png')}}"
                                        alt="First slide" id="slider1">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('assets/img/logo-menu/gambar2.png')}}"
                                        alt="First slide" id="slider1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content justify-content-center">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div class="row">
                            <div class="box">
                                <a href="main.php">
                                    <img src="{{ asset('assets/img/logo-menu/kunjungan.png')}}" alt="user">

                                </a>
                                <p class="text-center">Kunjungan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="box">
                                <a href="beranda-copy-3.php">
                                    <img src="{{ asset('assets/img/logo-menu/informasi.png')}}" alt="search">
                                </a>
                                <p class="text-center">Informasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="box">
                                <a href="laporan1.php">
                                    <img src="{{ asset('assets/img/logo-menu/sosmed.png')}}" alt="doc">
                                </a>
                                <p class="text-center">Sosial Media</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="box" id="row2">
                                <a href="https://goo.gl/maps/CG6pAjCNQuUHjBec8">
                                    <img src="{{ asset('assets/img/logo-menu/lokasi.png')}}" alt="phone">
                                </a>
                                <p class="text-center">Lokasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="box" id="row2">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('assets/img/logo-menu/panduan.png')}}" alt="galeri">
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <p class="text-center">Panduan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="box" id="row2">
                                <a href="https://wbs.kemenkumham.go.id/index.php?r=site/main">
                                    <img src="{{ asset('assets/img/logo-menu/wbs.png')}}" alt="clock">
                                </a>
                                <p class="text-center">WBS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
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
