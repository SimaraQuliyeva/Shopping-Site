@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/thankyou/style.css') }}">
    <div class="container">
        <div class="left-card">
            <h1>Thank you!</h1>
            <div class="order">
                <div class="order-num-section">
                    <p>Order number:</p>
{{--                    <p class="num">{{$orders->id}}</p>--}}
                </div>
{{--                <p>Your order has been received. An email confirming your order has been sent to <b>{{$orders->email}}</b></p>--}}
            </div>

            <h2>Shipping Address</h2>
{{--                    <p>{{$orders->firstName . ' ' . $orders->lastName}}</p>--}}
{{--                    <p>{{$orders->address}}</p>--}}
        </div>
        <div class="right-card">
            <h2 class="right-title">Your Order</h2>
            <div class="card-bg">
                <div class="result">
                    <div class="result-title">
                        <h2>Product</h2>
                        <h2>Subtotal</h2>
                    </div>

                    <div class="all-sub">
                        <div class="year-sub">
                            <p></p>
                            <p class="amount">$pprice</p>
                        </div>
                        <!--                    <div class="month-sub">-->
                        <!--                        <p>Monthly Subscription</p>-->
                        <!--                        <p class="amount">$299.00</p>-->
                        <!--                    </div>-->
                    </div>

                    <div class="total">
                        <p>Total</p>
{{--                        <div class="total-amount">$ {{$orders->totalPrice}}</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
