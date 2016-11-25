@extends('base')

@section('titulo')Crear Nuevo Producto @endsection

@section('bodyname')crear @endsection
@section('contenido')
  <div class="crearBox">
    <h2 class="tituloCrear">Sube tu producto</h2>
    <form class="" action="" enctype="multipart/form-data" method="post">
      {{ csrf_field() }}
<div class="otrosCrear">

      <div class="bloquesCrear">
        <label class="elementosFormulario">Titulo:</label>
        <input type="input" name="title" value="" class="elementosFormulario">
        @if ($errors->has('title'))
                <strong style="color: #f00" class="elementosFormulario">{{ $errors->first('title') }}</strong>
        @endif
        </div>
        <div class="bloquesCrear">
          <label class="elementosFormulario">Descripción:</label>
          <textarea name="description" value="" class="elementosFormulario" ></textarea>

        </div>
        @if ($errors->has('description'))
                <strong style="color: #f00" class="elementosFormulario">{{ $errors->first('description') }}</strong>
        @endif
        <div class="bloquesCrear">
          <label class="elementosFormulario">Categoria:</label>
          <select class="elementosFormulario" name="categorias">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>
        <div class="bloquesCrear">
          <label class="elementosFormulario">Precio:</label>
          <input type="text" name="prize" value="" class="elementosFormulario">
        </div>
      </div>
        <div class="bloquesCrear fotosCrear">
          <label class="elementosFormulario">Fotos:</label>
          <div class="">
            <input type="file" name="foto1" value="">
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
        <input type="submit" name="name" value="Crear producto" class="buttonCrear">
    </form>
  </div>

@endsection
