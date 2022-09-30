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
    },
    </style>
</head>

<body class="">
    <ul class="nav fixed-top justify-content-center bg-prary border-bottom border-dark">
        <li class="nav-item">
            <a class="nav-link h4 text-white" href="#">INFORMASI</a>
        </li>
    </ul>
    <div class="container" style="margin-top: 4rem">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="/informasi" class="btn btn-primary">Kembali</a>
                @foreach ($informasilainya as $item)
                <div class="card mt-3">
                    <div class="card-body">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                    <img class="mb-2" width="100" height="100" src="{{ asset('informasilainya/'.$item->foto) }}">
                    <h3 class="mb-0">{{ $item->judul }}</h3>
                    <div class="mb-1 text-muted">{{ $item->created_at }}</div>
                    <p class="card-text mb-auto">{{ $item->deskripsi }}</p>
                    <a href="#" class="stretched-link"></a>
                </div>
                    <div class="">
                    </div>
                    </div>
                    </div>
                </div>
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
