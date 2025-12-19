@extends('layouts.app')
@section('content')
    <h5 class="mb-3">Editar trabajo</h5>
    <form action="{{ route('trabajos.update', $trabajo) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre del cliente</label>
            <input type="text"
                   name="cliente_nombre"
                   class="form-control"
                   value="{{ old('cliente_nombre', $trabajo->cliente_nombre) }}"
                   required>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <input type="text"
                   name="telefono"
                   class="form-control"
                   value="{{ old('telefono', $trabajo->telefono) }}"
                   required>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <input type="text"
                   name="direccion"
                   class="form-control"
                   value="{{ old('direccion', $trabajo->direccion) }}"
                   required>
        </div>
        <div class="mb-3">
            <select name="tipo_servicio" class="form-select" required>
                <option value="">Seleccione un servicio</option>
                @foreach(\App\Models\Trabajo::TIPOS_SERVICIO as $tipo)
                    <option value="{{ $tipo }}" {{ old('tipo_servicio',$trabajo->tipo_servicio)===$tipo?'selected':'' }}>
                        {{ ucfirst(str_replace('_',' ',$tipo)) }}
                    </option>
                @endforeach
            </select>

        </div>
        <div class="mb-3">
            <label class="form-label">Estado</label>
            <select name="estado" class="form-select" required>
                @php
                    $estados = ['pendiente', 'en_camino', 'completado', 'cobrado'];
                @endphp
                @foreach($estados as $estado)
                    <option value="{{ $estado }}"
                        {{ old('estado', $trabajo->estado) === $estado ? 'selected' : '' }}>
                        {{ ucfirst(str_replace('_', ' ', $estado)) }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">
                Guardar cambios
            </button>
            <a href="{{ route('trabajos.index') }}" class="btn btn-secondary">
                Volver
            </a>
        </div>
    </form>
@endsection
