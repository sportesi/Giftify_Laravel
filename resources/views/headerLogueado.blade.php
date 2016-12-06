
<div class="logueado">

@if (Auth::check())
	@if (Auth::user()->avatar == 'default.jpg')

		<img src="/imgs/avatar.jpg" alt="" />
	@else
		<img src="{{ asset('./storage/' . Auth::user()->avatar) }}" alt="">
	@endif
	<a href="/shopping-cart"class="ion-ios-cart"></a>
	<span>{{Session::has('cart') ? Session::get('cart')->totalQty : ""}}</span>
	<strong class="nombreLogueado"> {{ Auth::user()->name }}</strong>
	<div class="dropdown">
  <button onclick="myFunction()" class=" ion-arrow-down-b dropbtn"></button>
  <div id="myDropdown" class="dropdown-content">
		<a href="/perfil">Mi Perfil</a>
		<a href="/logout">Log Out</a><br>
		<a href="/NuevoProducto">Crear un Producto</a><br>
		<a href="/MisProductos">Mis Productos</a>
  </div>
</div>

@endif
</div>
