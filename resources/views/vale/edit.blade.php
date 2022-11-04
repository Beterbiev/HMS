@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar vale</h1>
@stop

@section('content')
<form action="/vales/{{$vale->id}}" method="post">
@csrf
@method('put')
  <div class="mb-3">
    <label for="" class="form-label">Folio</label>
    <input id="folio" name="folio" type="number" class="form-control" value="{{$vale->folio}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" value="{{$vale->fecha}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$vale->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$vale->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Medico</label>
    <input id="medico" name="medico" type="text" class="form-control" value="{{$vale->medico}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total</label>
    <input id="total" name="total" type="number" step="0.01" class="form-control" value="{{$vale->total}}">
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