
<div class="logueado">

@if (Auth::check())
	<img src="" alt="" />
	<a href="/shopping-cart"class="ion-ios-cart"></a>
	<span>{{Session::has('cart') ? Session::get('cart')->totalQty : ""}}</span>
	<strong class="nombreLogueado"> {{ Auth::user()->name }}</strong>
	<a href="logout">Log Out</a><br>
	<a href="NuevoProducto">Crear un Producto</a><br>
	<a href="MisProductos">Mis Productos</a>
@endif
</div>
