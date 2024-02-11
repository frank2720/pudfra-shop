<nav class="navbar navbar-expand-lg bg-info-subtle fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://pudfra-talk.xyz/">
        <img
          src="https://pudfra-talk.xyz/images/logo.png"
          height="20"
        />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('shop')}}">Products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href=''>{{$category->category}}</a></li>
                @endforeach
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="" class="nav-link badge-notification" id="cart-details">
                    <i class="fas fa-shopping-bag me-2" style="font-size:24px;"></i>
                    <span class="position-absolute translate-middle badge rounded-pill bg-danger">
                      @if (session()->has('cart'))
                      {{session()->get('cart')->totalQty}}
                      @else
                        {{__('0')}}
                      @endif
                    </span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if (Route::has('login'))
            @auth
              <div class="dropdown-center">
                  <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset('assets/images/3551739.jpg')}}" alt="" class="rounded-circle" height="25">
                  </a>
                  <ul class="dropdown-menu">
                    <li><p class='dropdown-item'>{{ucwords(strtolower(Auth::user()->name))}}</p></li>
                    <hr>
                    <li><a class='dropdown-item' href='/profile'>My profile</a></li>
                    <li>
                      <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <a href="{{route('logout')}}" class="dropdown-item"
                          onclick="event.preventDefault();
                          this.closest('form').submit();">Logout
                        </a>
                      </form>
                    </li>
                  </ul>
              </div>
            @else
            <li class="px-3 py-2">
              <button class='btn btn-outline-secondary btn-sm btn-rounded'>
                <a href="{{route('login')}}" class="nav-link">Login</a>
              </button>
            </li>
            <li class="px-3 py-2">
              @if (Route::has('register'))
                  <button class='btn btn-outline-secondary btn-sm btn-rounded'>
                    <a href="{{route('register')}}" class="nav-link">SignUp</a>
                  </button>
              @endif
            </li>
            @endauth
            @endif
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>