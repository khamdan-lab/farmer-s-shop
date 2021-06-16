@extends('layout.customer.v_templates')
@section('content')

<div class="col-md-12">
    <a href="{{Route('home')}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>
<br>

<div class="col-md-12">
    <h3><i class="fa fa-shooping-cart"></i>Check Out</h3>
        @if (!empty($pesanan))

    <p align="right">Tanggal Pesan : {{ $pesanan-> tanggal }}</p>
</div>
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        {{-- <th>Gambar</th> --}}
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ; ?>
                    @foreach ($pesanan_details as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        {{-- <td><img src="/image/{{ $data->product->image }}" width="40px"></td> --}}
                        <td>{{ $data->product->name_goods}}</td>
                        <td>{{ $data->jumlah }} Produk</td>
                        <td align="left">{{ number_format($data->product->cost) }} </td>
                        <td align="left">{{ number_format($data->jumlah_harga) }}</td>
                        <td>
                            <form action="{{ route('produk.delete',['id' => $data->id]) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" align="right"><strong>Total Harga</strong></td>

                        <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                        <td>
                            <a href="{{Route('konfirmasi.checkout')}}" class="btn btn-success"><i class="fa fa-shopping-cart"></i>
                            Check Out</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @endif

        </div>
    </div>
</div>

@endsection

