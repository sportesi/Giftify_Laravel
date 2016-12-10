@extends('base')


@section('titulo')Perfil @endsection

@section('bodyname')productos @endsection
@section('contenido')
  <h1>Mi Perfil</h1>
  <div class="contenido-perfil">
    <img class="avatar" src="{{ asset('./storage/' . Auth::user()->avatar) }}" alt="">
    <form enctype="multipart/form-data"  class="avatar" action="/change-profile" method="post">
      {{ csrf_field() }}
      <input type="file" name="avatar" accept="image/*">
      <input class="button" type="submit" name="" value="Subir foto">
    </form>
  </div>
@endsection
