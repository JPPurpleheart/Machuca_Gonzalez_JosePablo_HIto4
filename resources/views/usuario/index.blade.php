<!-- Vista de los datos de la libro -->

@extends('layouts.app')
@section('content')
<div class="container">
    
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<table class="table text-center">
    
    <thead class="table-primary text-dark">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Nº de Miembros de la Unidad Familiar</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Preferencias</th>
            <th>Editar Usuario</th>
            <th>Borrar Usuario</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $usuarios as $usuario )
        <tr>
            @if($usuario->tipo=='usuario_despensa')
            <td>{{ $usuario -> nombre }}</td>
            <td>{{ $usuario -> apellidos }}</td>
            <td>{{ $usuario -> num_miembros }}</td>
            <td>{{ $usuario -> email }}</td>
            <td>{{ $usuario -> telefono }}</td>
            <td>{{ $usuario -> preferencia }}</td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('/usuario/'.$usuario->id.'/edit') }}">Editar</a></button>

            </td>
            <td>
                
                <button class="col-12 rounded">
                    
                    <form action="{{ url('/usuario/'.$usuario->id) }}" class="d-inline" method="post">

                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="text-primary" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                    </form>
                
                </button>

            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
    
</table>

<button class="col-12 p-3 m-3 rounded"><a href="{{ url('usuario/create') }}">Añadir Usuarios</a></button>

</div>
@endsection