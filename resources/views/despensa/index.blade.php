<!-- Vista de los datos de la despensa -->

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
            <th>Sección</th>
            <th>Stock</th>
            <th>Cantidad Entregada</th>
            <th>Entrada</th>
            <th>Reparto</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach( $despensas as $despensa )
        <tr>
            <td>{{ $despensa -> nombre }}</td>
            <td>{{ $despensa -> categoria }}</td>
            <td>{{ $despensa->cantidad }} kg</td>
            <td><button class="col-12 rounded"><a href="{{ url('recibe/') }}" class=" text-danger">Cantidades Entregadas</a></button></td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('despensa/create') }}">Registrar Entrada de Alimentos</a></button>

            </td>
            <td>
                
                <button class="col-12 rounded"><a href="{{ url('/despensa/'.$despensa->id_producto.'/edit') }}">Registrar Reparto de Alimentos</a></button>
        
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

<button class="col-12 p-3 m-3 rounded"><a href="{{ url('usuario/create') }}">Registrar Usuario</a></button>

</div>
@endsection