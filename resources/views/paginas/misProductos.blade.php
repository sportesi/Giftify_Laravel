@extends('base')


@section('titulo')Mis Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  <h1>Mis Productos</h1>
  @foreach ($products as $product)
    @if (Auth::user()->id == $product->id_user)

            <div class="productBox productosEnPag">

              <h2>{{ $product->title }}</h2>
              <div class="img-pdto">
              <img src="{{ asset('./storage/' . $product->photo_1) }}" alt="" />
              </div>
              <p>
                {{ $product->description }}
              </p>
                <label class="prize">${{ $product->prize }}</label>
                <a href="borrarProducto/{{ $product->id }}">Borrar Producto</a>
                <a href="editarProducto/{{ $product->id }}">Editar Producto</a>
            </div>

      @endif
  @endforeach
@endsection
