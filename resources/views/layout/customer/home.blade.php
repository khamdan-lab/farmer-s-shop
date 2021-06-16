<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <title>Home | TokoTani</title>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">TokoTani</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Bibit</a></li>
                <li><a class="dropdown-item" href="#">Pupuk</a></li>
                <li><a class="dropdown-item" href="#">Peralatan</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">History</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                ><img src="produk/cart.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
                Cart
              </a>
            </li>
            <li class="nav-item">
              <button type="button" class="btn btn-outline-secondary">LogIn</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
  </head>
  <body>
    <!-- Carousel Iklan -->
    <div class="container mb-5">
      <div id="carouselExampleDark" class="mt-5 carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="produk/4.png" class="d-block w-50 container" alt="..." />
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="produk/4.png" class="d-block w-50 container" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="produk/4.png" class="d-block w-50 container" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Penutup Carousel -->

    <div class="container">
      <h3>Kategori Produk</h3>
    </div>

    <!-- Chard Kategori Produk -->
    <div class="container mt-5 mb-5">
      <div class="card-group">
        <div class="card">
          <img src="produk/bibit.png" class="card-img-top container" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Bibit</h5>
            <p class="card-text">
              Bibit/Benih secara umum adalah istilah yang dipakai untuk bahan dasar pemeliharaan tanaman atau hewan. Istilah ini biasanya dipakai bila bahan dasar ini berukuran jauh lebih kecil daripada ukuran hasil akhirnya.
            </p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-secondary btn-sm container">Lihat Produk</button>
          </div>
        </div>
        <div class="card">
          <img src="produk/pupuk.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Pupuk</h5>
            <p class="card-text">
              Pupuk adalah material yang ditambahkan pada media tanam atau tanaman untuk mencukupi kebutuhan hara yang diperlukan tanaman sehingga mampu berproduksi dengan baik. Material pupuk dapat berupa bahan organik ataupun non-organik.
              Pupuk berbeda dari suplemen.
            </p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-secondary btn-sm container">Lihat Produk</button>
          </div>
        </div>
        <div class="card">
          <img src="produk/alat.jpg" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Peralatan</h5>
            <p class="card-text">
              Alat dan mesin pertanian adalah berbagai alat dan mesin yang digunakan dalam usaha pertanian. Pengelompokan penggunaan istilah alat dan mesin pertanian tidak lepas dari definisi dari alat dan mesin itu sendiri. Perbedaan
              mendasar antara alat dan mesin adalah, mesin memiliki poros yang berputar, sedangkan alat tidak.
            </p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-secondary btn-sm container">Lihat Produk</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Penutup Chard Kategori Produk -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
