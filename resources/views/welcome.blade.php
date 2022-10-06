@extends('componenteMarca.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <title>Registro</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

        body{
            margin: 0;
            font-family:Georgia, 'Times New Roman', Times, serif;
            background: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-register{
            width: 95%;
            max-width: 700px;
            background: white;
            padding: 50px;
        }

        .form__title{
            margin-top:0;
            font-size: 1.7em;
            text-align: center;
        }

        .form__label{
            display: block;
        }

        .form__label{
            width: 30%;
        }

        .container--flex{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
            align-items: center;
        }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
<body>


  
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


    <form action="{{ route('formulario.store') }}" class="form-register" method="POST">
    @csrf
        <h1 class="form__title">REGISTRO DE COMPONENTES</h1>
        <div class="mb-3">
            <label for="" class="from__label">Seleccione componente:</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="componente_id">
            @foreach($componentes as $componente)
                <option value="{{$componente->id}}" type="number"> {{ $componente->nombre }} </option>
            @endforeach
        </select>
        </div>

        <div class="mb-3">
            <label for="" class="from__label">Seleccione marca:</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="marcha_id">
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}" type="number"> {{ $marca->nombre }} </option>
            @endforeach
        </select>
        </div>

        <div class="mb-3">
            <label for="" class="from__label">Ingrese cantidad:</label>
            <input type="number" class="form__input" name="cantidad">
        </div>

        <div class="input-group">
            <span class="input-group-text">Comentario</span>
            <textarea class="form-control" aria-label="With textarea" name="comentario"></textarea>
        </div>
        <br>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
    </body>
</html>
@endsection