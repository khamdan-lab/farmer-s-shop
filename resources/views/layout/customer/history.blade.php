@extends('layout.customer.v_templates')
@section('content')

    <h1 class="container">-</h1>
    <h3 class="text-center mt-3 mb-3">History Pembelian</h3>

    <div class="container">
      <table class="table table-striped table-bordered border-secondary">
        <thead>
          <tr>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Harga Total</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Status Pembayaran</th>
            <th scope="col">Bukti Pembayaran</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Pupuk NPK Phonska</td>
            <td>Rp70.000</td>
            <td>12/12/2020</td>
            <td>Belum Lunas</td>
            <td class="text-center"><button class="btn btn-danger">Tambahkan Foto</button></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Insektisida</td>
            <td>RP45.000</td>
            <td>01/01/2021</td>
            <td>Lunas</td>
            <td><img src="produk/bukti.jpg" /></td>
          </tr>
        </tbody>
      </table>
    </div>

@endsection



