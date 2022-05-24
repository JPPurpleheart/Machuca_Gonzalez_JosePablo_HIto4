@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/despensa') }}" method="post">
    @csrf
    
    @include('despensa.form', ['modo'=>'Entrada'])

</form>

</div>
@endsection