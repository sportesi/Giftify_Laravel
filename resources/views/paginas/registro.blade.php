@extends('base')
 @section('titulo') Registro @endsection

@section('bodyname') registro @endsection

@section('contenido')
  <form id='register' action='{{ url('/register') }}' method='post' name="form" >
    {{ csrf_field() }}
    @foreach ($errors->register->all() as $error)
      - {{$error}}
    @endforeach
      <fieldset>
          <legend>
              <h1>Registro</h1>
          </legend>
          <div class="datos">
              <input type="hidden" name="formulario" value="registro">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-4 control-label">Nombre Completo</label>
                  <br>
                  <input  id="name" type="text" placeholder="Juan" class="typeText" name="name" value="{{ old('name') }}"><br>
                  <strong style="color: #f00">
                    @if ($errors->has('name'))
                            <strong>{{ $errors->first('name') }}</strong>
                    @endif
                  </strong>
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                  <label for="email" class="col-md-4 control-label">Mail</label>
                  <br>
                  <input type="text" placeholder="ejemplo@ejemplo.com" class="typeText" name="mail" value="{{ old('email') }}">
                  <br>
                  @if ($errors->has('name'))
                          <strong>{{ $errors->first('name') }}</strong>
                  @endif
              </div>
            <div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Contraseña</label>
                  <br>
                  <input type="password" class="typeText" placeholder="Contraseña" name="password">
                  <br>
                  @if ($errors->has('password'))
                          <strong>{{ $errors->first('password') }}</strong>
                  @endif
              </div>
              <div class="">
              <label>Confirmar Contraseña</label>
              <br>
              <input id="password-confirm" type="password" class="typeText" placeholder="Contraseña" name="password_confirmation">
              <br>
            </div>
          </div>
              <div class="fechasDeNacimiento">
                  <label>Fecha de nacimiento</label>
                    <input type="date" name="fecha" value="" class="typeText">
                    <strong style="color: #f00">
              </div>
              <div class="">
                  <label>Nombre de Usuario</label>
                  <br>
                  <input type="text" placeholder="Nombre de usuario" class="typeText" name="username" value="">
                  <br>
              <div class="botones">
                <br>
                <button type="submit">Registrarse</button>
                <button type="reset" name="button"  id="enviar">Borrar</button>
                <br>
              </div>
          </div>
          </div>
      </fieldset>
  </form>
@endsection
