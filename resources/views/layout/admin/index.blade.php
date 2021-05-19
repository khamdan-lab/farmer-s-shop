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
                    {{-- <th>Gambar</th> --}}
                    {{-- <th>Informasi</th> --}}
                    <th>Kategori</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ;?>
                @foreach($product as $data)
                    <tr>
                        <td>{{ $no++ }} </td>
                        <td> {{ $data->tanggal_masuk }}</td>
                        <td> {{ $data->name_goods }}</td>
                        <td> {{ $data->cost }}</td>
                        <td> {{ $data->stock }}</td>
                        {{-- <td> <img src= {{ $data->image }} ></td> --}}
                        {{-- <td> {{ $data->information }}</td> --}}
                        <td> {{ $data->category->name}}</td>
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

        {{-- @foreach ($product as $data)

            <div class="modal fade" id="delete{{$data -> id_guru}}">
                <div class="modal-dialog modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                    <h4 class="modal-title"> {{$data->name_goods}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p> Apakah Anda Ingin Menghapus Data ? </p>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                    <a href ="" class="btn btn-outline-light">Yes</a>
                    </div>
                </div>
                <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        @endforeach --}}





@endsection

