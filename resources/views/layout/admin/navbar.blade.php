<li class="nav-header">Fitur Admin</li>
    @if(auth()->user()->level == 1)
          <li class="nav-item">
            <a href="/products" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/categories" class="nav-link">
              <i class="nav-icon far fa-circle text-success"></i>
              <p>Category</p>
            </a>
        </li>
          <li class="nav-item">
            <a href="{{ route('history')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>History</p>
            </a>
          </li>

    @endif
