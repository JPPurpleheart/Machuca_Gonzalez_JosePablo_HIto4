<h1>{{ $modo }} Alimentos</h1>

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

<label for="nombre">  Nombre  </label>
<input class="form-control" type="text" name="nombre"
value="{{ isset($despensa->nombre)?$despensa->nombre:old('nombre') }}" id="nombre">

<label for="categoria">  Sección  </label>
<input class="form-control" type="text" name="categoria"
value="{{ isset($despensa->categoria)?$despensa->categoria:old('categoria') }}" id="categoria">

<label for="cantidad">  Stock  </label>
<input class="form-control" type="text" name="cantidad"
value="{{ isset($despensa->cantidad)?$despensa->cantidad:old('cantidad') }}" id="cantidad">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-primary"  href="{{ url('despensa/') }}">Regresar Vista de Despensa</a>