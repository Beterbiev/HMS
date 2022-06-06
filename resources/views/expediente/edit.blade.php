@extends('adminlte::page')

@section('title', 'HMS')

@section('content_header')
    <h1>Editar expediente</h1>
@stop

@section('content')
<form action="/expedientes/{{$expediente->id}}" method="post">
    @csrf    
    @method('put')
    <div class="mb-3">
    <label for="" class="form-label">Id</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$expediente->id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$expediente->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$expediente->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" value="{{$expediente->direccion}}"direccion>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Telefono</label>
    <input id="telefono" name="telefono" type="text" class="form-control" value="{{$expediente->telefono}}"telefono>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de ingreso</label>
    <input id="fecha_ingreso" name="fecha_ingreso" type="date" class="form-control" value="{{$expediente->fecha_ingreso}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha de egreso</label>
    <input id="fecha_egreso" name="fecha_egreso" type="date" class="form-control" value="{{$expediente->fecha_egreso}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Peso</label>
    <input id="peso" name="peso" type="number" class="form-control" value="{{$expediente->peso}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Altura</label>
    <input id="altura" name="altura" type="number" class="form-control" value="{{$expediente->altura}}">
  </div>

  <a href="/expedientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
  
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop