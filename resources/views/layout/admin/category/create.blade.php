@extends('layout.admin.template')
@section('title', 'Add Category')
@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type= "text" name = "name" class="form-control" value="{{ old('name')}}">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-primary" href=""> Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
