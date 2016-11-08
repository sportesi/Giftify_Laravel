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

          <h2>Her</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <button type="button" name="button">Shop now!</button>
        </div>
      </article>
      <article class="him">
        <img src="imgs/him.jpg" alt=""  class="imgcategorias"/>
          <div class="textocate">

          <h2>Him</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </p>
          <button type="button" name="button">Shop now!</button>
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
          <button type="button" name="button">Shop now!</button>
        </div>
      </article>
  </section>
  <!-- banner2 -->
  <section class="banner2">
      <!-- <img src="assets/armadura.jpg" alt="" /> -->
      <div id="owl-demo" class="owl-carousel">
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 1</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 2</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 3</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 4</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 5</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 6</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 7</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 8</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 9</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 10</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 11</h3><strong> $19.99</strong></div>
      <div class="item"><img class="lazyOwl" data-src="imgs/regalo.jpg" alt="Lazy Owl Image"><h3>Producto 12</h3><strong> $19.99</strong></div>
</section>
@endsection
