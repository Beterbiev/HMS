@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar certificado de nacimiento</h1>
@stop

@section('content')
<form action="/certificados/{{$certificado->id}}" method="post">
@csrf
@method('put')
  <div class="mb-3">
    <label for="" class="form-label">Folio</label>
    <input id="folio" name="folio" type="number" class="form-control" value="{{$certificado->folio}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" value="{{$certificado->fecha}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$certificado->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Medico</label>
    <input id="medico" name="medico" type="text" class="form-control" value="{{$certificado->medico}}">
  </div>

  <a href="/vales" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop