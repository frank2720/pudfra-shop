<nav  class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
          <a class="navbar-brand mt-2 mt-sm-0" href="https://pudfra-talk.xyz/">
            <img
              src="https://pudfra-talk.xyz/images/logo.png"
              height="20"
              alt="MDB Logo"
              loading="lazy"
            />
          </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('shop')}}">Products</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Categories
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($categories as $category)
                        <li>
                          <a class='dropdown-item' href=''>{{$category->category}}</a>
                        </li>
                    @endforeach
                  </ul>
                </li>
              </ul>
              <!-- Left links --> 
        </div>
        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <a class="nav-link me-3" href="#" id="cart-details">
              <i class="fas fa-shopping-cart"></i>
              <span class="badge rounded-pill badge-notification bg-danger">
                @if (session()->has('cart'))
                  {{session()->get('cart')->totalQty}}
                @else
                  {{__('0')}}
                @endif
              </span>
            </a>
            @if (Route::has('login'))
                @auth
                    <div class="dropdown">
                      <a href="" class="dropdown-toggle d-flex align-items-center hidden-arrow" id='profiledetails' role='button' data-mdb-toggle='dropdown' aria-expanded='false'>
                        <img src="{{asset('assets/images/3551739.jpg')}}" alt="" class="rounded-circle" height="25" loading="lazy">
                      </a>
                      <ul class='dropdown-menu dropdown-menu-end' aria-labelledby='profiledetails'>
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
                <button class='btn btn-link px-3 me-2'>
                  <a href="{{route('login')}}">Login</a>
                </button>
                @if (Route::has('register'))
                    <button class='btn btn-link px-3 me-2'>
                      <a href="{{route('register')}}">SignUp</a>
                    </button>
                @endif
                @endauth
                
            @endif
        </div>
    </div>
</nav>