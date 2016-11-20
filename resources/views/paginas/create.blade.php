@extends('base')

@section('titulo')Crear Nuevo Producto @endsection

@section('bodyname')crear @endsection
@section('contenido')
  <div class="">
    <h2>Sube tu producto</h2>
    <form class="" action="" method="post">
      {{ csrf_field() }}

      <div class="">
        <label>Titulo:</label>
        <input type="input" name="title" value="">
        @if ($errors->has('title'))
                <strong style="color: #f00">{{ $errors->first('title') }}</strong>
        @endif
        <div class="">
          <label>Fotos:</label>
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
                <strong style="color: #f00">{{ $errors->first('photo_1') }}</strong>
        @endif
        <div class="">
          <label>Descripción:</label>
          <input type="text" name="description" value="">

        </div>
        @if ($errors->has('description'))
                <strong style="color: #f00">{{ $errors->first('description') }}</strong>
        @endif
        <div class="">
          <label>Categoria:</label>
          <select class="" name="categorias">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{$category->category}}</option>
            @endforeach
          </select>
        </div>
        <div class="">
          <label>Precio:</label>
          <input type="text" name="prize" value="">
        </div>
        <input type="submit" name="name" value="Crear producto">
      </div>
    </form>
  </div>

@endsection
