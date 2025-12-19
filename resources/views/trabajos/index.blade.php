@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Trabajos</h5>
        <a href="{{ route('trabajos.create') }}" class="btn btn-success btn-sm">
            + Nuevo
        </a>
    </div>
    @if($trabajos->isEmpty())
        <div class="alert alert-info">
            No hay trabajos pendientes o en camino.
        </div>
    @endif
    @foreach($trabajos as $trabajo)
        <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-title mb-1">
                   <p> <b>Cliente: </b>{{ $trabajo->cliente_nombre }}</p>
                </h6>
                <p class="mb-1">
                    <p><b>Teléfono: </b>{{ $trabajo->telefono }}
                </p>
                <p class="mb-1">
                    <p><b>Dirección: </b>{{ $trabajo->direccion }}
                </p>
                <p class="mb-1">
                    <p><b>Tipo de servicio: </b>{{ $trabajo->tipo_servicio }}
                </p>
                <span class="badge bg-primary">
                {{ ucfirst(str_replace('_', ' ', $trabajo->estado)) }}
            </span>
                <div class="mt-2">
                    <a href="{{ route('trabajos.edit', $trabajo) }}"
                       class="btn btn-outline-primary btn-sm">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
