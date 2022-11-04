@extends('adminlte::page')

@section('title', 'Vales')

@section('content_header')
    <h1>Vales</h1>
@stop

@section('content')
<a href="vales/create" class="btn btn-primary mb-3">Crear</a>

<table id="vales" class="table table-striped table-bordered mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Folio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Medico</th>
            <th scope="col">Total</th>
            <th scope="col">Funciones</th>
        </tr>
        
        <tbody>
            
            @foreach ($vales as $vale)
            <tr>
                <td>{{ $vale->folio }}</td>
                <td>{{ $vale->fecha }}</td>
                <td>{{ $vale->nombre }}</td>
                <td>{{ $vale->descripcion }}</td>
                <td>{{ $vale->medico }}</td>
                <td>{{ $vale->total }}</td>
                <td>
                    <form action="{{ route ('vales.destroy', $vale->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/vales/{{$vale->id}}/edit" class="btn btn-info mb-1">Editar</a>
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
        $('#vales').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>   
@stop