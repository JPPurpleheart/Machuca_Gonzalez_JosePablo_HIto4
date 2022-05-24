@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{ url('/ropero/'.$ropero->id_ropa) }}" method="post" enctype="multipart/form-data">

    @csrf
    {{ method_field('PATCH') }}
    @include('ropero.form', ['modo'=>'Editar'])

</form>

</div>
@endsection