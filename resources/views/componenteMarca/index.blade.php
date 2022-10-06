@extends('componenteMarca.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Formulario CRUD: Componente Marca</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('formulario.create') }}"> Registro de Componentes</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Componente</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Comentario</th>
        </tr>
        @foreach ($components as $componenteMarcas)
        <tr>
            <td>{{ $componenteMarcas->id }}</td>
            <td>{{ $componenteMarcas->componente_id }}</td>
            <td>{{ $componenteMarcas->marca_id }}</td>
            <td>{{ $componenteMarcas->cantidad }}</td>
            <td>{{ $componenteMarcas->comentario }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('formulario.edit',$componenteMarcas->id) }}">Edit</a>
                <form action="{{ route('formulario.destroy', $componenteMarcas->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
@endsection