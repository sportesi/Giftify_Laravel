@extends('base')


@section('titulo')Mis Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  <div class="contenido-perfil">
    <img class="avatar" src="storage/avatars/{{$user->avatar}}" alt="">
    <form enctype="multipart/form-data"  class="avatar" action="/change-profile" method="post">
      {{ csrf_field() }}
      <input type="file" name="avatar" accept="image/*">
      <input class="button" type="submit" name="" value="Subir foto">
    </form>
  </div>
@endsection
