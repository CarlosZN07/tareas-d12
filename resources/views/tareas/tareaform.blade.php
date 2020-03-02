@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva tarea</div>
                <div class="card-body">
                @if(isset($tarea))
                    <form action="{{ route('tarea.update', $tarea->id) }}" method="POST">
                    @method('PATCH')
                @else
                    <form action="{{ route('tarea.store') }}" method="POST">
                @endif
                    @csrf
                        <div class="form-group">
                           <label for="tituloTarea">Título de tarea</label>
                           <input type="text" class="form-control" name="tarea" value="{{ $tarea->tarea ?? '' }}" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcionTarea">Descripción</label>
                            <textarea class="form-control" name="descripcion" rows="5">{{ $tarea->descripcion ?? '' }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="fechaEntrega">Fecha de entrega</label>
                            <input type="date" class="form-control" name="fecha_entrega" value="{{ $tarea->fecha_entrega ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="prioridadTarea">Prioridad</label>
                            <select class="form-control" name="prioridad">
                              <option value="1" {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : '' }}>Alta (1)</option>
                              <option value="2" {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' : '' }}>Media (2)</option>
                              <option value="3" {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : '' }}>Baja (3)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
