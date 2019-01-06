<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pizza order system | Eindwerk HBO5 Hicham Kadddouri</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">

    <!-- Modernizer js -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->



<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Start Header Area -->
    <header class="htc__header bg--white">
        <!-- Start Mainmenu Area -->
        <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                Pizza Frontend website
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                        <div class="main__menu__wrap">
                            <nav class="main__menu__nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li class="drop"><a href="{{ route('home') }}">Home</a></li>

                                    <li class="drop"><a href="{{ route('menu') }}">Menu</a>

                                    </li>


                                    @if (Auth::check())

                                    <li class="drop"><a href="#">Mijn profiel</a>
                                        <ul class="dropdown__menu">
                                            <li><a href="{{ route('profile.orders') }}">Bekijk bestellingen</a></li>
                                            <li><a href="{{ route('profile.edit') }}">Wijzig gegevens</a></li>
                                            <li><a href="{{ route('user.logout') }}">Log uit</a></li>
                                        </ul>
                                    </li>

                                    @else
                                    <li><a href="{{ route('login') }}">Aanmelden</a></li>

                                    @endif



                                </ul>
                            </nav>

                        </div>
                    </div>

                    <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                        <div class="header__right d-flex justify-content-end">

                            <div class="shopping__cart">
                                <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                <div class="shop__qun">

                                    @if($cartItems)

                                        <span> {{ $quantity }} </span>


                                    @else

                                        <span>0</span>


                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none"></div>
                <!-- Mobile Menu -->
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
    <!-- End Header Area -->
   @yield('content')
    <!-- Start Footer Area -->
    <footer class="footer__area footer--1">
        <div class="footer__wrapper bg__cat--1 section-padding--lg">
            <div class="container">
                <div class="row">
                    <!-- Start Single Footer -->
                    <div class="col-md-6 ">
                        <div class="footer">
                            <h2 class="ftr__title">Bezoek onze winkel</h2>
                            <div class="footer__inner">
                                <div class="ftr__details">
                                    <p>Voor afhalingen kan u terecht op onderstaand adres</p>
                                    <div class="ftr__address__inner">
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-home"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p>Valentin Vaerwyckweg 1, 9000 Gent</p>
                                            </div>
                                        </div>
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-phone"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p><a href="#">09 243 20 04</a></p>
                                            </div>
                                        </div>
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p><a href="#">info@hogent.be</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="social__icon">
                                        <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="footer">
                            <h2 class="ftr__title">Openingsuren</h2>
                            <div class="footer__inner">
                                <ul class="opening__time__list">
                                    <li>Maandag<span>.......</span>12 tot 00:00</li>
                                    <li>Dinsdag<span>.......</span>12 tot 00:00</li>
                                    <li>Woensdag<span>.......</span>12 tot 00:00</li>
                                    <li>Donderdag<span>.......</span>12 tot 00:00</li>
                                    <li>Vrijdag<span>.......</span>12 tot 00:00</li>
                                    <li>Zaterdag<span>.......</span>12 tot 00:00</li>
                                    <li>Zondag<span>.......</span>12 tot 00:00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright bg--theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright__inner">
                            <div class="cpy__right--left">
                                <p>@Alle rechten voorbehouden.<a href="#">Hicham Kaddouri</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- Login Form -->




    <!-- Cartbox -->
    <div class="cartbox-wrap">
        <div class="cartbox text-right">
            <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
            <div class="cartbox__inner text-left">
                <div class="cartbox__items">

                    @if($cartItems)

                @foreach($cartItems->items as $item )

                    <!-- Cartbox Single Item -->
                    <div class="cartbox__item">
                        <div class="cartbox__item__thumb">
                            <a href="product-details.html">
                                <img src="{{ $item['data']['picture'] }}" alt="small thumbnail">
                            </a>
                        </div>
                        <div class="cartbox__item__content">
                            <h5><p>{{ $item['data']['name'] }}</p></h5>
                            <p>Aantal <span>{{ $item['quantity'] }}</span></p>
                            <span class="price">€ {{ $item['data']['price'] }}</span>
                        </div>

                    </div><!-- //Cartbox Single Item -->

                    @endforeach


                </div>
                <div class="cartbox__total">
                    <ul>
                        <li class="grandtotal">Totaal<span class="price">€{{ $cartItems->totalPrice }}</span></li>
                    </ul>
                </div>
                <div class="cartbox__buttons">
                    <a class="food__btn" href="{{ route('cartproducts') }}"><span>Ga naar winkelmandje</span></a>
                    <a class="food__btn" href="{{ route('checkoutProducts') }}"><span>Afrekenen</span></a>
                </div>

                @else

                    <h2>Geen Producten gekozen, gelieve eerst een product toe te voegen</h2>



                @endif



            </div>
        </div>
    </div><!-- //Cartbox -->
</div><!-- //Main wrapper -->
</div>
<!-- JS Files -->
<script src="{{ asset('frontend/js/vendor/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('frontend/js/popper.min.js')}}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/js/plugins.js')}}"></script>
<script src="{{ asset('frontend/js/active.js')}}"></script>



</body>
</html>
