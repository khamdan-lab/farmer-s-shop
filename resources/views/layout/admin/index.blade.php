@extends('layout.admin.template')
@section('title', 'List Product')
@section('content')

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
    </div>
        <br>

        @if(session('pesan'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success</strong> {{session('pesan')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif
        <br>
        <table class = "table table-bordered text-center" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Masuk</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    {{-- <th>Informasi</th> --}}
                    {{-- <th>Kategori</th> --}}
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ;?>
                @foreach($products as $data)
                    <tr>
                        <td>{{ $no++ }} </td>
                        <td> {{ $data->tanggal_masuk }}</td>
                        <td> {{ $data->name_goods }}</td>
                        <td> {{ $data->cost }}</td>
                        <td> {{ $data->stock }}</td>
                        <td> <img src="/image/{{ $data->image }}" width="40px"></td>
                        {{-- <td> {{ $data->information }}</td> --}}
                        {{-- <td> {{ $data->category->name}} </td> --}}
                        <td>
                            <form action="{{ route('products.destroy',$data->id) }}" method="POST"  >

                                <a href="{{ route('products.edit',$data->id) }}" class="btn btn-sm btn-warning">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>

                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection

