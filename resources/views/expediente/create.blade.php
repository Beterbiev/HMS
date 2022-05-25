@extends('layouts.base');

@section('content')
<h2>Crear registros</h2>

<form action="/expedientes" method="post">
@csrf
  <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="id" name="id" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" tabindex="5">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de ingreso</label>
    <input id="fecha_ingreso" name="fecha_ingreso" type="date" class="form-control" tabindex="6">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de egreso</label>
    <input id="fecha_egreso" name="fecha_egreso" type="date" class="form-control" tabindex="7">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Peso</label>
    <input id="peso" name="peso" type="number" class="form-control" tabindex="8">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Altura</label>
    <input id="altura" name="altura" type="number" class="form-control" tabindex="9">
  </div>

  <a href="/expedientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection