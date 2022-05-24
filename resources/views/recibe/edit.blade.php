@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/recibe/'.$recibe->id_usuario) }}" method="post" enctype="multipart/form-data">

    @csrf
    {{ method_field('PATCH') }}
    @include('recibe.form', ['modo'=>'Editar'])

</form>

</div>
@endsection