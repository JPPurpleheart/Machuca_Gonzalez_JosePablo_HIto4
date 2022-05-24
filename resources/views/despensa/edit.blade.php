@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/despensa/'.$despensa->id_producto) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('despensa.form', ['modo'=>'Reparto'])

</form>

</div>
@endsection