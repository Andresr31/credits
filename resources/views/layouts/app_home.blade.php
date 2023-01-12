<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('favicon.png')}}" rel="icon">
    <link href="{{asset('img/welcome/favicon.png')}}" rel="apple-touch-icon">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
   
    
    
</head>

<body>
    <div id="app">
        <div class="d-flex" id="wrapper">
            <div class="border-right bg-white shadow-sm " id="sidebar-wrapper">
                <div class="sidebar-heading align-content-center text-center">
                    <h6><strong>{{ Auth::user()->fullname }}</strong></h6>
                </div>

                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'home' ? 'active-credits' : '' }}"
                        href="{{ route('home') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-home mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Inicio</span>
                        </div>
                    </a>

                    <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'credits.index' ? 'active-credits' : '' }}" 
                            href="{{ route('credits.index') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-coins mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Créditos</span>
                        </div>
                    </a>
                    {{-- <a class="list-group-item list-group-item-action {{ Route::currentRouteName() == 'simulator.index' ? 'active-credits' : '' }}" 
                            href="{{ route('customers.index') }}">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <i class="fas fa-tv mr-2"></i>
                            <span class="menu-collapsed font-weight-bold">Clientes</span>
                        </div>
                    </a> --}}

                    <div class="accordion" id="sidebarAcordion">

                    </div>
                </div>
            </div>
            <div id="page-content-wrapper">
                <nav class="navbar bg-white navbar-expand-md shadow-sm">
                    <div class="container">
                        <a class="navbar-brand logo d-flex align-items-center" href="{{ url('/') }}">
                            <img src="{{ asset('img/welcome/logo.png') }}">
                            {{-- <span>creditsUAM</span> --}}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{-- <img src="{{ asset(Auth::user()->photo) }}" class="img-thumbnail rounded-circle" width="40px"> --}}
                                        {{ Auth::user()->fullname }}
                                    </a>
                    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sweetalert2@9.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            /* - - -*/
            @if (session('message'))
                Swal.fire({
                title: 'Felicitaciones',
                text: '{{ session('message') }}',
                icon: 'success',
                confirmButtonColor: '#1e5f74',
                confirmButtonText: 'Aceptar'
                });
            @endif

            @if (session('message_error'))
                Swal.fire({
                title: 'Error',
                text: '{{ session('message_error') }}',
                icon: 'error',
                confirmButtonColor: '#E10404',
                confirmButtonText: 'Aceptar'
                });
            @endif
            /* - - -*/
            @if (session('error'))
                Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Acceso Denegado',
                text: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2500
                });
            @endif

            $('.btn-delete').click(function(event) {
                Swal.fire({
                    title: 'Esta usted seguro?',
                    text: 'Desea eliminar este registro',
                    icon: 'error',
                    showCancelButton: true,
                    cancelButtonColor: '#d0211c',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#1e5f74',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {

                    if (result.value) {
                        $(this).parent().submit();
                    }
                });
            });

            $('.btn-pay').click(function(event) {
                Swal.fire({
                    title: '¿Deseas registrar el pago?',
                    text: 'Desea pagar esta cuota',
                    icon: 'success',
                    showCancelButton: true,
                    cancelButtonColor: '#d0211c',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#1e5f74',
                    confirmButtonText: 'Aceptar',
                }).then((result) => {

                    if (result.value) {
                        $(this).parent().submit();
                    }
                });
            });



        });

    </script>

</body>

</html>
