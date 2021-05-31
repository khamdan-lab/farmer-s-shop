@extends('layout.customer.v_templates')
@section('content')

<div class="container">
    <div class="row mb-3">
        {{-- @foreach ($product as  $item) --}}
        <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <img src="/image/{{ $data->image }}" class="card-img-top container" alt="...">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2> <strong>{{$data -> name_goods}}</strong></h2>
            <h4>Rp {{number_format($data -> cost)}}</h4>
            <div class="row">
                <div class="col">
                    <table class="table" style="border-top : hidden" >
                        <tr>
                            <td>stok</td>
                            <td>:</td>
                            <td>
                                {{$data -> stock}}
                            </td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>
                                {{$data -> information}}
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Pesanan</td>
                            <td>:</td>
                            <td>
                               <form action="{{route('produk.pesan',['id'=> $data->id])}}" method="post">
                                @csrf
                                <input type="text" name="jumlah_pesan" class="form control" required="">

                            </td>
                        </tr>

                    </table>
                        <tr>
                        <button type="submit" class="btn btn-dark btn-block"><i class="fa fa-shopping-cart">Masukan Keranjang</i></button>
                        </tr>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>

</div>

@endsection
