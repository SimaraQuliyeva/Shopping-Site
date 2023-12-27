@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/cart/style.css') }}">
    <div class="card-container">
        <div class="left-card">
            <h2>Cart Items</h2>
            <div class="scroll-product">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($products && $products->count() > 0)
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->size }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>${{ $product->price }}</td>
                                <td>
                                    <form action="{{ route('front.removeProduct') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                                        <button type="submit" class="removebutton"><img
                                                src="{{ asset('assets/front/images/icons/Vector.svg') }}" alt=""></button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5"><hr></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No items in the cart</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="right-card">
            <h2>Cart Totals</h2>
            <div class="result">
                <!--            <div class="subtotal">-->
                <!--                <p>Subtotal</p>-->
                <!--                <div class="amount">$ 598.00</div>-->
                <!--            </div>-->

                <div class="total">
                    <p>Total</p>
                    <div class="amount">${{$totalPrice}}</div>
                </div>
            </div>

            <form action="{{route('front.checkout')}}" method="post">
                @csrf
                <button type="submit">Place Order</button>
            </form>
        </div>
    </div>
    </div>
@endsection
