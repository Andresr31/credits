@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Ver Cliente</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-7 col-md-8">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información del Ciente</h5></div>
                                <div class="card-body">
                                    <h6 class="card-subtitle font-weight-bold">Nombre completo</h6>
                                    <p class="card-text ml-2 mb-3">{{ $customer->user()->fullname }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Email</h6>
                                    <p class="card-text ml-2 mb-3">{{ $customer->user()->email }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Dirección</h6>
                                    <p class="card-text ml-2 mb-3">{{ $customer->user()->address }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Departamento</h6>
                                    <p class="card-text ml-2 mb-3">{{ $customer->user()->department }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Ciudad</h6>
                                    <p class="card-text ml-2 mb-3">{{ $customer->user()->city }}</p>
                                    <h6 class="card-subtitle font-weight-bold">Télefono</h6>
                                    <p class="card-text ml-2 mb-3">{{ $customer->user()->phone }}</p>
                                    {{-- <h6 class="card-subtitle font-weight-bold">Tipo de usuario</h6> --}}
                                    {{-- <p class="card-text ml-2 mb-3">{{ $customer->user()->roles[0]->name }}</p>
                                    @if ($customer->user()->roles[0]->id == 3)
                                        <h6 class="card-subtitle font-weight-bold">Carrera</h6>
                                        <p class="card-text ml-2 mb-3">{{ $customer->user()->career->name }}</p>
                                        <h6 class="card-subtitle font-weight-bold">Semestre</h6>
                                        <p class="card-text ml-2 mb-3">{{ $customer->user()->semester }}</p>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
