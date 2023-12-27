<link rel="stylesheet" href="{{asset('assets/front/header/style.css')   }}">
<div class="nav">
    <nav>
        <div class="logo">
            <a href="{{route('front.home')}}" class="sh" >SH</a>
            <a href="{{route('front.home')}}" class="een">EEN</a>
        </div>
        <div class="links">
            <ul>
                <li><a href="" id="portfolio-active">Portfolio</a></li>
                <li><a href="{{route('front.products')}}" id="shop-active">Shop</a></li>
                <li><a href="#" >About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <div class="icons">
                    <div class="search">
                        <a href="#"><img src="{{asset('assets/front/images/icons/magnifying-glass.jpg')}}" alt=""></a>
                    </div>
                    <div class="market">
                        <a href="{{route('front.cart')}}"><img src="{{asset('assets/front/images/icons//shopping-cart-simple.svg') }}" alt=""></a>
                    </div>
                    @auth
                        <div class="logout">
                            <a href="{{route('front.logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                            <!--                        <a href="login.php"><img src="../navbar/icons/user.svg" alt=""></a>-->
                        </div>
                    @else
                    <div class="profile">
                        <a href="{{route('front.login')}}"><img src="{{asset('assets/front/images/icons//user.svg') }}" alt=""></a>
                        <!--                        <a href="login.php"><img src="../navbar/icons/user.svg" alt=""></a>-->
                    </div>
                    @endauth
                    <div class="ui-mode">
                        <a href=""><img src="{{asset('assets/front/images/icons//moon.svg') }}" alt=""></a>
                    </div>
                </div>
            </ul>
        </div>

        <div class="modal" id="searchModal">
            <div class="modal-container">
                <div class="modal-nav">
                    <div class="logo">
                        <a href="" class="sh">SH </a>
                        <a href="" class="een">EEN</a>
                    </div>
                    <img class="close" src="{{asset('assets/front/images/icons//Menu%20Icon.svg') }}" alt="">
                </div>
                <form action="" class="modal-search" method="post">
                    <input type="search" name="search" id="search" placeholder="Type To Search">
                    <button type="submit">
                        <img src="{{asset('assets/front/images/icons//magnifying-glass%201.svg') }}" alt="">
                    </button>
                </form>
            </div>
        </div>
    </nav>

