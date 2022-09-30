<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>SILANATO</title>
</head>

<body class="">
    <ul class="nav fixed-top justify-content-center bg-primary">
        <li class="nav-item">
            <a class="nav-link h4 text-white" href="#">Riwayat Kunjungan</a>
        </li>
    </ul>
    <div class="container" style="margin-top: 4rem">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @foreach ($kunjungan as $item)
                <a href="{{ url('admin-view/kunjungan') }}" class="btn btn-primary">Kembali</a>
                <a href="{{ route('showketerangan', $item->id) }}" class="btn btn-warning">Edit</a>
                <div class="card mt-3">
                    
                    
                    <div class="card-body">
                        <h5>Foto Selfie</h5>
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('images/foto/'.$item->foto)}}" alt="" height="150" class="d-inline-block align-text-top rounded">
                        
                    </div>
                    </div>
                    <div class="card-body"><h5>KTP</h5>
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('images/foto/'.$item->file_id)}}" alt="" height="150" class="d-inline-block align-text-top rounded">
                        
                    </div>
                    </div>
                    <div class="card-body">
                        <h5>Data Kunjungan <hr class="bg-dark"></h5>
                        <h6>Nama Lengkap : {{ $item->nama }}</h6>
                        <h6>NIK : {{ $item->nik }}</h6>
                        <h6>Tanggal Kunjungan : {{ $item->jadwal_kunjungan }}</h6>
                        <h6>jam : {{ $item->jam_kunjungan }}</h6>
                        <h6>Nomor Telepon : {{ $item->no_hp }}</h6>
                        <h5>Data Warga Binaan <hr class="bg-dark"></h5>
                        <h6>Nama Warga Binaan : {{ $item->nama_wbp }}</h6>
                        <h6>Hubungan dengan WBP : {{ $item->hubungan }}<hr class="bg-dark"></h6>
                        <form action="{{ route('updateriwayat', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-success">Konfirmasi</button>
                        </form>
                    </div>
                    

                </div>
            </div>
            @endforeach
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
