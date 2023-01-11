<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Ninestars</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{url('/')}}"><img src="{{asset('img/welcome/logo2.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{url('/')}}">Inicio</a></li>
          @if (Route::has('login'))
            @auth
              <li><a class="getstarted scrollto" href="{{ url('/home') }}">Home</a></li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{-- <img src="{{ asset(Auth::user()->photo) }}" class="img-thumbnail rounded-circle" width="40px"> --}}
                    {{ Auth::user()->fullname }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    {{-- @if (Auth::user()->role == "Admin")
                        <a class="dropdown-item" href="{{ url('users') }}">
                            <i class="fa fa-users"></i>
                            Módulo Usuarios 
                        </a>
                        <a class="dropdown-item" href="{{ url('categories') }}">
                            <i class="fas fa-list-alt"></i>
                            Módulo Categorías 
                        </a>
                        <a class="dropdown-item" href="{{ url('games') }}">
                            <i class="fas fa-gamepad"></i>
                            Módulo Juegos 
                        </a>
                        <div class="dropdown-divider"></div>
                    @elseif(Auth::user()->role == "Editor")
                        <a class="dropdown-item" href="{{ url('editor/info') }}">
                                <i class="fa fa-user"></i>
                                Mis Datos 
                        </a>
                        <a class="dropdown-item" href="{{ url('editor/games') }}">
                            <i class="fas fa-gamepad"></i>
                            Mis Juegos 
                        </a>
                    @endif --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
            @else
              @guest
                <li><a class="getstarted scrollto" href="{{ route('login') }}">Iniciar Sesión</a></li>
                {{-- @if (Route::has('register'))
                  <li><a class="getstarted1 scrollto" href="{{ route('register') }}">Registrarse</a></li>
                @endif --}}
              @endguest
            @endif
          @endif

        </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->