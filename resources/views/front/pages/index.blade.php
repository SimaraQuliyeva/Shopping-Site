@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/homepage/style.css') }}">
    <div id="navbar-container" style="display:flex; justify-content: center">
    </div>
    <div class="main-title">
        <h1>Hello, I’m Salva Gideon.</h1>
        <p>I’m a designer based in San Francisco.</p>
    </div>

    <div class="doted-icon">
        <a href=""><img src="{{asset('assets/front/images/icons/Iconcolor.svg') }}" alt=""></a>
    </div>
    <div class="grid-wrapper">
        <a href=""><img src="{{asset('assets/front/images/products/bekky-bekks-M0e5fdQYBCM-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/karina-tess-H14pfhlfr24-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/andrea-tummons-ZRKFqPn8cdw-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/phil-desforges-KP7p0-DRGbg-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/mukuko-studio-mU88MlEFcoU-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/bryan-garces-fhwcvLL8xwI-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/elnaz-asadi-N1gqDai6A08-unsplash%201.png') }}" alt=""></a>
        <a href=""><img src="{{asset('assets/front/images/products/jess-bailey-nOeVi8DsN8U-unsplash%201.png') }}" alt=""></a>
    </div>


    <div id="footer-container">
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../app.js">

    </script>@endsection
