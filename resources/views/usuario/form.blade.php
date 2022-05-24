<h1>{{ $modo }} Usuario</h1>

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
value="{{ isset($usuario->nombre)?$usuario->nombre:old('nombre') }}" id="Nombre">

<label for="apellidos">  Apellidos  </label>
<input class="form-control" type="text" name="apellidos"
value="{{ isset($usuario->apellidos)?$usuario->apellidos:old('apellidos') }}" id="apellidos">

<label for="num_miembros">  Nº de Miembros de la Unidad Familiar  </label>
<input class="form-control" type="number" name="num_miembros"
value="{{ isset($usuario->num_miembros)?$usuario->num_miembros:old('num_miembros') }}" id="num_miembros">

<label for="email">  Email  </label>
<input class="form-control" type="email" name="email"
value="{{ isset($usuario->email)?$usuario->email:old('email') }}" id="email">

<label for="telefono">  Teléfono  </label>
<input class="form-control" type="tel" name="telefono"
value="{{ isset($usuario->telefono)?$usuario->telefono:old('telefono') }}" id="telefono">

<label for="preferencia">  Preferencias  </label>
<input class="form-control" type="text" name="preferencia"
value="{{ isset($usuario->preferencia)?$usuario->preferencia:old('preferencia') }}" id="preferencia">

<label for="tipo">  Tipo de Usuario  </label>
<input class="form-control" type="text" name="tipo"
value="{{ isset($usuario->tipo)?$usuario->tipo:old('tipo') }}" id="tipo">

<label for="contraseña">  Contraseña  </label>
<input class="form-control" type="password" name="contraseña"
value="{{ isset($usuario->contraseña)?$usuario->contraseña:old('contraseña') }}" id="contraseña">

</div>

<input class="btn btn-primary" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-warning"  href="{{ url('usuario/') }}">Regresar Vista de Usuarios</a>