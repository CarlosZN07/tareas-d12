@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalle de Tarea</div>
                <div class="card-body">
                <a href=" {{ route('tarea.edit', $tarea->id) }}" class="btn btn-warning"> Editar tarea </a> <br> <br>
                <form action="{{ route('tarea.destroy', $tarea->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Prioridad</th>
                            <th>Se entrega</th>
                        </tr>
                        <tr>
                            <td>{{ $tarea->id }}</td>
                            <td>{{ $tarea->tarea }}</td>
                            <td>{{ $tarea->descripcion}}</td>
                            <td>{{ $tarea->prioridad}}</td>
                            <td>{{ $tarea->fecha_entrega}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
