@extends('base')

@section('titulo')Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  <div class="carrito">

  @if (Session::has('cart'))
    @foreach ($products as $product)
      <ul class="productoCarrito">
          <li>
            <span>{{ $product['Qty'] }}</span>
            <strong>{{ $product['item']['title'] }}</strong>
            <span>${{ $product['prize'] }}</span>

              <ul class="bottonsCarrito">
                <li><a href="{{ route('producto.reduceByOne', ['id' => $product['item']['id']]) }}">Reducir uno</a></li>
                <li><a href="{{ route('producto.remove', ['id' => $product['item']['id']]) }}">Eliminar del carrito</a></li>
              </ul>

          </li>
      </ul>
      <hr>
    @endforeach
    <div class="buttonsCheckout">

      <strong class="totalPrice">Precio total:</strong><strong class="totalPrice2">${{$totalPrice}} </strong>
      <button type="submit" name="button" class="checkout">Checkout</button>
    </div>
  @else
    <div class="">
      <h2>No tenes ningun producto en el carrito</h2>
    </div>
  @endif
</div>
@endsection
