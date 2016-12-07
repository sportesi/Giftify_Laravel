@extends('base')

@section('titulo')Categories @endsection

@section('bodyname')categories @endsection
@section('contenido')
  <div class="contenido">
    @if ($productsCategory)

    <ul>
      @foreach ($productsCategory as $product)
        <a href="/producto/{{ $product->id }}">
          <div class="productBox productosEnPag">

            <h2>{{ $product->title }}</h2>
            <img src="{{ asset('./storage/' . $product->photo_1) }}" alt="" />
                <p>
                  {{ $product->description }}
                </p>
            <label>${{ $product->prize }}</label>
          </div>
        </a>
      @endforeach
    </ul>
    @else
      <strong>No hay productos en esta categoría</strong>
    @endif
  </div>
@endsection
