@extends('base')

@section('titulo')Categorias @endsection

@section('bodyname')categories @endsection
@section('contenido')
  <div class="contenido">
    <h1>Categorias</h1>
    <ul>
      @foreach ($categories as $category)
        <li><a href="/producto/categoria/{{ $category->id }}">{{ $category->category }}</a></li>
      @endforeach
    </ul>
  </div>
@endsection
