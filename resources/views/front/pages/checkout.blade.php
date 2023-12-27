@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/checkout/style.css') }}">
    <div class="container">
    <div class="already-have-acc">
        Already have an account?
        <a href="{{route('front.login')}}">Click here to login</a>
    </div>
    <form action="{{route('front.thankyou')}}" class="left-card" method="post" id="myForm">
        @csrf
        <h2>Billing Details</h2>
        <div class="input-grids">
            <input type="text" name="fName" id="fName" placeholder="First Name*">
            <input type="text" name="lName" id="lName" placeholder="Last Name*">
            <input type="number" name="phoneNumb" id="phoneNumb" placeholder="Phone*" >
            <input type="email" name="email" id="email" placeholder="Email Address*">
            <input type="text" name="address" id="address" placeholder="Street Address*">
        </div>

        <div class="bottom-side">
            <input type="checkbox" id="checkbox" class="checkbox" required>
            <label for="checkbox">I Have Read And Agree To The Website <a href="#">Terms And Conditions. *</a> </label>
        </div>
        <button type="submit">Place Order</button>
    </form>
    <div class="right-card">

        <h2 class="right-title">Your Order</h2>
        <div class="card-bg">
            <div class="result">
                <div class="result-title">
                    <h2>Product</h2>
                    <h2>Subtotal</h2>
                </div>

                <div class="all-sub">
                    @foreach($carts as $cart)
                    <div class="year-sub">
                        <p class="pName">{{$cart->product->name}}</p>
                        <p class="amount">${{$cart->product->price*$cart->quantity}}</p>
                    </div>
                    @endforeach
                    <!--                    <div class="month-sub">-->
                    <!--                        <p>Monthly Subscription</p>-->
                    <!--                        <p class="amount">$299.00</p>-->
                    <!--                    </div>-->
                </div>

                <div class="total">
                    <p>Total</p>
                    <div class="total-amount">${{ $totalPrice}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
