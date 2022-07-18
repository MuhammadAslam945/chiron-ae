<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="{{asset('assets/img/logo.png')}}" rel="icon">

    <title>Chiron</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/fonts/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Dogfalo/materialize@master/extras/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/lightGallery/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    @livewireStyles
</head>

<body>
    <header class="header ps-header--full-width">
        <div class="ps-top-bar" style="background:#ed1d2d;">
            <div class="container">
                <div class="top-bar">
                    <div class="top-bar__left">
                        <ul class="nav-top">
                            <li class="nav-top-item" style="color:white;"><a class="nav-top-link" href="#"> <i class="fa fa-map" style="padding:5px;color:white;"></i>Fast and Free delivery</a></li>
                            <li class="nav-top-item" style="color:white;"><a class="nav-top-link" href="#"> <i class="fa fa-envelope" style="padding:5px;color:white;"></i>chiron@mail.com</a></li>

                        </ul>
                    </div>
                    <div class="top-bar__right">
                        <ul class="nav-top">
                            <li class="nav-top-item contact"><a class="nav-top-link" href="#" style="color:white;"> <i class="fa fa-envelope" style="color:white;"></i>support@chiron.ae</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-header--center header--mobile">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left">
                        <button class="navbar-toggler"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="header-inner__center"><a class="logo open" href="/"><img src="{{asset('assets/img/logo.png')}}" style="width:120px;" alt=""></a></div>
                    <div class="header-inner__right">
                        <button class="button-icon icon-sm search-mobile"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <section class="ps-header--center header-desktop">
            <div class="container">
                <div class="header-inner" style="border-bottom:1px solid #d6d6d6;">
                    <div class="header-inner__left" style="min-width:15%;"><a class="logo" href="/"><img src="{{asset('assets/img/logo.png')}}" alt="logo" style="width:120px;"></a>

                    </div>
                    @livewire('header-search-component')
                    <a class="btn  ps-top__phone" href="#" style="background:red;min-width:10%;position:relative;">
                        Organic Section
                    </a>
                    <div class="header-inner__right">

                        <button class="button-icon icon-md">
                            <div class="navigation-title"></div>
                            <div><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i></a>
                                @if(Route::has('login'))
                                @Auth
                                @if(Auth::user()->utype === 'ADM')
                                <div class="dropdown-menu" style="padding:10px;" aria-labelledby="dropdownAccount">
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('admin.dashboard')}}"><b>{{Auth::user()->name}}</b></a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('admin.dashboard')}}">Dashboard</a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="#">Account Setting</a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="/shop">Orders</a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="wishlist.html">Wishlist</a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="#">Shipping Address</a>
                                    <a class="dropdown-divider"></a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Log out</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </div>
                                @else
                                <div class="dropdown-menu" style="padding:10px;" aria-labelledby="dropdownAccount">
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('user.changepassword')}}"><b>{{Auth::user()->name}}</b></a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('user.dashboard')}}">Dashboard</a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('user.changepassword')}}">Account Setting</a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('user.orders')}}">Orders</a>
                                    <a class="dropdown-divider"></a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Log out</a>
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                                </div>
                                @endif
                                @else
                                <div class="dropdown-menu" style="padding:10px;" aria-labelledby="dropdownAccount">
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('login')}}"><b>Login</b></a>
                                    <a class="dropdown-item" style="font-size:16px;padding:10px;" href="{{route('register')}}">Register</a>

                                </div>

                                @endif
                                @endif
                            </div>
                    </div>
                    </button>
                    @livewire('wishlist-count-component')
                    @livewire('cart-count-component')


                </div>
            </div>
            </div>
        </section>
        <nav class="navigation" style="background:white;">
            <div class="container">
                @livewire('browse-categories-component')
                <ul class="menu">

                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="javascript:void(0);">Fresh</a><span class="sub-toggle"><i class="fa fa-arrow-down text-dark"></i></span>
                        <div class="mega-menu mega-shop">
                            <div class="mega-anchor"></div>
                            @php
                            $fresh=DB::table('categories')->where('name','Fresh')->first();
                            $sub=DB::table('sub_categories')->where('category_id',$fresh->id)->limit(4)->get();
                            @endphp
                            <div class="mega-menu__column">
                                @if(count( $sub ) > 0 )
                                <ul class="sub-menu--mega">
                                    @foreach($sub as $scategory)
                                    <li><a href="{{route('product.category',['category_slug'=>$fresh->slug,'scategory_slug'=>$scategory->slug])}}">{{$scategory->name}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>



                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="javascript:void(0);">Shop</a><span class="sub-toggle"><i class="fa fa-arrow-down text-dark"></i></span>
                        <div class="mega-menu mega-shop">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">

                                <ul class="sub-menu--mega">
                                    <li><a href="/shop">Shop</a></li>
                                    <li><a href="/cart">Shopping Cart</a></li>
                                    <li><a href="/checkout">Checkout</a></li>
                                    <li><a href="/wishlist">Wishlist</a></li>
                                    <li><a href="/">Compare</a></li>
                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                    <li><a href="{{route('login')}}">Login & Register</a></li>
                                </ul>
                            </div>



                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="javascript:void(0);">Pages</a><span class="sub-toggle"><i class="fa fa-arrow-down text-dark"></i></span>
                        <div class="mega-menu">
                            <div class="mega-anchor"></div>
                            <div class="mega-menu__column">
                                <h4>Page all<span class="sub-toggle"></span></h4>
                                <ul class="sub-menu--mega">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li><a href="faq.html">FAQs</a></li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="#">Blog</a>

                    </li>
                    <li class="menu-item-has-children has-mega-menu menu-item-branch"><a class="nav-link text-dark" href="#">Brand</a>

                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="flash-sale.html"><i class="fa fa-bolt"></i> Deals Today</a></li>
                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="flash-sale.html"><i class="fa fa-tag"></i> Special Prices</a></li>
                </ul>
                <div class="navigation-text">
                    <ul class="menu">
                        <li class="menu-item-has-children has-mega-menu"><a class="nav-link text-dark" href="javascript:void(0);"><i class="fa fa-history"></i> Recent Viewed</a>
                            <div class="mega-menu recent-view ">
                                <div class="mega-anchor"></div>
                                <div class="container">
                                    @php
                                    $recents=DB::table('products')->inRandomOrder()->limit(10)->get();
                                    @endphp
                                    <div class="slick-many-item">
                                        @foreach($recents as $product)
                                        <a class="recent-item" href="{{route('product-detail',['slug'=>$product->slug])}}"><img src="{{asset('assets/img/products')}}/{{$product->image}}" alt="{{$product->name}}" /></a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mobile-search--slidebar">
            <div class="mobile-search--content">
                <div class="mobile-search__header">
                    <div class="mobile-search-box">
                        <div class="input-group">
                            <input class="form-control" placeholder="I'm shopping for..." id="inputSearchMobile">
                            <div class="input-group-append">
                                <a href="/search" class="btn btn-md"> <i class="fa fa-search fa-2x mt-4"></i></a>
                            </div>
                        </div>
                        <button class="cancel-search"><i class="fa fa-close"></i></button>
                    </div>
                </div>

                <div class="mobile-search__result">
                    @php
                    $s_products=DB::table('products')->inRandomOrder()->limit(6)->get();
                    @endphp
                    <ul class="list-result">
                        @foreach($s_products as $product)
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="{{route('product-detail',['slug'=>$product->slug])}}"><img class="ps-product__thumbnail" src="{{asset('assets/img/products')}}/{{$product->image}}" alt="{{$product->name}}" /></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="{{route('product-detail',['slug'=>$product->slug])}}"><u>Organic</u> {{$product->name}}</a>

                                    <p class="ps-product__meta"> <span class="ps-product__price">{{$product->price}} د.إ</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </header>
    {{$slot}}
    @livewire('footer-component')
    <div class="ps-footer-mobile">
    <div class="menu__content">
        <ul class="menu--footer">

            <li class="nav-item"><a class="nav-link" href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li class="nav-item"><a class="nav-link footer-category" href="javascript:void(0);"><i class="fa fa-bars"></i><span>Category</span></a></li>
           @livewire('mobile-cart-count-component')
            @livewire('mobile-wishlist-count-component')
            @if(Route::has('login'))
            @Auth
            @if(Auth::user()->utype === 'ADM')
            <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fa fa-user-o"></i><span>Account</span></a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="{{route('user.dashboard')}}"><i class="fa fa-user-o"></i><span>Account</span></a></li>
            @endif
            @else
            <li class="nav-item"><a class="nav-link" href="{{route('login')}}"><i class="fa fa-user-o"></i><span>Account</span></a></li>
            @endif
            @endif
        </ul>
    </div>
</div>
<button class="btn scroll-top"><i class="fa fa-arrow-up"></i></button>
<div class="ps-preloader" id="preloader">
    <div class="ps-preloader-section ps-preloader-left"></div>
    <div class="ps-preloader-section ps-preloader-right"></div>
</div>
@livewire('mobile-categories-component')
<nav class="navigation--mobile">
    <div class="navigation__header">

        <div class="navigation-title">
            <button class="close-navbar-slide"><i class="fa fa-arrow-left"></i></button>
            <div>
            @if(Route::has('login'))
            @Auth
            @if(Auth::user()->utype === 'ADM')
            <span> <i class="fa fa-user-o"></i>Hi, </span><span class="account">{{Auth::user()->name}}</span><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-arrow-down text-dark"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="#"><b>My Account</b></a>
                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                    <a class="dropdown-item" href="#">Account Setting</a>
                    <a class="dropdown-item" href="shopping-cart.html">Orders</a>
                    <a class="dropdown-item" href="wishlist.html">Wishlist</a>
                    <a class="dropdown-item" href="#">Shipping Address</a>
                    <a class="dropdown-divider"></a>
                    <a class="dropdown-item"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Log out</a>
                    
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                </div>
            @else
            <span> <i class="fa fa-user-o"></i>Hi, </span><span class="account">{{Auth::user()->name}}</span><a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-arrow-down text-dark"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="{{route('user.changepassword')}}"><b>My Account</b></a>
                    <a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{route('user.changepassword')}}">Account Setting</a>
                    <a class="dropdown-item" href="{{route('user.orders')}}">Orders</a>
                    <a class="dropdown-item" href="/wishlist">Wishlist</a>
                    <a class="dropdown-item" href="#">Shipping Address</a>
                    <a class="dropdown-divider"></a>
                    <a class="dropdown-item"href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Log out</a>
                    
                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>
                </div>
                @endif
                @else
                <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" href="{{route('login')}}"><b>Login</b></a>
                    <a class="dropdown-item" href="{{route('register')}}">Register</a>
                 
                </div>
            @endif
            @endif
            </div>
        </div>
    </div>
    <div class="navigation__content">
        <ul class="menu--mobile">
            <li class="menu-item-has-children"><a href="/">Home</a> </li>
            <li class="menu-item-has-children"><a href="#">Shop</a><span class="sub-toggle"><i class="fa fa-arrow-down text-dark"></i></span>
                <ul class="sub-menu">
                    <li><a href="/shop">Shop</a></li>
                    <li><a href="/cart">Shopping Cart</a></li>
                    <li><a href="/wishlist">My Wishlist</a></li>
                    <li><a href="/checkout">Checkout</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="">Pages</a><span class="sub-toggle"><i class="fa fa-arrow-down text-dark"></i></span>
                <ul class="sub-menu">
                    
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                  
                </ul>
            </li>
            <li class="menu-item-has-children"><a href="">Blog</a>
            </li>
            <li class="menu-item-has-children"><a href="product-default.html">Brand</a></li>
            <li class="menu-item-has-children"><a href="flash-sale.html">Flash Sale</a></li>
        </ul>
        <ul class="menu--mobile">
            <li class="daily-deals"><a>Daily deals</a></li>
        </ul>
    </div>
    <div class="navigation__footer">
        <ul class="menu--icon">
            <li class="footer-item"><a class="footer-link" href="#"><i class="fa fa-mobile"></i><span>HOTLINE: <span class='text-success'>(+1) 970 978-6290</span> (Free)</span></a></li>
        </ul>
    </div>
</nav>

    <script src="{{asset('assets/plugins/jquery.min.js')}}"></script>
    <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/slick/slick.js')}}"></script>
    <script src="{{asset('assets/plugins/lightGallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('assets/plugins/nouislider.min.js')}}"></script>
    <!-- custom code-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://use.fontawesome.com/0b84b2eea5.js"></script>
    @livewireScripts
    @stack('scripts')
</body>

</html>