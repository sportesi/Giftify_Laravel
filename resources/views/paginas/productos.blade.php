@extends('base')

@section('titulo')Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  @foreach ($products as $product)
    <div class="productBox">

      <h2>{{ $product->title }}</h2>
      <img src="{{ $product->photo_1 }}" alt="" />
    <p>
      {{ $product->description }}
    </p>
        <label>${{ $product->prize }}</label>
    </div>

  @endforeach
@endsection
