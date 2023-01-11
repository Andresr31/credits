<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- favicon --}}
    <link href="{{asset('favicon.png')}}" rel="icon">
    <link href="{{asset('img/welcome/favicon.png')}}" rel="apple-touch-icon">
    
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{asset('css/style.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    {{-- <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('vendor/aos/aos.css')}}" rel="stylesheet"> --}}
    {{-- <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="{{asset('js/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <main class="py-5">
            @yield('content')
        </main>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/aos/aos.js') }}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js') }}"></script>

</body>
</html>
