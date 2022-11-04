@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')
    <h1>Editar corte</h1>
@stop

@section('content')
<form action="/cortes/{{$corte->id}}" method="post">
@csrf
@method('put')
  <div class="mb-3">
    <label for="" class="form-label">Folio</label>
    <input id="folio" name="folio" type="number" class="form-control" value="{{$corte->folio}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha</label>
    <input id="fecha" name="fecha" type="date" class="form-control" value="{{$corte->fecha}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ingresos</label>
    <input id="ingresos" name="ingresos" type="number" step="0.01" class="form-control" value="{{$corte->ingresos}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Egresos</label>
    <input id="egresos" name="egresos" type="number" step="0.01" class="form-control" value="{{$corte->egresos}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Total</label>
    <input id="total" name="total" type="number" step="0.01" class="form-control" value="{{$corte->total}}">
  </div>
  

  <a href="/cortes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop