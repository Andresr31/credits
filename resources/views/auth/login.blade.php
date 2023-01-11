@extends('layouts.app')

@section('title', 'Iniciar sesión')


@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow p-2 bg-white rounded">
                <img src="{{ asset('img/elements/login.svg') }}" width="300px" class="my-2 img-top-card">
                <div class="card-header text-uppercase text-center">
                    <h5>
                        <i class="fa fa-user-lock"></i> 
                        Iniciar sesión 
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-credits btn-block text-uppercase">
                                Entrar
                                <i class="fa fa-arrow-circle-right"></i> 
                            </button>

                            {{-- <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        ¿Olvidó su contraseña?
                                    </a>
                                @endif
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
