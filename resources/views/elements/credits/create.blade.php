@extends('layouts.app_home')

@section('title', 'Créditos')

@section('content')
    <main class="container-fluid">
        <!-- Page Content -->
        <div class="my-3">
            <button class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2" id="menu-toggle"
                onclick="toggledMenu()">
                <i class="fa fa-bars"></i>
            </button>
            <h3 class="d-inline align-middle">Crear Crédito</h3>
            <hr />
            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-10 col-md-11">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información del crédito</h5></div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('credits.store') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="total_amount">Valor <small style="color: red">*</small></label>
                                                <input id="total_amount" type="text"
                                                    class="form-control @error('total_amount') is-invalid @enderror" name="total_amount"
                                                    value="{{ old('total_amount') }}" placeholder="Monto" 
                                                    required autofocus data-type='currency']/>

                                                @error('total_amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="number_fees">Número de Cuotas</label>
                                                
                                                <input id="number_fees" type="text"
                                                    class="form-control @error('number_fees') is-invalid @enderror" name="number_fees"
                                                    value="{{ $main->default_numfees }}" 
                                                    disabled/>

                                                @error('number_fees')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- @if (count($customers) >0)
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="customer_id">Cliente Existente</label>
                                                <select id="customer_id" class="form-control @error('customer_id') is-invalid @enderror"
                                                    name="customer_id" >
                                                    <option value="-1">
                                                        Seleccionar un cliente...
                                                    </option>
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}">
                                                            {{ $customer->user()->fullname }}
                                                        </option>
                                                    @endforeach
                                                   
                                                </select>

                                                @error('customer_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        @endif --}}
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>Cliente</label>
                                            </div>
                                            <div class="col-md-4 py-1">
                                                <input id="fullname" type="text"
                                                    class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                                    value="{{ old('fullname') }}" placeholder="Nombre Completo" 
                                                    required/>

                                                @error('fullname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 py-1">
                                                
                                                <input id="address" type="text"
                                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                                    value="{{ old('address') }}" placeholder="Dirección" 
                                                    required/>

                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-4 py-1">
                                                <input id="phone" type="text"
                                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                                    value="{{ old('phone') }}" placeholder="Télefono" 
                                                    required/>

                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="created_at">Fecha de solicitud</label>
                                                
                                                <input id="created_at" type="date"
                                                    class="form-control @error('created_at') is-invalid @enderror" name="created_at"
                                                    value="{{ old('created_at') }}" placeholder="Fecha" 
                                                    required/>
                                                @error('created_at')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-credits btn-block">
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
