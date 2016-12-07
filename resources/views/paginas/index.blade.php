@extends('base')

@section('titulo')Home @endsection

@section('bodyname')
  home
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
  <section class="banner">
      <img src="/imgs/banner1.jpg" alt="banner" />
  </section>
  <section class="categorias">
    <div class="herhim">
      <article class="her">

        <img src="imgs/her.jpg" alt="" class="imgcategorias" />
          <div class="textocate">

          <h2>Joyas y Relojes</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <a href="/producto/categoria/22">¡Comprar!</a>
        </div>
      </article>
      <article class="him">
        <img src="imgs/him.jpg" alt=""  class="imgcategorias"/>
          <div class="textocate">

          <h2>Ropa y Accesorios</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <a href="/producto/categoria/26">¡Comprar!</a>
        </div>
      </article>
    </div>
      <article class="kids">
        <img src="imgs/kids.jpg" alt="" class="imgcategorias" />
          <div class="textocate">

          <h2>Kids</h2>
          <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <a href="/producto/categoria/7">¡Comprar!</a>
        </div>
      </article>
      <a href="/categorias" class="mass">Mas...</a>
  </section>
  <!-- banner2 -->
  <section class="banner2">
      <!-- <img src="assets/armadura.jpg" alt="" /> -->
      <div id="owl-demo" class="owl-carousel">
        @foreach ($products as $product)
          <div class="item productosEnPag1">
            <img class="lazyOwl" data-src="{{ asset('./storage/' . $product->photo_1) }}" alt="Lazy Owl Image">
            <h3>{{$product->title}}</h3>
            <strong>${{$product->prize}}</strong>
          </div>
        @endforeach
</section>
@endsection
