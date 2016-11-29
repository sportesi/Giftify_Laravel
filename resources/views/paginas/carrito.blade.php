@extends('base')

@section('titulo')Productos @endsection

@section('bodyname')productos @endsection
@section('contenido')
  @if (Session::has('cart'))
    <div class="">
      <ul>
        @foreach ($products as $product)
          <li>
            <span>{{ $product['Qty'] }}</span>
            <strong>{{ $product['item']['title'] }}</strong>
            <span>{{ $product['prize'] }}</span>
            <div class="">
              <ul>
                <li><a href="{{ route('producto.reduceByOne', ['id' => $product['item']['id']]) }}">reducir uno</a></li>
                <li><a href="{{ route('producto.remove', ['id' => $product['item']['id']]) }}">eliminar del carrito</a></li>
              </ul>
            </div>
          </li>
        @endforeach
      </ul>
    </div>
    <div class="">
      <strong>Total price: {{$totalPrice}}</strong>
    </div>
    <div class="">
      <button type="submit" name="button">Checkout</button>
    </div>
  @else
    <div class="">
      <h2>No tenes ningun producto en el carrito</h2>
    </div>
  @endif
@endsection
