<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <!-- Tambahkan link untuk font Popins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>MALAYA FLORIST</title>
    <style>
        .navbar-brand-container {
            display: flex;
            align-items: center;
        }

        .navbar-brand-container img {
            border-radius: 50%;
            margin-right: 10px;
        }

        /* Ganti jenis font tulisan menjadi Popins */
        .navbar-brand,
        .btn,
        .card-title,
        .card-text,
        .text-warning,
        .text-uppercase,
        .list-unstyled,
        .list-inline-item,
        .text-center,
        .text-md-left,
        .font-weight-bold {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">
            <div class="navbar-brand-container">
                <img src="{{ ('image/logo.jpg') }}" width="50" height="50" />
                <a href="/" class="navbar-brand fw-bold" style="color: #3CACAE">WEBSITE PEMESANAN PAPAN BUNGA</a>
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

    <br />
    <br />

    <div class="container">
        <div class="card shadow" style="background-color: #f8f1f6; border: none">
            <div class="card-body">
                <br>
                <h1 class="card-title fw-bold" style="color: #3CACAE">
                    SELAMAT DATANG
                </h1>
                <h2 class="card-title fw-bold text-dark">
                    DI WEBSITE MALAYA FLORIST
                </h2>
                <p class="card-text">
                    Menyediakan Papan Bunga yang indah dan berkelas.
                </p><br>

                <br>
                <br>
                <br>

            </div>
            <br>

            <div class="container">
                <a href="{{ route('auth.register') }}"><button type="button" class="btn btn text-white fw-bold" style="background-color: #3CACAE">
                        Daftar Sekarang
                    </button></a>
                <br />
                <br />
            </div>
        </div>
    </div>
    </div>

    <br />
    <br />
    <br />

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <footer class="d-flex justify-content-center shadow" style="background-color: #3CACAE">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold  text-warning">TENTANG WEBSITE</h5>
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
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact Owner</h5>
                    <p class="text-white"><i class="fas fa-home mr-3"></i>Bengkalis, Riau.
                    </p>
                    <p class="text-white"><i class="fas fa-envelope mr-3"></i>fulan123@gmail.com
                    </p>
                    <p class="text-white"><i class="fas fa-phone mr-3"></i>089670058249
                    </p>
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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>