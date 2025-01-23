<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.c
ss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-
icons@1.10.5/font/bootstrap-icons.css">
    <title>Edit Data</title>
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

    <div class="container">
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

        <div class="container">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h4 class="fw-bold" style="color: #8B008B;">Edit Produk</h4>
                </div>
                <div class="card-body">
                    <form action="/postEditProduk/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label for="kodeProduk" class="form-label">Kode Produk</label>
                                <input type="text" name="kodeProduk" class="form-control" required id="kodeProduk" value="{{ $data->kode_produk }}">
                                <span class="text-danger"> @error('kodepProduk'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control" required id="harga" value="{{ $data->harga }}">
                                <span class="text-danger"> @error('harga'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <label class="text-secondary mb-2">Kategori Produk</label>
                                <select class="form-select" aria-label="Floating label select example" name="kategori">
                                    @foreach ($kategori as $option)
                                    <option value="{{ $option }}" @if ($option==$data->kategori) selected @endif>{{ $option }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="gambar" class="form-label">Foto Produk</label>
                                <input class="form-control mb-2" placeholder="Nama file lama: {{ $data->gambar }}" disabled>
                                <input type="file" class="form-control" name="gambar">
                                <img class="mt-3" style="width: 100px" src="{{ asset('/images/' . $data->gambar) }}" alt="gambar">
                            </div>
                            <div class="col mb-5">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" style="height: 100px" class="form-control" required>
                                {{ $data->deskripsi}}
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-success" style="background-color: #8B008B">Update Produk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.
min.js"></script>
</body>

</html>