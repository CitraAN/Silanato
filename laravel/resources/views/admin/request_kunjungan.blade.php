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
    <style>
        body {
        background-image: url("images/bg/bg9.png");
        height: 100%;
    }
    </style>
</head>

<body class="">
    <ul class="nav fixed-top justify-content-center bg-primary">
        <li class="nav-item">
            <a class="nav-link h4 text-white" href="#">Request Kunjungan</a>
        </li>
    </ul>
    <div class="container" style="margin-top: 4rem">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{ url('/admin-view') }}" class="btn btn-primary">Kembali</a>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                {{-- <div class="card mt-3"> --}}
                    <div class="table-responsive mt-3">
                        <table  class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal Kunjungan</th>
                                <th scope="col">Jam Kunjungan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kunjungan as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nik }}</td>
                                <td><h6>{{ $item->nama}}</h6></td>
                                <td>{{ $item->jadwal_kunjungan }}</td>
                                <td>{{ $item->jam_kunjungan }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>@if ($item->status == 0)
                                    <a class="badge badge-danger text-white" href="{{ route('konfimasi',$item->id) }}">Belum Dikonfirmasi</a>
                                    @elseif($item->status == 1)
                                    <a class="badge badge-success text-white">Kunjungan Sudah Terverifikasi</a>
                                    @else
                                    <a class="badge badge-warning">Ditolak</a>
                                    @endif</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="2" class="text-center">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    </div>
                {{-- </div> --}}
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
