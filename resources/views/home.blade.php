@extends('layouts.app_home')
@section('title', 'Home')
@section('content')
    <main class="container-fluid bg-light">
        <!-- Page Content -->
        <div class="my-3 bg-light" style="background-color: white">
            <div class="row container">
                <div class="mr-auto d-inline">
                    <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                        onclick="toggledMenu()">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h3 class="d-inline align-middle">Inicio</h3>
                </div>
            </div>
            <hr />

            <div>
                @include('layouts.alerts')
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            {{-- <div class="card"> --}}
                            {{-- <img src="{{ asset('img/elements/bg-dashboard.svg') }}" width="300px" class="my-2 img-top-card"> --}}
                            <div class="row">
                                

                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="{{ asset('img/elements/bg-credits.svg') }}" width="250px" height="200px"
                                            class="my-2 img-top-card img-module" height="154px">
                                        <div class="card-body">
                                            <a href="{{ route('credits.index') }}" class="btn btn-block btn-credits">
                                                <i class="fas fa-coins pr-2"></i>
                                                Créditos
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="{{ asset('img/elements/bg-customers.svg') }}" width="250px"
                                            height="200px" class="my-2 img-top-card img-module">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-credits">
                                                <i class="fa fa-users pr-2"></i>
                                                Clientes
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="{{ asset('img/elements/bg-simulator.svg') }}" width="250px"
                                            height="200px" class="my-2 img-top-card img-module" height="154px">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-credits">
                                                <i class="fas fa-tv pr-2"></i>
                                                Simulador
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{--  --}}
                                {{-- <div class="col-md-4 mt-3">
                                    <div class="card">
                                        <img src="{{ asset('img/elements/bg-capitalizations.svg') }}" width="250px" height="200px"
                                            class="my-2 img-top-card img-module" height="154px">
                                        <div class="card-body">
                                            <a href="#" class="btn btn-block btn-credits">
                                                <i class="fas fa-coins pr-2"></i>
                                                Pagos
                                            </a>
                                        </div>
                                    </div>
                                </div> --}}
                                {{--  --}}
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>

                </div>

                {{-- <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach ($rooms as $room)
                                <div class="slider" style="background-image: url({{ asset($room->image) }})">
                                    <p class="text-center">
                                        <strong class="pb-2">{{ $room->name }}</strong><br>
                                        {{ $room->description }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="justify-content-center text-center ">
                    <img src="{{ asset('img/elements/logo_uam.png') }}"><br>
                    <small class="my-3">&copy; Copyright <strong><span>UAM</span></strong>. All Rights Reserved</small> -
                    <small>Diseñada por <strong> Semillero de Ingeniería de Software</strong></small>
                </div> --}}
            </div>
        </div>
    </main>
@endsection
