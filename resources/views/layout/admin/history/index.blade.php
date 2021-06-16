@extends('layout.admin.template')
@section('title', 'Pesanan Masuk')
@section('content')

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>tanggal</th>
                <th>alamat</th>
                <th>No Hp</th>
                <th>Jumlah Belanja</th>
                <th>Bukti Pembayaran</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            @foreach ($pesanan as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{ $data -> user->name}}</td>
                <td>{{ $data -> tanggal}}</td>
                <td>{{ $data -> user->address}}</td>
                <td>{{ $data -> user ->no_hp}}</td>
                <td>{{ $data -> jumlah_harga}}</td>
                <td> <img src="/image/{{ $data->image }}" width="40px"></td>
                <td>
                    @if ($data -> status == 2)
                    <form action="{{route('approve')}}" method="POST">
                        @csrf
                        <input type="text" name="approve" required hidden>
                        <button type="submit" class="btn btn-primary">Approve</button>
                    </form>
                    @else
                      Pesanan Terkirim
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>


@endsection


{{-- @if ($data->status == 2)
<a href="{{route('approve')}}" class="btn btn-primary">Approve</a>
@else
Dikirim
@endif --}}
