@extends('layout.admin.template')
@section('title', 'Edit Category')
@section('content')

    <form action="{{ route('categories.update', $category->id) }}">
        @csrf


        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type= "text" name = "name" class="form-control" value="{{ $category-> name}}">
                        <div class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Information</label>
                        <input type= "text" name = "information" class="form-control" value="{{ $category-> information}}">
                        <div class="text-danger">
                            @error('information')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <a class="btn btn-primary" href="{ route('categories.index') }}"> Kembali</a>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
