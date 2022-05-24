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
            <th>ID Folleto</th>
            <th>ID Usuario</th>
            <th>Fecha de Entrega</th>
            <th>Cantidad Entregada</th>
            <th>Tipo de Folleto</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $folletos as $folleto )
        <tr>
            <td>{{ $folleto -> id_folleto }}</td>
            <td>{{ $folleto -> id_usuario }}</td>
            <td>{{ $folleto -> fecha }}</td>
            <td>{{ $folleto -> cantidad_entregada }}</td>
            <td>{{ $folleto -> tipo_folleto }}</td>
        </tr>
        @endforeach
    </tbody>
    
</table>

<button class="col-12 p-3 m-3 rounded"><a href="{{ url('folleto/create') }}">Añadir Folletos Entregados</a></button>

</div>
@endsection