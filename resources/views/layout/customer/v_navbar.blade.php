<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">TokoTani</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item active">
                <a class="nav-link" href="{{ Route('latihan')}}">Home <span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Product
            </a>

            {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($category as $data )
                <a class="dropdown-item" href="{{ route('customer.kategori',['id' => $data->id]) }}">{{$data -> name}}</a>
                @endforeach
            </div> --}}
            </li>

            <li class="nav-item active">
                <a class="nav-link"
                @if (Auth::check())
                href="/history"
                @else
                href="{{ route('login') }}"
                @endif
                >History<span class="sr-only">(current)</span></a>
            </li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href=""
          @if (Auth::check())
            <?php

                $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
            ?>
            ><i class="fa fa-shopping-cart"><span class="badge badge-danger">{{$notif}}</span></i></a>

            @endif

      </li>

        <!-- Authentication Links -->
              @guest

                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>

                  {{-- @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif --}}
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         <strong>{{ Auth::user()->name }}</strong>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a href="" class="dropdown-item">Edit Profile</a>

                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>



                      </div>
                  </li>
              @endguest
          </ul>





    </div>
  </nav>
