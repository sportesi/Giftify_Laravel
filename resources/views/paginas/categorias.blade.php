@extends('base')

@section('titulo')Categories @endsection

@section('bodyname')categories @endsection
@section('contenido')
  <div class="contenido">
    <ul>
      @foreach ($categories as $category)
        <li><a href="/producto/categoria/{{ $category->id }}">{{ $category->category }}</a></li>
      @endforeach
    </ul>
  </div>
@endsection
