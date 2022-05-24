<!-- Vista de los datos de la ropero -->

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
            <th>Color</th>
            <th>Estado</th>
            <th>Categoria</th>
            <th>Talla</th>
            <th>ID Usuario</th>
            <th>Reservar Prenda</th>
            <th>Eliminar Prenda</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $roperos as $ropero )
        <tr>
            <td>{{ $ropero->nombre }}</td>
            <td>{{ $ropero->color }}</td>
            <td>{{ $ropero->estado }}</td>
            <td>{{ $ropero->categoria }}</td>
            <td>{{ $ropero->talla }}</td>
            <td>{{ $ropero->id_usuario }}</td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('/ropero/'.$ropero->id_ropa.'/edit') }}">Reservar</a></button>

            </td>
            <td>
                
                <button class="col-12 rounded">
                    
                    <form action="{{ url('/ropero/'.$ropero->id_ropa) }}" class="d-inline" method="post">

                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="text-primary" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                    </form>
                
                </button>

            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

<button class="col-12 p-3 m-3 rounded"><a href="{{ url('ropero/create') }}">Añadir Prenda</a></button>

</div>
@endsection