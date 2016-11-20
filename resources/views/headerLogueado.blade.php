
<div class="logueado">

@if (Auth::check())
	<img src="" alt="" />
	<a href="#"class="ion-ios-cart"></a>
	<strong class="nombreLogueado"> {{ Auth::user()->name }}</strong>
	<a href="logout">Log Out</a>
@endif
</div>
