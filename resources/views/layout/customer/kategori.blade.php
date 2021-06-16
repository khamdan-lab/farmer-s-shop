@extends('layout.customer.v_templates')
@section('content')

<div class="col-md-12">
    <a href="{{Route('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>
<br>

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

