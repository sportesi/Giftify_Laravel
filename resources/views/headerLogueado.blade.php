
<div class="logueado">

@if (Auth::check())
	@if (Auth::user()->avatar == 'default.jpg')

		<img src="/imgs/avatar.jpg" alt="" />
	@else
		<img src="{{ asset('./storage/' . Auth::user()->avatar) }}" alt="" class="avatar">
	@endif
	<a href="/shopping-cart"class="ion-ios-cart"></a>
	<a href="/wishlist" class="ion-star"></a>
	<span>{{Session::has('cart') ? Session::get('cart')->totalQty : ""}}</span>
	<strong class="nombreLogueado"> {{ Auth::user()->name }}</strong>
	<div class="dropdown">
  <button onclick="myFunction()" class=" ion-arrow-down-b dropbtn"></button>
  <div id="myDropdown" class="dropdown-content">
		<a href="/perfil">Mi Perfil</a>
		<a href="/NuevoProducto">Crear un Producto</a>
		<a href="/MisProductos">Mis Productos</a>
		<a href="/logout">Log Out</a><br>
  </div>
</div>

@endif
</div>
