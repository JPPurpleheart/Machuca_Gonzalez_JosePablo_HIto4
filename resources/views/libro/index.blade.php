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
            <th>ISBN</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Género</th>
            <th>Recomendación Generacional</th>
            <th>Editorial</th>
            <th>Añadir a Prestamo</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $libros as $libro )
        <tr>
            <td>{{ $libro -> isbn }}</td>
            <td>{{ $libro -> titulo }}</td>
            <td>{{ $libro -> autor }}</td>
            <td>{{ $libro -> genero }}</td>
            <td>{{ $libro -> recomendacion_generacional }}</td>
            <td>{{ $libro -> id_editorial }}</td>
            <td><button class="col-12 rounded"><a href="{{ url('prestamo/create?$isbn='.$libro->isbn) }}" class=" text-primary">Añadir</a></button></td>
        </tr>
        @endforeach
    </tbody>
    
</table>

<button class="col-12 p-3 m-3 rounded"><a href="{{ url('libro/create') }}">Añadir Libros</a></button>

</div>
@endsection