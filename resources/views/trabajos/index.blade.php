@extends('layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h5 class="mb-0">Trabajos</h5>
                <a href="{{ route('trabajos.create') }}" class="btn btn-success btn-sm">+ Nuevo</a>
            </div>
            <div class="text-center mb-3">
                <a href="{{ route('trabajos.historial') }}" class="btn btn-outline-dark btn-sm">Ver historial</a>
            </div>
        </div>
    </div>
    @if($trabajos->isEmpty())
        <div class="alert alert-info">No hay trabajos pendientes o en camino.</div>
    @endif
    @foreach($trabajos as $trabajo)
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p><b>Cliente:</b> {{ $trabajo->cliente_nombre }}</p>
                        <p><b>Teléfono:</b> {{ $trabajo->telefono }}</p>
                        <p><b>Dirección:</b> {{ $trabajo->direccion }}</p>
                        <p><b>Tipo de servicio:</b> {{ ucfirst(str_replace('_',' ',$trabajo->tipo_servicio)) }}</p>
                    </div>
                    <div class="text-end">
                        <span class="badge bg-primary d-block mb-1">{{ ucfirst(str_replace('_',' ',$trabajo->estado)) }}</span>
                        <small class="text-muted">{{ $trabajo->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                </div>
                <div class="mt-2 d-flex gap-1">
                    <a href="{{ route('trabajos.edit',$trabajo) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                    <form action="{{ route('trabajos.completar',$trabajo) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-outline-success btn-sm">Completar</button>
                    </form>
                    <form action="{{ route('trabajos.destroy',$trabajo) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este trabajo?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
