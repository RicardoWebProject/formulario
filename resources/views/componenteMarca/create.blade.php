@extends('componenteMarca.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar nuevo Componente</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('formulario.index') }}"> Atrás</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('formulario.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Seleccione Componente:</strong>
                <select name="componente_id" id="cm">
                    @foreach($componentes as $componente)
                    <option value="{{$componente->id}}" type="number"> {{ $componente->nombre }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Seleccione Marca:</strong>
                <select name="marca_id" id="mc">
                    @foreach($marcas as $marca)
                    <option value="{{$marca->id}}" type="number"> {{ $marca->nombre }} </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ingrese cantidad:</strong>
                <input type="number" name="cantidad">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Comentario:</strong>
                <textarea class="form-control" style="height:150px" name="comentario" placeholder="Comentario..."></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection