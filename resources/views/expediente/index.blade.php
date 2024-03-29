@extends('adminlte::page')

@section('title', 'Expedientes')

@section('content_header')
    <h1>Expedientes</h1>
@stop

@section('content')
<a href="expedientes/create" class="btn btn-primary mb-3">Crear</a>

<table id="expedientes" class="table table-striped table-bordered mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">No. exp</th>
            <th scope="col">Nombre</th>
            <th scope="col">Diagnostico</th>
            <th scope="col">Fecha de ingreso</th>
            <th scope="col">Fecha de egreso</th>
            <th scope="col">Medico</th>
            <th scope="col">No. hab</th>
            <th scope="col">Funciones</th>
        </tr>
        
        <tbody>
            
            @foreach ($expedientes as $expediente)
            <tr>
                <td>{{ $expediente->exp }}</td>
                <td>{{ $expediente->nombre }}</td>
                <td>{{ $expediente->diagnostico }}</td>
                <td>{{ $expediente->fecha_ingreso }}</td>
                <td>{{ $expediente->fecha_egreso }}</td>
                <td>{{ $expediente->medico }}</td>
                <td>{{ $expediente->num_habitacion }}</td>
                <td>
                    <form action="{{ route ('expedientes.destroy', $expediente->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/expedientes/{{$expediente->id}}/edit" class="btn btn-info mb-1">Editar</a>
                    <button class="btn btn-danger mb-1">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>
@stop

@section('css')
<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    
    <script>
        $(document).ready(function () {
        $('#expedientes').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>   
@stop