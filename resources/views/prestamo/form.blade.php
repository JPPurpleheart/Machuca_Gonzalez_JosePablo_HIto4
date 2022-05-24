<h1>{{ $modo }} Prestamo</h1>

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

<label for="isbn">  ISBN  </label>
<input class="form-control" type="number" name="isbn"
value="{{ isset($prestamo->isbn)?$prestamo->isbn:old('isbn') }}" id="isbn">

<label for="id_usuario">  ID de Usuario  </label>
<input class="form-control" type="text" name="id_usuario"
value="{{ isset($prestamo->id_usuario)?$prestamo->id_usuario:old('id_usuario') }}" id="id_usuario">

<label for="fecha_inicio">  Fecha de Inicio  </label>
<input class="form-control" type="text" name="fecha_inicio"
value="{{ isset($prestamo->fecha_inicio)?$prestamo->fecha_inicio:old('fecha_inicio') }}" id="fecha_inicio">

<label for="fecha_fin">  Fecha de Finalización  </label>
<input class="form-control" type="email" name="fecha_fin"
value="{{ isset($prestamo->fecha_fin)?$prestamo->fecha_fin:old('fecha_fin') }}" id="fecha_fin">

</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-primary"  href="{{ url('prestamo/') }}">Regresar Vista de Prestamos</a>