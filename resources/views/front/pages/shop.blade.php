@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/shop/style.css') }}">
        <div class="idk-2">
            <div class="idk">
                <div class="title">
                    Shop
                </div>
                <div class="doted-icon">
                    <a href=""><img src="{{asset('assets/front/images/icons/Iconcolor.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="shop-content">
                @foreach($products as $product)
                    <div class="col1">
                        <a href="{{ route('front.product', ['id' => $product->id]) }}">
                            <figure>
                                <img src="{{ asset('assets/front/images/shop-products/' . $product->image) }}" alt="photo">
                            <figcaption class="product-name">{{$product->name}}</figcaption>
                            <figcaption class="product-price">${{$product->price}}</figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach
            </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('assets/front/main.js') }}"></script>

@endsection()
