@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/recibe') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('recibe.form', ['modo'=>'Crear'])

</form>

</div>
@endsection