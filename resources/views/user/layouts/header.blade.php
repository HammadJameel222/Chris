<div class="top-bar" id="top">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 col-md-6 col-6">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/Logo.png') }}" class="logo" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6 p-0">
                <ul class="top-bar-items d-flex  align-items-center">
                    <li>
                        <div class="dropdown ">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                USD
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Usd</a></li>
                                <li><a class="dropdown-item" href="#">Usd</a></li>
                                <li><a class="dropdown-item" href="#">Usd</a></li>
                            </ul>
                        </div>
                    </li>
                    @guest

                        <div class="border-1"></div>
                        <li class="top-bar-list">
                            <a href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
                        </li>
                        <div class="border-1"></div>
                        <li class="top-bar-list">
                            <a href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i></a>
                        </li>
                        @else
                        <div class="border-1"></div>
                        <li class="top-bar-list">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"><i class="fa-solid fa-user-minus"></i></a>
                            </form>
                        </li>

                    @endguest
                    <div class="border-1"></div>
                    <li class="top-bar-list">
                        <a href="{{ route('cart') }}"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <div class="border-1"></div>
                    <li class="top-bar-list">
                        <div class="round-btn" id="show-search-box">
                            <a href="#"><i class="fa fa-search flip-icon"></i></a>
                        </div>
                    </li>
                    <a href="#" class="menu-toggler open-menu "><i class="fa-solid fa-bars"></i></a>
                </ul>
            </div>
        </div>
        <a id="button" class="back-to-top"></a>
    </div>
</div>
<div class="search-bar-box">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-12">
                <form id="hidden-search-box" class="navbar-form hidden-search-box" role="search">
                    <!-- <div class="traingle"></div> -->
                    <div class="input-group add-on">
                        <input class="form-control addon-text-box" placeholder="Search here" name="s"
                            type="text">
                        <button type="submit" class="input-group-btn addon-btn">
                            <i class="fa fa-search flip-icon"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<header class="header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <nav class="header-navs">
                    <ul class="primary-navlist">
                        <li><a class="" href="{{ route('home') }}">Home</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('about') }}" type="button">About</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('women') }}">Women's</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('men') }}">Men's</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('engagement') }}">Engagement</a></li>
                        <div class="navs-border"></div>
                        <li> <a href="{{ route('custom.jewelry')}}">Custom Jewelry</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('signature')}}">Signature Collection</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('blog')}}">Blog</a></li>
                        <div class="navs-border"></div>
                        <li><a href="{{ route('social')}}">Social Responsibility</a></li>

                        <button class="menu-toggler close-btn"><i class="fa-solid fa-xmark"></i></button>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</header>
