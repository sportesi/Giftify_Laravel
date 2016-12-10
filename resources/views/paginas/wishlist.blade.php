@extends('base')

@section('titulo')Wishlist @endsection

@section('bodyname')productos @endsection
@section('contenido')
  <h1>Wishlist</h1>
  <div class="carrito">
    @foreach ($arrayIdProducts as $product)
        <ul class="productoCarrito">
            <li>
              <strong>{{ $product->title }}</strong>
              <span>${{ $product->prize }}</span>
            </li>
            <a href="{{ route('producto.AddToCart', ['id' => $product->id]) }}">Pasar al Carrito</a>
            {{-- <a href="/wishlist/delete/{{ $product->id }}">Sacar de mi Wishlist</a> --}}
        </ul>
        <hr>
    @endforeach
  </div>
@endsection
