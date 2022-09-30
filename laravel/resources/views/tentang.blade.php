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
        .card {
            background-color: rgba(245, 245, 245, 0);
            border: none;
        }

        .card-title {
            font-size: 15px;
            font-weight: bold;
            color: #000000;
        }

        ,
    </style>
</head>

<body class="bg-primary">

    <nav
        class="navbar navbar-expand-lg navbar-light bg-primary justify-content-sm-start fixed-top border-bottom border-dark">
        <div class="container-fluid">
            <button class="navbar-toggler align-self-start" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-light p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu"
                id="navbarSupportedContent">
                <ul class="navbar-nav align-self-stretch">
                    <li class="nav-item">
                        <a class="nav-link h5 text-white btn-primary rounded" href="{{ url('/')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                              </svg>
                            Dashboard</a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="h6 text-dark" href="#">
                            <img src="{{ asset('logo/profil.png')}}" alt="" height="24"
                                class="d-inline-block align-text-top">
                            Detail Profil</a>
                    </li>
                    <li class="nav-item mb-4">
                        <a class="h6 text-dark" href="#">
                            <img src="{{ asset('logo/ubah pass.png')}}" alt="" height="24"
                                class="d-inline-block align-text-top">
                            Lupa Password</a>
                    </li>
                    <li class="nav-item mb-5">
                        <a class="h6 text-dark" href="#">
                            <img src="{{ asset('logo/logo_informasi-removebg-preview.png')}}" alt="" height="24"
                                class="d-inline-block align-text-top">
                            Tentang</a>
                    </li>
                    <li class="nav-item mb-5">
                        <a class="h6 text-white btn btn-danger pr-5" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white"
                                class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
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

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center text-white">Tentang</h3>
                                <hr class="bg-dark">
                                <div class="card">
                                    <div class="card-body bg-white rounded">


                                    <p class="text-justify">
                                        <img src="{{ asset('logo/SILANATO 1.png')}}" alt="" height="70px" class="d-inline-block rounded">
                                        SILANATO adalah aplikasi yang dibuat untuk memudahkan
                                        masyarakat dalam
                                        mendapatkan informasi terkait dengan kegiatan-kegiatan yang ada di lingkungan
                                        masyarakat. Aplikasi ini dibuat untuk memudahkan masyarakat dalam mendapatkan
                                        informasi
                                        terkait dengan kegiatan-kegiatan yang ada di lingkungan masyarakat. Aplikasi ini
                                        dibuat
                                        untuk memudahkan masyarakat dalam mendapatkan informasi terkait dengan
                                        kegiatan-kegiatan
                                        yang ada di lingkungan masyarakat. Aplikasi ini dibuat untuk memudahkan
                                        masyarakat dalam
                                        mendapatkan informasi terkait dengan kegiatan-kegiatan yang ada di lingkungan
                                        masyarakat. Aplikasi ini dibuat untuk memudahkan masyarakat dalam mendapatkan
                                        informasi
                                        terkait dengan kegiatan-kegiatan yang ada di lingkungan masyarakat. Aplikasi ini
                                        dibuat
                                        untuk memudahkan masyarakat dalam mendapatkan informasi terkait dengan
                                        kegiatan-kegiatan
                                        yang ada di lingkungan masyarakat. Aplikasi ini dibuat untuk memudahkan
                                        masyarakat dalam
                                        mendapatkan informasi terkait dengan kegiatan-kegiatan yang ada di lingkungan
                                        masyarakat. Aplikasi ini dibuat untuk memudahkan masyarakat dalam mendapatkan
                                        informasi
                                        terkait dengan kegiatan-kegiatan yang ada di lingkungan masyarakat. Aplikasi ini
                                        dibuat
                                        untuk memudahkan masyarakat dalam mendapatkan informasi terkait dengan
                                        kegiatan-kegiatan
                                        yang ada di lingkungan masyarakat. Aplikasi ini dibuat untuk memudahkan
                                        masyarakat dalam
                                        mendapatkan informasi terkait dengan kegiatan-kegiatan yang ada di lingkungan
                                        masyarakat. Aplikasi ini dibuat untuk memudahkan masyarakat dalam mendapatkan
                                        informasi
                                        terkait dengan kegiatan-ke
                                    </p>
                                </div>
                                </div>

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
