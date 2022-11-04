@extends('adminlte::page')

@section('title', 'Certificados')

@section('content_header')
    <h1>Certificados de nacimiento</h1>
@stop

@section('content')
<a href="certificados/create" class="btn btn-primary mb-3">Crear</a>

<table id="certificados" class="table table-striped table-bordered mt-4">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">Folio</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nombre</th>
            <th scope="col">Medico</th>
            <th scope="col">Funciones</th>
        </tr>
        
        <tbody>
            
            @foreach ($certificados as $certificado)
            <tr>
                <td>{{ $certificado-> folio}}</td>
                <td>{{ $certificado->fecha }}</td>
                <td>{{ $certificado->nombre }}</td>
                <td>{{ $certificado->medico }}</td>
                <td>
                    <form action="{{ route ('certificados.destroy', $certificado->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/certificados/{{$certificado->id}}/edit" class="btn btn-info mb-1">Editar</a>
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
        $('#certificados').DataTable({
            "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
    </script>   
@stop