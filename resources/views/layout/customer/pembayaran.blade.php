@extends('layout.customer.v_templates')
@section('content')

{{-- <div class="row">
    <div class="col">
        <a href="" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
</div> --}}

<div class="row mt-4">
    <div class="col">
        <h4>Informasi Pembayaran</h4>
        <hr>
        <p>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini sebesar : <strong></strong> </p>
        <div class="media">
            <img class="mr-3" src="{{ asset('/gambar/bank.png') }}" alt="" width="60">
            <div class="media-body">
                <h5 class="mt-0">BANK BRI</h5>
                No. Rekening 012345-678-910 atas nama <strong> Safiq </strong>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>Informasi Pengiriman</h4>
        <hr>
        <form action="{{route('kirim')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">No. HP</label>
                <input type="text" name="no_hp" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success btn-block">Checkout</button>
        </form>
    </div>
</div>


@endsection
