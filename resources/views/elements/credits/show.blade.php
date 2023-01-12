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
            <h3 class="d-inline align-middle">Ver Crédito</h3>
            <hr />
            <div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-10 col-md-11">
                        <div class="tab-pane fade show active" id="list-0" role="tabpanel" aria-labelledby="list-0-list">
                            <div class="card shadow bg-white rounded">
                                <div class="card-header text-center"><h5>Información del crédito</h5></div>
                                <div class="card-body">
                                    <div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="customer">Cliente</label>
                                                <input id="customer" type="text"
                                                    class="form-control @error('customer') is-invalid @enderror" name="customer"
                                                    value="{{ $credit->customer }}" 
                                                    required disabled/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="total_amount">Valor Total</label>
                                                <input id="total_amount" type="text"
                                                    class="form-control @error('total_amount') is-invalid @enderror" name="total_amount"
                                                    value="S/. {{ $credit->total_amount }}" 
                                                    required disabled/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="partial_amount">Valor Restante</label>
                                                <input id="partial_amount" type="text"
                                                    class="form-control @error('partial_amount') is-invalid @enderror" name="partial_amount"
                                                    value="S/. {{ $credit->partial_amount }}" 
                                                    required disabled/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="number_fees">Cuotas Restantes</label>
                                                <input id="number_fees" type="text"
                                                    class="form-control @error('number_fees') is-invalid @enderror" name="number_fees"
                                                    value="{{ $credit->number_fees }}" 
                                                    required disabled/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="fees_amount">Valor Cuota</label>
                                                <input id="fees_amount" type="text"
                                                    class="form-control @error('fees_amount') is-invalid @enderror" name="fees_amount"
                                                    value="S/. {{ $credit->fees_amount }}" 
                                                    required disabled/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="created">Fecha de creación</label>
                                                <input id="created" type="text"
                                                    class="form-control @error('created') is-invalid @enderror" name="created"
                                                    value="{{ $credit->created }}" 
                                                    required disabled/>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="date_lastpay">Fecha último pago</label>
                                                @if($credit->date_lastpay)
                                                <input id="date_lastpay" type="text"
                                                    class="form-control @error('date_lastpay') is-invalid @enderror" name="date_lastpay"
                                                    value="{{ $credit->date_lastpay }}" 
                                                    required disabled/>
                                                @else
                                                <input id="date_lastpay" type="text"
                                                    class="form-control @error('date_lastpay') is-invalid @enderror" name="date_lastpay"
                                                    value="No registrado" 
                                                    required disabled/>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label>Estado</label>
                                            </div>
                                            <div class="col-md-12">
                                                
                                                @switch($credit->status)
                                                @case("active")
                                                    <input class="alert alert-warning" type="text" class="form-control" value="Activo" disabled>
                                                    @break
                                                @case("pending")
                                                    <input class="alert alert-info" type="text" class="form-control" value="Pendiente" disabled>
                                                    @break
                                                @case("in_arrears")
                                                    <input class="alert alert-danger" type="text" class="form-control" value="En Mora" disabled>
                                                    @break
                                                @case("paid_out")
                                                    <input class="alert alert-success" type="text" class="form-control" value="Pagado" disabled>
                                                    @break
                                                @default
                                                    
                                            @endswitch

                                            </div>
                                        </div>
                                        <hr>

                                        @if ($credit->number_fees >0)
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <a data-toggle="collapse" href="#collapseCode" role="button" aria-expanded="false" aria-controls="collapseCode" class="btn btn-credits btn-block">
                                                        <p class="d-inline">Abonar</p>
                                                    </a>
                                                </div>
                                                <div class="collapse col-12 py-2" id="collapseCode" class="mt-3">
                                                    <div class="py-1">
                                                        <form action="{{ route('fees.pay') }}" method="POST" class="d-flex">
                                                            @csrf
                                                            <input type="hidden" name="credit_id" value="{{ $credit->id }}">
                                                            <select id="number_fees" class="form-control @error('number_fees') is-invalid @enderror"
                                                                name="number_fees" required>
                                                                <option value="-1">
                                                                    Seleccione un número de cuotas...
                                                                </option>
                                                                @foreach ($credit->fees as $fee)
                                                                    <option value="{{ $fee }}">{{ $fee }}</option>
                                                                @endforeach
                                                            </select>
                                                            <button class="btn btn-credits" type="submit">Registrar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                
                                            </div>        
                                        @endif                                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-12">
                                                <a href="{{ route('credits.index') }}" class="btn btn-credits btn-block">
                                                    <p class="d-inline">Volver</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
