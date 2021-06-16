@extends('layout.customer.v_templates')
@section('content')

    <h1 class="container"></h1>
    <h3 class="text-center mt-3 mb-3">History Pembelian</h3>

    <div class="container">
      <table class="table table-striped table-bordered border-secondary">
        <thead>
          <tr>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Harga Total</th>
            <th scope="col">Status</th>
            <th scope="col">Bukti Pembayaran</th>
          </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            @foreach ( $pesanan as $data)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$data -> tanggal}}</td>
                <td>{{$data -> jumlah_harga}}</td>
                <td>
                @if ($data ->status == 1)
                    Belum lunas & belum diproses
                @elseif ($data ->status == 2)
                sudah lunas
                @else
                Proses Pengiriman
                @endif
                </td>
                <td>
                    @if ($data -> image == 0)

                    <form action="{{route('bayar')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Kirim Bukti Pembayaran</button>
                    </form>
                    @else
                    <img src="/image/{{ $data->image }}" width="80px">
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>

@endsection




