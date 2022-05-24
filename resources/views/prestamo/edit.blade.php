@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/prestamo/'.$prestamo->id_prestamo) }}" method="post" enctype="multipart/form-data">

    @csrf
    {{ method_field('PATCH') }}
    @include('prestamo.form', ['modo'=>'Editar'])

</form>

</div>
@endsection