@extends('layout.admin.template')
@section('title', 'List Category')
@section('content')

    <div class="pull-right">
        <a class="btn btn-success" href=" {{route('categories.create')}} "> Create New Category</a>
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
                    <th>Nama Kategori</th>
                    <th>Option</th>

        </li>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ;?>
                @foreach($category as $data)
                    <tr>
                        <td>{{ $no++ }} </td>
                        <td> {{ $data->name }}</td>
                        <td>

                            <form action="{{ route('products.destroy',$data->id) }}" method="POST">

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

