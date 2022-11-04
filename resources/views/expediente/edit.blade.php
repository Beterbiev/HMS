@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar expediente</h1>
@stop

@section('content')
<form action="/expedientes/{{$expediente->id}}" method="post">
    @csrf    
    @method('put')
    <div class="mb-3">
    <label for="" class="form-label">No. exp</label>
    <input id="exp" name="exp" type="number" class="form-control" value="{{$expediente->exp}}">  
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$expediente->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Diagnostico</label>
    <input id="diagnostico" name="diagnostico" type="text" class="form-control" value="{{$expediente->diagnostico}}">
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
    <label for="" class="form-label">Medico</label>
    <input id="medico" name="medico" type="text" class="form-control" value="{{$expediente->medico}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">No. hab</label>
    <input id="num_habitacion" name="num_habitacion" type="number" class="form-control" value="{{$expediente->num_habitacion}}">
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