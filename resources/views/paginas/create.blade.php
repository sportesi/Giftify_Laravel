@extends('base')

@section('titulo')Crear Nuevo Producto @endsection

@section('bodyname')crear @endsection
@section('contenido')

  <div class="">
    <img src="" alt="" />
  </div>
  {{-- ???????????????? --}}
  <div class="">
    <form class="" action="" method="post">
      <input type="file" name="name" value="">
      <input type="submit" name="name" value="upload">
    </form>
  </div>
  {{-- ???????????????? --}}
  <div class="">
    <h2>Sube tu producto</h2>
    <form class="" action="" method="post">
      <div class="">
        <label>Titulo:</label>
        <input type="input" name="title" value="">
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
        <div class="">
          <label>Descripción:</label>
          <textarea name="descripcion" rows="8" cols="40"></textarea>
        </div>
        <div class="">
          <label>Categoria:</label>
          <select class="" name="categorias">
            <option name="1">Tecnologia</option>
            <option name="2">Chicos</option>
            <option name="3">Ropa</option>
            <option name="4">Accesorios</option>
            <option name="5">Deportes</option>
          </select>
        </div>
        <input type="submit" name="name" value="Crear producto">
      </div>
    </form>
  </div>

@endsection
