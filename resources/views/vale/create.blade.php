@extends('adminlte::page')

@section('title', 'Registrar')

@section('content_header')
    <h1>Crear vale</h1>
@stop

@section('content')
<form action="/vales" method="post">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Folio</label>
    <input id="folio" name="folio" type="number" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Medico</label>
    <input id="medico" name="medico" type="text" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total</label>
    <input id="total" name="total" type="number" step="0.01" class="form-control" tabindex="6">
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