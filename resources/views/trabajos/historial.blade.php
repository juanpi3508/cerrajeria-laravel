@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Historial de trabajos</h5>
        <a href="{{ route('trabajos.index') }}" class="btn btn-secondary btn-sm">Volver</a>
    </div>
    @if($trabajos->isEmpty())
        <div class="alert alert-info">No hay trabajos en el historial.</div>
    @endif
    @foreach($trabajos as $trabajo)
        <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-title mb-1">{{ $trabajo->cliente_nombre }}</h6>
                <p class="mb-1"><b>Teléfono:</b> {{ $trabajo->telefono }}</p>
                <p class="mb-1"><b>Dirección:</b> {{ $trabajo->direccion }}</p>
                <p class="mb-1"><b>Tipo de servicio:</b> {{ ucfirst(str_replace('_',' ',$trabajo->tipo_servicio)) }}</p>
                @php
                    $colorEstado = match($trabajo->estado) {
                        'inhabilitado' => 'danger',
                        'cobrado' => 'success',
                        'completado' => 'secondary',
                        default => 'secondary'
                    };
                @endphp
                <span class="badge bg-{{ $colorEstado }}">
					{{ ucfirst(str_replace('_',' ',$trabajo->estado)) }}
				</span>
                <div class="mt-2 text-muted small">
                    Última actualización: {{ $trabajo->updated_at->format('d/m/Y H:i') }}
                </div>
            </div>
        </div>
    @endforeach
@endsection
