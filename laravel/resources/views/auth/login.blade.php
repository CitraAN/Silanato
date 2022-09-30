<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('main/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('main/vendors/base/vendor.bundle.base.css')}}">
    <link href="{{ asset('main/css/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <!-- <script src="{{ asset('main/js/jquery-2.1.3.min.js')}}"></script> -->
    <script src="{{ asset('main/js/sweetalert.min.js')}}"></script>
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('main/css/style.css')}}">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('main/img/kemenkumham1.png')}}" height="150" weight="60" alt="logo">
                                <img src="{{ asset('main/img/SILANATO1.png')}}" height="150" weight="60" alt="logo">
                            </div>
                            <div class="text-center">
                                <h4>SISTEM INFORMASI DAN LAYANAN <br> LAPAS NARKOTIKA IIB PURWOKERTO</h4>
                                <h6 class="font-weight-light"></h6>
                            </div>
                            <form method="POST" action="{{ route('login') }}" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control form-control-xs text-bold"
                                        placeholder="Masukkan email anda" required autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-xs"
                                        placeholder="Masukkan password anda" required autofocus>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mt-3">
                                    <!-- <a href="SBAdmin/index.html" class="btn btn-block btn-primary btn-sm font-weight-medium auth-form-btn">LOGIN</a> -->
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="text-center mt-4 mb-4 font-weight-light">
                                    Atau
                                </div>
                                <div class="mb-2">
                                    <a class="btn btn-block btn-danger btn-lg font-weight-medium auth-form-btn"
                                        href="{{ url('daftar') }}" class="text-primary">Daftar Sekarang</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- login -->

    <!-- plugins:js -->
    <script src="{{ asset('main/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('main/js/off-canvas.js')}}"></script>
    <script src="{{ asset('main/js/hoverable-collapse.js')}}"></script>
    <script src="{{ asset('main/js/template.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
    <!-- endinject -->
    <script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>

</html>
<!-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "16"  -->
