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
            <a class="nav-link h4 text-white" href="#">Ubah Profil</a>
        </li>
    </ul>
    <div class="container" style="margin-top: 7rem">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @foreach ($detail as $item)
                <form action="{{ url('update-profil', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="foto" class="h6">Foto</label>
                        <input type="file" class="form-control-file" id="foto" name="foto" placeholder="foto" value="{{ $item->foto }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="{{ $item->nik }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ $item->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">Jenis kelamin</label>
                        <select class="form-control" id="jk" name="jk">
                            <option></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="{{ $item->tempat_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="{{ $item->tgl_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">Nomor Telepon</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon" value="{{ $item->no_hp }}">
                    </div>
                    <div class="form-group">
                        <label for="nama" class="h6">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $item->alamat }}</textarea>
                    </div>
                    <input type="hidden" name="id" value="{{ $item->id}}">

                    <div class="form-group d-flex justify-content-center">
                        <a class="btn btn-danger text-white mr-3" href="{{ url('home') }}">Batal</a>
                        <button type="submit" class="btn btn-success ml-3">Simpan</button>
                    </div>
                </form>
                @endforeach
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
