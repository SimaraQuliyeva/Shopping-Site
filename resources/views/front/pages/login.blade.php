@extends('layouts.front')
@section('content')
    <link rel="stylesheet" href="{{ asset('assets/front/login/style.css') }}">
    <div class="login">
    <div class="left-side">
        <div class="title">Welcome back</div>
        <div class="desc">Enter your email and password to sign in to the website.</div>
        <div class="not-signed">Not signed up yet? <a href="">Sign up</a></div>
    </div>

    <form action="{{route('front.login')}}" class="right-side" method="post">
{{--        @csrf--}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">
        <input type="email" name="email" id="email" placeholder="Email Address" class="email">
        <input type="password" name="password" id="password" placeholder="Your Password" class="password">
        <div class="checkbox-section">
            <input type="checkbox" name="checkbox" id="checkbox" class="checkbox">
            <label for="checkbox" class="keep-me-logged">Keep me logged in</label>
        </div>
        <button type="submit" name="login">Sign In</button>
        <div class="d-flex">
            <div class="forgot-password"><a href="">Forgot Password?</a></div>
        </div>
    </form>

    </div>

@endsection
