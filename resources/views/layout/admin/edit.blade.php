@extends('layout.admin.template')
@section('title', 'Edit Product')
@section('content')

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type= "date" name= "tanggal_masuk" class="form-control" value="{{ $product-> tanggal_masuk }}">
                        <div class="text-danger">
                            @error('tanggal_masuk')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="name_goods" class="form-control" value="{{ $product-> name_goods }}">
                        <div class="text-danger">
                            @error('name_goods')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type ="integer" name="cost" class="form-control" value="{{ $product-> cost }}">
                        <div class="text-danger">
                            @error('cost')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Stok</label>
                        <input type ="integer" name="stock" class="form-control" value="{{ $product-> stock }}">
                        <div class="text-danger">
                            @error('stock')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                     <div class="form-group">

                        <label>Informasi</label>
                        <input type ="text" name="information" class="form-control" value=" {{ $product-> information }}">
                        <div class="text-danger">
                            @error('information')
                                {{ $message }}
                            @enderror
                        </div>
                        {{-- <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih...</option>
                            <option value="1">Pupuk</option>
                            <option value="2">Bibit</option>
                            <option value="3">Alat Pertanian</option>
                        </select> --}}
                    </div>

                    <div class="form-group">
                        <label>Kategori</label>
                        <input type ="text" name="category_id" class="form-control" value="{{ $product-> category_id }}">
                        <div class="text-danger">
                            @error('category_id')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Gambar Product</label>
                        <input type ="file" name="image" class="form-control" value="{{ $product-> image }}>
                        <div class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
