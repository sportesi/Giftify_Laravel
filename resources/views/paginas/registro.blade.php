@extends('base')
 @section('titulo') Registro @endsection

@section('bodyname')registro @endsection

@section('contenido')
  <form id='register' action='{{ url('/register') }}' method='post' name="form" >
    {{ csrf_field() }}

      <fieldset>
          <legend>
              <h1>Registro</h1>
          </legend>
          <div class="datos">
              <input type="hidden" name="formulario" value="registro">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                  <label for="name" class="col-md-4 control-label">Nombre Completo</label>
                  <br>
                  <input  id="name" type="text" placeholder="Juan" class="typeText" name="name" value="{{ old('name') }}">
                  <br>
                    @if ($errors->registro->has('name'))
                            <strong style="color: #f00">{{ $errors->registro->first('name') }}</strong>
                    @endif
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                <div class="">

                </div>
                  <label for="email" class="col-md-4 control-label">Mail</label>
                  <br>
                  <input type="text" placeholder="ejemplo@ejemplo.com" class="typeText" name="mail" value="{{ old('email') }}">
                  <br>
                  @if ($errors->registro->has('email'))
                          <strong style="color: #f00">{{ $errors->registro->first('email') }}</strong>
                  @endif
              </div>
            <div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label>Contraseña</label>
                  <br>
                  <input type="password" class="typeText" placeholder="Contraseña" name="password">
                  <br>
                  @if ($errors->registro->has('password'))
                          <strong style="color: #f00">{{ $errors->registro->first('password') }}</strong>
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
                    <input type="date" name="date" value="" class="typeText">
                    @if ($errors->registro->has('date'))
                            <strong style="color: #f00">{{ $errors->registro->first('date') }}</strong>
                    @endif

              </div>
              <div>
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
