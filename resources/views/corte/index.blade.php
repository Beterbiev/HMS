@extends('adminlte::page')

@section('title', 'Cortes')

@section('content_header')
    <h1>Cortes</h1>
@stop

@section('content')
<a href="cortes/create" class="btn btn-primary mb-3">Crear</a>

<table id="cortes" class="table table-striped table-bordered mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Folio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Ingresos</th>
            <th scope="col">Egresos</th>
            <th scope="col">Total</th>
            <th scope="col">Funciones</th>
        </tr>
        
        <tbody>
            
            @foreach ($cortes as $corte)
            <tr>
                <td>{{ $corte->folio }}</td>
                <td>{{ $corte->fecha }}</td>
                <td>{{ $corte->ingresos }}</td>
                <td>{{ $corte->egresos }}</td>
                <td>{{ $corte->total }}</td>
                <td>
                    <form action="{{ route ('cortes.destroy', $corte->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/cortes/{{$corte->id}}/edit" class="btn btn-info mb-1">Editar</a>
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
        $('#cortes').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>   
@stop