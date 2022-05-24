<!-- Vista de los datos de la recibe -->

@extends('layouts.app')
@section('content')
<div class="container">
    
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}

@endif

<table class="table text-center">
    
    <thead class="table-primary text-dark">
        <tr>
            <th>ID Usuario</th>
            <th>ID Producto</th>
            <th>Fecha</th>
            <th>Cantidad Entregada</th>
            <th>Entrada</th>
            <th>Reparto</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $recibes as $recibe )
        <tr>
            <td>{{ $recibe -> id_usuario }}</td>
            <td>{{ $recibe -> id_producto }}</td>
            <td>{{ $recibe->fecha }}</td>
            <td>{{ $recibe->cantidad_entregada }} kg</td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('recibe/create') }}">Registrar Recepción de Alimentos</a></button>

            </td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('/recibe/'.$recibe->id_usuario.'/edit') }}">Editar Fecha de Recepción</a></button>
        
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

</div>
@endsection