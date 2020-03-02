@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de tareas</div>
                <div class="card-body">
                    <a href="{{ route('tarea.create') }}" class="btn btn-success"> Nueva tarea </a> <br> <br>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                        </tr>
                        @foreach ($tareas as $tarea)
                        <tr>
                            <td>{{ $tarea->id }}</td>
                            <td><a href="{{ route('tarea.show', $tarea->id) }}">{{ $tarea->tarea }}</a></td>
                            <td>{{ $tarea->descripcion}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
