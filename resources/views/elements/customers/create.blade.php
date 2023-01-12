@extends('layouts.app_sidebar')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Crear Cliente</h3>
            <hr />

            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-10 col-md-11">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información del cliente</h5></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('customers.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="fullname">Nombre completo <small style="color: red">*</small></label>
                                                <input id="fullname" type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                                    value="{{ old('fullname') }}" placeholder="Nombre" autocomplete="Nombre completo"
                                                    required autofocus />

                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email">Email <small style="color: red">*</small></label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" placeholder="Email" autocomplete="email"
                                                    required />

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label for="document_type">Tipo de documento</label>
                                                <select id="document_type" class="form-control @error('document_type') is-invalid @enderror"
                                                    name="document_type" >
                                                    <option value="-1">
                                                        Seleccione un tipo de documento...
                                                    </option>
                                                    
                                                    <option value="TI">
                                                        Tarjeta de Identidad
                                                    </option>
                                                    <option value="CC">
                                                        Cédula de Ciudadanía
                                                    </option>
                                                    <option value="CE">
                                                        Cédula extranjera
                                                    </option>
                                                    <option value="Otro">
                                                        Otro
                                                    </option>
                                                   
                                                </select>
                                                @error('document_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="document_number">Número de documento</label>
                                                <input id="document_number" type="text"
                                                    class="form-control @error('document_number') is-invalid @enderror" name="document_number"
                                                    value="{{ old('document_number') }}" placeholder="Documento" autocomplete="document_number"
                                                     />

                                                @error('document_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="address">Dirección <small style="color: red">*</small></label>
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                                    value="{{ old('address') }}" placeholder="Dirección" autocomplete="address"
                                                    required />

                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone">Télefono <small style="color: red">*</small></label>
                                                <input id="phone" type="text"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ old('phone') }}" placeholder="Télefono" autocomplete="phone"
                                                    required />

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="city">Ciudad <small style="color: red">*</small></label>
                                                <input id="city" type="text"
                                                    class="form-control @error('city') is-invalid @enderror" name="city"
                                                    value="{{ old('city') }}" placeholder="Ciudad" autocomplete="city"
                                                    required />

                                                @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="department">Departamento <small style="color: red">*</small></label>
                                                <input id="department" type="text"
                                                    class="form-control @error('department') is-invalid @enderror" name="department"
                                                    value="{{ old('department') }}" placeholder="Departamento" autocomplete="department"
                                                    required />

                                                @error('department')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <label for="password">{{ __('Contraseña') }} <small style="color: red">*</small></label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" placeholder="Contraseña" required
                                                    autocomplete="new-password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="password-confirm">{{ __('Confirmar contraseña') }} <small style="color: red">*</small></label>
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" placeholder="Confirmar contraseña" required
                                                    autocomplete="new-password">
                                            </div>
                                        </div>
                                        

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-novac btn-block">
                                                    <p class="d-inline">Crear</p>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
