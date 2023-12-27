@extends('layouts.front')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/front/register/style.css') }}">
    <div class="login">
        <div class="left-side">
            <div class="title">Register an Account</div>
            <div class="desc">Welcome to the Brilliance</div>
            <div class="not-signed">Already have an account? <a href="">Sign in</a></div>
        </div>

        <form action="{{route('front.register')}}" class="right-side" method="post" name="action">
{{--            @csrf--}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" autocomplete="off">

            <input type="text" name="name" id="name" placeholder="Enter your name" class="email">
            @error('name                   ')
            <span>{{$message}}</span>
            @enderror
            <input type="email" name="email" id="email" placeholder="Email Address" class="email">
            @error('email')
            <span>{{$message}}</span>
            @enderror
            <input type="password" name="password" id="password" placeholder="Your Password" class="password">
            @error('password')
            <span>{{$message}}</span>
            @enderror
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Your Password" class="password">
            @error('password_confirmation')
            <span>{{$message}}</span>
            @enderror
            <button type="submit" name="register">Sign Up</button>
            <div class="d-flex">
                <div class="forgot-password">
                    By creating an account, you agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                </div>
            </div>
        </form>
    </div>

@endsection
