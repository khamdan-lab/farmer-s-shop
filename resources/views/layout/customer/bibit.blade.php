@foreach ( $bibit as $data )
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Nama : {{$data -> name_goods}} </p>
        </div>
    </div>
@endforeach

