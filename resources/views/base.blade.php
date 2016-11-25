<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/master.css" media="screen" title="no title">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    @yield('styles')
  </head>
  <body class="@yield('bodyname')">
    @include('header')
    <div class="container ">
    @yield('contenido')
  </div>
  @include('footer')
  <script src="js/scroll.js" charset="utf-8"></script>
  </body>
</html>
