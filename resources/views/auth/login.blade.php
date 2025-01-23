<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>MALAYA FLORIST</title>
</head>

<body style="font-family: 'Poppins', sans-serif;">

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
            <div class="navbar-brand-container">
                <img src="{{ ('/image/logo.jpg') }}" width="50" height="50" />
                <a href="/" class="navbar-brand fw-bold" style="color: #3CACAE">WEBSITE PEMESANAN PAPAN
                    BUNGA</a>
            </div>
            <ul class="nav justify-content-end nav-underline">
                <li class="nav-item">
                    <a href="{{ route('auth.login') }}"><button type="button" class="btn fw-bold" style="color: #3CACAE">Masuk</button></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('auth.register') }}"><button type="button" class="btn btn text-white fw-bold" style="background-color: #3CACAE">Daftar</button></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Login Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card my-5">

                    <div class="card-body p-3">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-3">
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="text-center fw-bold">MASUK</h4>
                                            <a href="{{ route('auth.register') }}" class="nav-link text-center"><span style="font-size: 12px;">Belum
                                                    punya akun?</span><span style="font-size: 12px; color: #3CACAE">Daftar</span></a>
                                        </div>
                                    </div>
                                    <br>
                                    <form action="{{ route('postLogin') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label text-secondary"><span style="font-size: 12px;">Email</span></label>
                                            <input type="email" name="email" class="form-control" id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE" required value="{{ old('email') }}">
                                            <span class="text-danger">
                                                @error('email')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput" class="form-label text-secondary"><span style="font-size: 12px;">Kata Sandi</span></label>
                                            <input type="password" name="password" class="form-control" id="formGroupExampleInput" style="box-shadow: none; border-color: #3CACAE">
                                        </div>
                                        <br>
                                        <div class="mb-3 d-grid gap-2">
                                            <button type="submit" class="btn" style="background-color: #3CACAE"><span style="color: white">Masuk</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <footer class="d-flex justify-content-center shadow" style="background-color: #3CACAE">

        <body>

            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">TENTANG WEBSITE</h5>
                        <p class="text-white">Kami menyajikan koleksi papan bunga eksklusif yang dirancang dengan cinta
                            dan kreativitas untuk memenuhi berbagai kebutuhan Anda, mulai dari hadiah ulang tahun,
                            ucapan selamat, hingga momen-momen istimewa seperti pernikahan dan perayaan lainnya.</p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Products</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Bunga Ucapan</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Bouquet</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> Table Flowers</a>
                        </p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Media Sosial</h5>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> <a href="https://www.instagram.com/elpiji.kita/?hl=en/">Instagram</a>
                        </p>
                        <p>
                            <a href="#" class="text-white" style="text-decoration: none;"> <a href="https://web.facebook.com/profile.php?id=100093592826913">Facebook</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact Agen</h5>
                        <p class="text-white"><i class="fas fa-home mr-3"></i>Pangkalan Batang, Bengkalis.</p>
                        <p class="text-white"><i class="fas fa-envelope mr-3"></i>fulan123@gmail.com</p>
                        <p class="text-white"><i class="fas fa-phone mr-3"></i>089670058249</p>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p class="text-white">Copyright 2023 All rights reserved by:
                            <a href="#" style="text-decoration: none;">
                                <strong class="text-warning">MALAYA FLORIST</strong>
                            </a>
                        </p>
                    </div>
                    <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>