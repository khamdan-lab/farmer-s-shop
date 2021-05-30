@extends('layout.admin.template')
@section('title', 'Add Category')
@section('content')

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Gambar Kategori</label>
                        <input type ="file" name="image" class="form-control" value="{{old('image')}}">
                        <div class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type= "text" name = "name" class="form-control" value="{{ old('name')}}">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Information</label>
                        <input type= "text" name = "information" class="form-control" value="{{ old('information')}}">
                        <div class="text-danger">
                            @error('information')
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
