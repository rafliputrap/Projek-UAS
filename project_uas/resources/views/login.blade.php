<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!----------------------- Login Container -------------------------->

        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!----------------------- Left Box -------------------------->

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                style="background: #48A6A7;">
                <div class="featured-image mb-3">
                    <img src="img/logo.png" alt="img-fluid" style="width: 200px;">
                </div>
                <small class="text-white text-wrap text-wrap text-center"
                    style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Selamat datang di apotik sederhana</small>
            </div>


            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Login</h2>
                        <p>Masukan email yang sudah di daftarkan</p>
                    </div>
                    <form action="{{ route('login.submit') }}" method="post">
                        @csrf
                        <label>Email Address</label>
                        <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control form-control-lg-bg-light fs-6"
                        placeholder="Email">
                        </div>
                        <label>Password</label>
                        <div class="input-group mb-1">
                            <input type="password" name="password" class="form-control form-control-lg-bg-light fs-6" placeholder="Password">
                        </div> 
                        <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6" style="color: black; text-decoration: none;"><small>Login</small></button>
                        </div>                     
                    </form>
                    
                    <form action="{{ route('registrasi.tampil') }}" method="get">
                        @csrf
                        <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6" style="width: 20px;" class="me-2" ><small>Registrasi</small></button>
                        </div>
                    </form>

                    @if(session('gagal'))
                    <p class="text-danger">{{ session('gagal')}}</p>
                    @endif
                </div>
            </div>
        </div>

    
</body>
</html>