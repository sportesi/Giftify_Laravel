@extends('base')


@section('titulo'){{$product->title}} @endsection

@section('bodyname')productoIndividual @endsection
@section('contenido')
  <div class="productoIndividualBox">

  <h1>{{ $product->title }}</h1>
  <img src="/{{$product->photo_1}}" alt="" />
  <p>
    {{  $product->description}}
  </p>
  <h2>{{ $product->prize }}</h2>
</div>

@endsection
