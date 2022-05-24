@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/prestamo') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('prestamo.form', ['modo'=>'Crear'])

</form>

</div>
@endsection