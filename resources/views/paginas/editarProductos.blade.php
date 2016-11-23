@extends('base')

@section('titulo')Editar Producto @endsection

@section('bodyname')crear @endsection
@section('contenido')
  <div class="crearBox">
    <h2>Edita tu producto</h2>
    <form class="" action="" method="post">
      {{ csrf_field() }}

      <div class="">
        <label class="elementosFormulario">Titulo:</label>
        <input type="input" name="title" value="{{ $product->title}}" class="elementosFormulario">
        @if ($errors->has('title'))
                <strong style="color: #f00" class="elementosFormulario">{{ $errors->first('title') }}</strong>
        @endif
        <div class="">
          <label class="elementosFormulario">Fotos:</label>
          <div class="">
            <input type="file" name="foto1" value="{{ $product->photo_1 }}">
          </div>
          <div class="">
            <input type="file" name="foto2" value="">
          </div>
          <div class="">
            <input type="file" name="foto3" value="">
          </div>
          <div class="">
            <input type="file" name="foto4" value="">
          </div>
          <div class="">
            <input type="file" name="foto5" value="">
          </div>
        </div>
        @if ($errors->has('photo_1'))
                <strong style="color: #f00" class="elementosFormulario">{{ $errors->first('photo_1') }}</strong>
        @endif
        <div class="">
          <label class="elementosFormulario">Descripción:</label>
          <textarea name="description" value="{{ $product->description }}" class="elementosFormulario" ></textarea>

        </div>
        @if ($errors->has('description'))
                <strong style="color: #f00" class="elementosFormulario">{{ $errors->first('description') }}</strong>
        @endif
        <div class="">
          <label class="elementosFormulario">Precio:</label>
          <input type="text" name="prize" value="{{ $product->prize }}" class="elementosFormulario">
        </div>
        <input type="submit" name="name" value="Crear producto">
      </div>
    </form>
  </div>

@endsection
