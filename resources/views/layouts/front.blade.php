{{--front terefde header/footer--}}
<!doctype html>
<html lang="en">
@include('front.partials.head')
<body>
@include('front.components.header')

@yield('content')

@include('front.components.footer')
</body>
</html>
