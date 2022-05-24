@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/ropero') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('ropero.form', ['modo'=>'Crear'])

</form>

</div>
@endsection