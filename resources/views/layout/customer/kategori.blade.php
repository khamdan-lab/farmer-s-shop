@extends('layout.customer.v_templates')
@section('content')

{{-- <div class="container mt-10 mb-10">

    <div class="card-group">
    @foreach ($category as $data)
      <div class="card">
        <img src="{{ asset('/gambar/bibit.png') }}" alt="..." />
        <div class="card-body">
          <h5 class="card-title"> {{ $data-> name_goods}}</h5>
          <p class="card-text">

          </p>
        </div>
        <div class="card-footer">
        <a href="" class="btn btn-secondary btn-sm container">Lihat Product</a>
          {{-- <button type="button" class="btn btn-secondary btn-sm container">Lihat Produk</button> --}}
        {{-- </div>
      </div>
      @endforeach
    </div>

  </div> --}}


  <a href="/" class="btn btn-warning mt-2">Kembali</a>

  <div class="row mb-3">

    @foreach($category as $data)
    <div class="col-sm-2 mt-3">
        <div class="card">
        <img src="/image/{{ $data->image }}" class="img-fluid" width="100%" style="height:200px">
        <div class="block-4-text p-4">
        <h4>{{$data -> name_goods}}</h4>
        <p class="mb-0"></p>
        <a href="{{ route('produk.detail',['id' => $data->id]) }}" class="btn btn-dark mt-2">Detail</a>
        </div>
        </div>
    </div>
    @endforeach


</div>

@endsection

