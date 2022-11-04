@extends('adminlte::page')

@section('title', 'Registrar')

@section('content_header')
    <h1>Crear expediente</h1>
@stop

@section('content')
<form action="/expedientes" method="post">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">No. exp</label>
    <input id="exp" name="exp" type="number" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Diagnostico</label>
    <input id="diagnostico" name="diagnostico" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de ingreso</label>
    <input id="fecha_ingreso" name="fecha_ingreso" type="date" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de egreso</label>
    <input id="fecha_egreso" name="fecha_egreso" type="date" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Medico</label>
    <input id="medico" name="medico" type="text" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">No. hab</label>
    <input id="num_habitacion" name="num_habitacion" type="number" class="form-control" tabindex="7">
  </div>

  <a href="/expedientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop