@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/shop-single-page/style.css') }}">
    <div class="container">
        <div class="left-side">
            <div class="horizontal-photos">
                @for ($i = 0; $i < 4; $i++)
                <img src="{{ asset('assets/front/images/shop-products/' . $product->image) }}" alt="Product Image">
                @endfor
            </div>

            <div class="main-photo">
                <img src="{{ asset('assets/front/images/shop-products/' . $product->image) }}" alt="Main Product Image">
            </div>

        </div>

        <div class="right-side">
            <div class="title">{{ $product->name }}</div>
            <div class="price">${{ $product->price }}</div>

            <div class="review">
                <div class="stars">
                    <img src="{{asset('assets/front/images/icons/star.svg') }}" alt="">
                    <img src="{{asset('assets/front/images/icons/star.svg') }}" alt="">
                    <img src="{{asset('assets/front/images/icons/star.svg') }}" alt="">
                    <img src="{{asset('assets/front/images/icons/star.svg') }}" alt="">
                    <img src="{{asset('assets/front/images/icons/star.svg') }}" alt="">
                </div>
                <div class="review-status">1 customer review</div>
            </div>

            <div class="product-desc">
                {{ $product->description }}
            </div>

            <form action="{{ route('front.cart', ['id' => $product->id]) }}" method="post" name="action">
                @csrf
                <div class="custom-select">
                    <label for="option" class="label-left">Size</label>
                    <select id="option" name="option" class="dropdown-right">
                        <option value="choose" disabled>Choose an opinion</option>
                        <option value="large">Large</option>
                        <option value="medium" selected >Medium</option>
                        <option value="small">Small</option>
                    </select>
                </div>

                <div class="button-side">
                    <input type="number" name="quantity" id="quantity" min="1" max="5" value="1">
                    <button type="submit">Add To Cart</button>
                </div>
            </form>
            <div class="categories">
                <h5>Categories:</h5>
                <p>Technology, Interface Design</p>
            </div>
        </div>
    </div>
    <div class="bottom-side">
        <div class="more-option">
            <a class="description active" href="">Description</a>
            <a class="additional" href="">Additional information</a>
            <a class="reviews" href="">Reviews(0)</a>
        </div>

        <div class="desc-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam placerat, augue a volutpat hendrerit, sapien
            tortor faucibus augue, a maximus elit ex vitae libero. Sed quis mauris eget arcu facilisis consequat sed eu
            felis. Nunc sed porta augue.
        </div>
    </div>
@endsection
