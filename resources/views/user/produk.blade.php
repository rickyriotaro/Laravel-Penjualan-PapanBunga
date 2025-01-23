<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MALAYA FLORIST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <nav class="navbar bg-body-tertiary shadow">
        <div class="container">

            <a href="/user/home" class="navbar-brand fw-bold" style="color: #8B008B">WEBSITE PEMESANAN PAPAN BUNGA</a>
            <ul class="nav justify-content-end nav-underline">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/user/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="/user/produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">Kontak Owner</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}"><button type="button" class="btn btn text-white fw-bold" style="background-color: #8B008B">Logout</button></a>
                </li>

            </ul>
        </div>
    </nav>

    <br>

    <div class="row mt-5 mb-5">
        <div class="col"></div>
        <div class="col-6">
            <form action="" method="GET">
                @csrf
                <div class="input-group">
                    <input type="search" name="search" class="form-control rounded" placeholder="Cari Produk" aria-label="Search" aria-describedby="search-addon" />
                    <button type="submit" class="btn btn-outline-primary">search</button>
                </div>
            </form>
        </div>
        <div class="col"></div>
    </div>

    <div class="container">
        @foreach ($data as $produk)
        <div class="row gx-2 gx-lg-3 row-cols-2 row-cols-md-6 g-3">
            <div class="col mb-0">
                <div class="card h-100 shadow border-0" style="border-radius: 20px; width:100%;object-fit: contain;">
                    <img class="card-img-top" style="display:block; left:0;right:0;top:0;bottom:0; border-radius: 20px 20px 0px 0px;" src="{{ asset('images/' . $produk->gambar) }}" alt="..." />
                    <div class="card-body p-3">
                        <h5>{{ $produk->kategori }}</h5>
                        <p class="card-text fw-bold" style="color:#139ebd">Rp. {{ $produk->harga }}</p>
                        <h6 class="text-muted" style="font-size:11px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis;">
                            {{ $produk->deskripsi }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{ $data->links() }}
    </div>
    <br><br>

    <br>
    <br>


    <footer class="d-flex justify-content-center shadow" style="background-color: #8B008B">

        <body>

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
                </p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>