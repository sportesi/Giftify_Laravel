@extends('base')


@section('titulo')Mis Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  @foreach ($products as $product)
    @if (Auth::user()->id == $product->id_user)

            <div class="productBox">

              <h2>{{ $product->title }}</h2>
              <img src="{{ $product->photo_1 }}" alt="" />
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
