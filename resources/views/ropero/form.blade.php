<h1>{{ $modo }} Ropa</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">

        <ul>
    
            @foreach( $errors->all() as $error)

                <li> {{ $error }} </li>

            @endforeach

        </ul>

    </div>

@endif

<div class="form-group">

<label for="Nombre">  Nombre  </label>
<input class="form-control" type="text" name="Nombre"
value="{{ isset($ropero->Nombre)?$ropero->Nombre:old('Nombre') }}" id="Nombre">

<label for="ApellidoPaterno">  Apellido Paterno  </label>
<input class="form-control" type="text" name="ApellidoPaterno"
value="{{ isset($ropero->ApellidoPaterno)?$ropero->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">

<label for="ApellidoMaterno">  Apellido Materno  </label>
<input class="form-control" type="text" name="ApellidoMaterno"
value="{{ isset($ropero->ApellidoMaterno)?$ropero->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">

<label for="Correo">  Correo  </label>
<input class="form-control" type="email" name="Correo"
value="{{ isset($ropero->Correo)?$ropero->Correo:old('Correo') }}" id="Correo">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-primary"  href="{{ url('ropero/') }}">Regresar Vista de Ropero</a>