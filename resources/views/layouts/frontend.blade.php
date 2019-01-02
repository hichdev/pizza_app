<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aahar || Food Delivery Html5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{ asset('frontend/images/icon.png')}}">

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
                            <a href="index.html">
                                <img src="{{ asset('frontend/images/logo/foody.png')}}" alt="logo images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                        <div class="main__menu__wrap">
                            <nav class="main__menu__nav d-none d-lg-block">
                                <ul class="mainmenu">
                                    <li class="drop"><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About</a></li>
                                    <li class="drop"><a href="menu-list.html">Menu</a>
                                        <ul class="dropdown__menu">
                                            <li><a href="menu-list.html">Menu List</a></li>
                                            <li><a href="menu-details.html">Menu Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li class="drop"><a href="blog-mesonry.html">Blog</a>
                                        <ul class="dropdown__menu">
                                            <li><a href="blog-mesonry.html">Blog Mesonry</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="#">Pages</a>
                                        <ul class="dropdown__menu">
                                            <li><a href="service.html">Service</a></li>
                                            <li><a href="cart.html">Cart Page</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li><a href="contact.html">Contact Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                    <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                        <div class="header__right d-flex justify-content-end">
                            @guest()
                            <div class="log__in">
                                <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                            </div>

                                @else

                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#">Profiel</a>
                                </div>

                            @endguest
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
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="footer">
                            <h2 class="ftr__title">About Aahar</h2>
                            <div class="footer__inner">
                                <div class="ftr__details">
                                    <p>Lorem ipsum dolor sit amconsectetur adipisicing elit,</p>
                                    <div class="ftr__address__inner">
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-home"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p>Elizabeth Tower. 6th Floor Medtown, New York</p>
                                            </div>
                                        </div>
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-phone"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p><a href="#">+088 01673-453290</a></p>
                                                <p><a href="#">+088 01773-458290</a></p>
                                            </div>
                                        </div>
                                        <div class="ftr__address">
                                            <div class="ftr__address__icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="frt__address__details">
                                                <p><a href="#">Aahardelivery@email.com</a></p>
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
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-6 col-lg-3 col-sm-12 sm--mt--40">
                        <div class="footer gallery">
                            <h2 class="ftr__title">Our Gallery</h2>
                            <div class="footer__inner">
                                <ul class="sm__gallery__list">
                                    <li><a href="#"><img src="images/gallery/sm-img/1.jpg" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="images/gallery/sm-img/2.jpg" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="images/gallery/sm-img/3.jpg" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="images/gallery/sm-img/4.jpg" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="images/gallery/sm-img/5.jpg" alt="gallery images"></a></li>
                                    <li><a href="#"><img src="images/gallery/sm-img/6.jpg" alt="gallery images"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="footer">
                            <h2 class="ftr__title">Opening Time</h2>
                            <div class="footer__inner">
                                <ul class="opening__time__list">
                                    <li>Saturday<span>.......</span>9am to 11pm</li>
                                    <li>Sunday<span>.......</span>9am to 11pm</li>
                                    <li>Monday<span>.......</span>9am to 11pm</li>
                                    <li>Tuesday<span>.......</span>9am to 11pm</li>
                                    <li>Wednesday<span>.......</span>9am to 11pm</li>
                                    <li>Thursday<span>.......</span>9am to 11pm</li>
                                    <li>Friday<span>.......</span>9am to 11pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                    <!-- Start Single Footer -->
                    <div class="col-md-6 col-lg-3 col-sm-12 md--mt--40 sm--mt--40">
                        <div class="footer">
                            <h2 class="ftr__title">Latest Post</h2>
                            <div class="footer__inner">
                                <div class="lst__post__list">
                                    <div class="single__sm__post">
                                        <div class="sin__post__thumb">
                                            <a href="blog-details,html">
                                                <img src="images/blog/sm-img/1.jpg" alt="blog images">
                                            </a>
                                        </div>
                                        <div class="sin__post__details">
                                            <h6><a href="blog-details.html">Chicken Shawarma </a></h6>
                                            <p>Lordo loram consecte turadip isicing</p>
                                        </div>
                                    </div>
                                    <div class="single__sm__post">
                                        <div class="sin__post__thumb">
                                            <a href="blog-details,html">
                                                <img src="images/blog/sm-img/2.jpg" alt="blog images">
                                            </a>
                                        </div>
                                        <div class="sin__post__details">
                                            <h6><a href="blog-details.html">Fruits Desert</a></h6>
                                            <p>Lordo loramcon secte turadipi sicing</p>
                                        </div>
                                    </div>
                                    <div class="single__sm__post">
                                        <div class="sin__post__thumb">
                                            <a href="blog-details,html">
                                                <img src="images/blog/sm-img/3.jpg" alt="blog images">
                                            </a>
                                        </div>
                                        <div class="sin__post__details">
                                            <h6><a href="blog-details.html">Vanilla Pastry</a></h6>
                                            <p>Lordo loramcon secte turadip isicing</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer -->
                </div>
            </div>
        </div>
        <div class="copyright bg--theme">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="copyright__inner">
                            <div class="cpy__right--left">
                                <p>@All Right Reserved.<a href="https://freethemescloud.com/">Free themes Cloud</a></p>
                            </div>
                            <div class="cpy__right--right">
                                <a href="#">
                                    <img src="images/icon/shape/2.png" alt="payment images">
                                </a>
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
                        <button class="cartbox__item__remove">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div><!-- //Cartbox Single Item -->

                    @endforeach


                </div>
                <div class="cartbox__total">
                    <ul>
                        <li class="grandtotal">Total<span class="price">{{ $cartItems->totalPrice }}</span></li>
                    </ul>
                </div>
                <div class="cartbox__buttons">
                    <a class="food__btn" href="{{ route('cartproducts') }}"><span>View cart</span></a>
                    <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
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
