@extends('base')

@section('titulo')Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  <h1>Productos</h1>
  @foreach ($products as $product)
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
@endsection
