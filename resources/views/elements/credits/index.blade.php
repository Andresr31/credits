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
            <h3 class="d-inline align-middle">Créditos</h3>
            <hr/>
            @if (count($credits) >0)
            <div>
                <div class="card bg-white rounded">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Cliente</th>
                                        <th>Valor Total</th>
                                        <th>Valor Restante</th>
                                        <th>Cuotas Restantes</th>
                                        <th>Estado</th>
                                        <th>Creado en</th>
                                        <th class="text-muted">Acciones</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($credits as $credit)
                                        <tr>
                                            <td>{{ $credit->id }}</td>
                                            <td>{{ $credit->customer()->fullname }}</td>
                                            <td>S/. {{ $credit->total_amount }}</td>
                                            <td>S/. {{ $credit->partial_amount }}</td>
                                            <td>{{ $credit->number_fees }}</td>
                                            @switch($credit->status)
                                                @case("active")
                                                    <td class="alert alert-warning">Activo</td>
                                                    @break
                                                @case("pending")
                                                    <td class="alert alert-info">Pendiente</td>
                                                    @break
                                                @case("in_arrears")
                                                    <td class="alert alert-danger">En Mora</td>
                                                    @break
                                                @case("paid_out")
                                                    <td class="alert alert-success">Pagado</td>
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                            <td>{{ $credit->created }}</td>
                                            <td>
                                                {{-- <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="Editar"
                                                    href="{{ route('credits.edit', $credit) }}">
                                                    <span>
                                                        <i class="fas fa-pen" aria-hidden="true"></i>
                                                    </span>
                                                </a> --}}
                                                <a class="btn btn-link d-inline p-0 mr-2 text-decoration-none"
                                                    data-toggle="tooltip" data-placement="top" title="ver"
                                                    href="{{ route('credits.show', $credit) }}">
                                                    <span>
                                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                                    </span>
                                                </a>
                                                <form action="{{route('credits.destroy',$credit)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-link d-inline p-0 mr-2 text-decoration-none btn-delete"
                                                        data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                        <span>
                                                            <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="alert alert-warning" role="alert">
                    Aún no hay Creditos registrados
                </div> 
            @endif
        </div>
    </main>
@endsection


<a class="float btn btn-credits rounded-pill float-right" href="{{ route('credits.create') }}" role="button"
    data-toggle="tooltip" data-placement="top" title="Crear usuario">
    <i class="fas fa-plus my-float"></i>
</a>
