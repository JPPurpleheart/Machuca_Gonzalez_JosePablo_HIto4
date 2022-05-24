<!-- Vista de los datos de la prestamo -->

@extends('layouts.app')
@section('content')
<div class="container">
    
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<table class="table text-center">
    
    <thead class="table-primary text-dark">
        <tr>
            <th>ID Prestamo</th>
            <th>ISBN</th>
            <th>ID Usuario</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Editar Préstamo</th>
            <th>Borrar Préstamo</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $prestamos as $prestamo )
        <tr>
            <td>{{ $prestamo->id_prestamo }}</td>
            <td>{{ $prestamo->isbn }}</td>
            <td>{{ $prestamo->id_usuario }}</td>
            <td>{{ $prestamo->fecha_inicio }}</td>
            <td>{{ $prestamo->fecha_fin }}</td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('/prestamo/'.$prestamo->id_prestamo.'/edit') }}">Editar</a></button>

            </td>
            <td>
                
                <button class="col-12 rounded">
                    
                    <form action="{{ url('/prestamo/'.$prestamo->id_prestamo) }}" class="d-inline" method="post">

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

<button class="col-12 p-3 m-3 rounded"><a href="{{ url('prestamo/create') }}">Añadir Préstamo</a></button>

</div>
@endsection