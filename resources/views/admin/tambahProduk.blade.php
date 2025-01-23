<!DOCTYPE html>
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

            <div class="navbar-brand-container">
                <img src="{{ asset('image/logo.jpg') }}" width="50" height="50" />
                <a href="#" class="navbar-brand fw-bold" style="color: #8B008B">MALAYA FLORIST</a>
            </div>

            <ul class="nav justify-content-end nav-underline">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/admin/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ url('/admin/produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}">
                        <button type="button" class="btn btn text-white fw-bold" style="background-color: #8B008B">Logout</button>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <br>
    <br>

    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal Menambahkan</strong> {{Session::get('failed') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil Menambahkan</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bsdismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <!-- Page Heading -->


    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h4 class="fw-bold" style="color: #8B008B;">Tambah Produk</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('postTambahProduk') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="kodeProduk" class="form-label">Kode Produk</label>
                            <input type="text" name="kodeProduk" class="form-control" required id="kodeProduk" value="{{ old('kodeProduk') }}">
                            <span class="text-danger"> @error('kodepProduk'){{ $message }}@enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="text" name="harga" class="form-control" required id="harga" value="{{ old('harga') }}">
                            <span class="text-danger"> @error('harga'){{ $message }}@enderror</span>
                        </div>
                        <div class="col-md-6">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" class="form-control" aria-label="Floating label select example" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="congratulations">Congratulations</option>
                                <option value="pernikahan">Pernikahan</option>
                                <option value="duka_cita">Duka Cita</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="gambar" class="form-label">Foto Barang</label>
                            <input type="file" name="gambar" id="gambar" class="form-control" required>
                        </div>
                        <div class="col mb-5">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" placeholder="Tulis deskripsi buku disini...." style="height: 100px" required value="{{ old('deskripsi') }}">
                        </textarea>
                        </div>
                        <button type="submit" class="btn btn-success" style="background-color: #8B008B">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>