@extends('base')

@section('titulo')Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  @foreach ($products as $product)
    <div class="">

      <ul>
        <li>{{ $product->title }}</li>
        <li><img src="{{ $product->photo_1 }}" alt="" /></li>
        <li>{{ $product->description }}</li>
        <li>{{ $product->prize }}</li>
      </ul>
    </div>

  @endforeach
@endsection
