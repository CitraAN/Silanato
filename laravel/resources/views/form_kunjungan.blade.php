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
        background-image: url("images/bg/bg9.png");
        height: 100%;
    },
    </style>
</head>

<body class="">
    

    <nav class="navbar navbar-expand-lg navbar-light bg-purple justify-content-sm-start fixed-top border-bottom border-dark">
        <div class="container-fluid">
            <a class=" order-1 order-lg-0 ml-lg-0 ml-5 mr-auto h4 text-white" href="#">KUNJUNGAN</a>
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

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5 bg-white">
                    <div class="card-header">
                        <h5 class="card-title text-dark">Profil Pengunjung</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('form-kunjungan-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id">
                            {{-- @dd('cek') --}}
                            <div class="form-group">
                                <label for="nama" class="h6">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="nik" class="h6">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="h6">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat">
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="h6">Nomor Telepon</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Telepon">
                            </div>
                            <div class="form-group">
                                <label for="jk" class="h6">Jenis Kelamin</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hubungan" class="h6">Hubungan dengan WBP</label>
                                <input type="text" class="form-control" id="hubungan" name="hubungan" placeholder="Masukkan Hubungan dengan WBP">
                            </div>
                            <div class="form-group">
                                <label for="nama_wbp" class="h6">Nama WBP (yang akan dikunjungi)</label>
                                <input type="text" class="form-control" id="nama_wbp" name="nama_wbp" placeholder="Masukkan Nama WBP">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_pengunjung" class="h6">Jumlah Pengunjung</label>
                                <select class="form-control" id="jumlah_pengunjung" name="jumlah_pengunjung">
                                    <option></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Jadwal" class="h6">Jadwal Kunjungan</label>
                                <input type="date" class="form-control" id="jadwal_kunjungan" name="jadwal_kunjungan">
                            </div>
                            <div class="form-group">
                                <label for="jam" class="h6">Jam Kunjungan</label>
                                <input type="time" class="form-control" id="jam_kunjungan" name="jam_kunjungan" >
                            </div>
                            
                            <div class="form-group">
                                <label for="file_id" class="h6">NIK / PASPOR / BUKU NIKAH / SIM</label>
                                <input type="file" class="form-control-file" id="file_id" name="file_id">
                            </div>
                            <div class="form-group">
                                <label for="foto" class="h6">UPLOAD FOTO SELFIE</label>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>
                            <center><button type="submit" class="btn btn-success">Daftar Sekarang</button></center>
                        </form>
                    </div>
                    {{-- <div class="card-footer">
                        <center><button type="submit" class="btn btn-success">Daftar Sekarang</button></center>
                    </div> --}}

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
