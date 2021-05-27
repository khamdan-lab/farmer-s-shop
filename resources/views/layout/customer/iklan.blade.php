@extends('layout.customer.v_templates')
@section('content')

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
          <img src="{{ asset('/gambar/1.png') }}"class="d-block w-50 container" alt="..." />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{ asset('/gambar/4.png') }}" class="d-block w-50 container" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{ asset('/gambar/2.jpg') }}" class="d-block w-50 container" alt="..." />
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
    <h3><strong>Kategori Produk</strong></h3>
  </div>

  <!-- Chard Kategori Produk -->
  <div class="container mt-5 mb-5">

    <div class="card-group">
    @foreach ($category as $data)
      <div class="card ml-3">
        <img src="{{ asset('/gambar/bibit.png') }}" class="card-img-top container" alt="..." />
        <div class="card-body">
          <h5 class="card-title"> <strong>{{ $data-> name}}</strong></h5>
        </div>
        <div class="card-footer">
        <a href="{{ route('customer.kategori',['id' => $data->id]) }}" class="btn btn-secondary btn-sm container">Lihat Produk</a>
          {{-- <button type="button" class="btn btn-secondary btn-sm container">Lihat Produk</button> --}}
        </div>
      </div>
      @endforeach
    </div>

  </div>

  <!-- Penutup Chard Kategori Produk -->

@endsection
