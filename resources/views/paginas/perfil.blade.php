@extends('base')

@section('titulo')Home @endsection

@section('bodyname')
  perfil
@endsection
  @section('styles')
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- <script src="js/javascript2.js" charset="utf-8"></script> -->
    <script src="carrusel/jquery-3.1.1.min.js"></script>
    <script src="carrusel/owl.carousel.js"></script>
    <script src="carrusel/carrusel.js"></script>
    <link rel="stylesheet" href="carrusel/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="carrusel/carrusel.css">
  @endsection
@section('contenido')

  <div class="">
    <img src="" alt="" />
  </div>
  <div class="">
    <form class="" action="index.html" method="post">
      <input type="file" name="name" value="">
      <input type="submit" name="name" value="upload">
    </form>
  </div>
  <div class="">
    <h2>Sube tu producto</h2>
    <form class="" action="index.html" method="post">
      <div class="">
        <p>
          Titulo:
        </p>
        <input type="input" name="title" value="">
        <div class="">
          <p>
            fotos:
          </p>
          <div class="">
            <input type="button" name="foto1" value="">
          </div>
          <div class="">
            <input type="button" name="foto2" value="">
          </div>
          <div class="">
            <input type="button" name="foto3" value="">
          </div>
          <div class="">
            <input type="button" name="foto4" value="">
          </div>
          <div class="">
            <input type="button" name="foto5" value="">
          </div>
        </div>
        <div class="">
          <p>
            Descripción:
          </p>
          <textarea name="descripcion" rows="8" cols="40"></textarea>
        </div>
        <div class="">
          <p>
            Categoria:
          </p>
          <select class="" name="categorias">
            <option name="1"></option>
            <option name="2"></option>
            <option name="3"></option>
            <option name="4"></option>
            <option name="5"></option>
          </select>
        </div>
        <input type="submit" name="name" value="Crear producto">
      </div>
    </form>
  </div>

@endsection
