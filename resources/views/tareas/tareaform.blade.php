@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear nueva tarea</div>
                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(isset($tarea))
                {!! Form::model($tarea, ['route' => ['tarea.update', $tarea->id], 'method' => 'PATCH']) !!}
                    {{--<form action="{{ route('tarea.update', $tarea->id) }}" method="POST">--}}
                    @method('PATCH')
                @else
                    {!! Form::open(['route' => 'tarea.store']) !!}
                    {{--<form action="{{ route('tarea.store') }}" method="POST">--}}
                @endif
                   {{-- @csrf --}}
                        <div class="form-group">
                            {!! Form::label('tarea', 'Título de tarea'); !!}
                           {{--<label for="tituloTarea">Título de tarea</label>--}}
                           {!! Form::text('tarea', null, ['class'=> 'form-control', 'id' => 'tarea', 'required']) !!}
                           {{--<input type="text" class="form-control" name="tarea" value="{{ $tarea->tarea ?? '' }}" required>--}}
                        </div>
                        <div class="form-group">
                            <label for="descripcionTarea">Descripción</label>
                            {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5']) !!}
                            {{--<textarea class="form-control" name="descripcion" rows="5">{{ $tarea->descripcion ?? '' }}</textarea> --}}
                        </div>
                        <div class="form-group">
                            <label for="fechaEntrega">Fecha de entrega</label>
                            {!! Form::date('fecha_entrega', null, ['class' => 'form-control']) !!}
                            {{--<input type="date" class="form-control" name="fecha_entrega" value="{{ $tarea->fecha_entrega ?? '' }}"> --}}
                        </div>
                        <div class="form-group">
                            <label for="prioridadTarea">Prioridad</label>
                            {!! Form::select('prioridad', ['1' => 'Alta', '2' => 'Media', '3' => 'Baja'], null, ['class' => 'form-control']) !!}
                            {{--<select class="form-control" name="prioridad">
                              <option value="1" {{ isset($tarea) && $tarea->prioridad == 1 ? 'selected' : '' }}>Alta (1)</option>
                              <option value="2" {{ isset($tarea) && $tarea->prioridad == 2 ? 'selected' : '' }}>Media (2)</option>
                              <option value="3" {{ isset($tarea) && $tarea->prioridad == 3 ? 'selected' : '' }}>Baja (3)</option>
                            </select>--}}
                        </div>
                        {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                        {{--<button type="submit" class="btn btn-primary">Guardar</button>--}}
                    {!! Form::close() !!}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
