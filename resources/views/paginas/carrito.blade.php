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
            <span>{{ $product['prize'] }}</span>

              <ul>
                <li><a href="{{ route('producto.reduceByOne', ['id' => $product['item']['id']]) }}">reducir uno</a></li>
                <li><a href="{{ route('producto.remove', ['id' => $product['item']['id']]) }}">eliminar del carrito</a></li>
              </ul>

          </li>
      </ul>
    @endforeach
      <strong>Total price: {{$totalPrice}} </strong>
      <button type="submit" name="button">Checkout</button>
  @else
    <div class="">
      <h2>No tenes ningun producto en el carrito</h2>
    </div>
  @endif
</div>
@endsection
