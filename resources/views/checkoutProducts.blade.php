@extends('layouts.frontend')


@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--18">
        <div class="ht__bradcaump__wrap d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Checkout</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span>
                                <span class="breadcrumb-item active">Checkout</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->

    <section class="htc__checkout bg--white section-padding--lg">
        <!-- Checkout Section Start-->
        <div class="checkout-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-30">

                        <!-- Checkout Accordion Start -->
                        <div id="checkout-accordion">

                            @guest
                            <!-- Checkout Method -->
                            <div class="single-accordion">
                                <a class="accordion-head" data-toggle="collapse" data-parent="#checkout-accordion" href="#checkout-method">Login/registreer</a>

                                <div id="checkout-method" class="collapse show">
                                    <div class="checkout-method accordion-body fix">

                                        <ul class="checkout-method-list">
                                            <li class="active" data-form="checkout-login-form">Login</li>
                                            <li data-form="checkout-register-form">Registreer</li>
                                        </ul>

                                        <form method="post" action="{{ route('login') }}" class="checkout-login-form">
                                            @csrf
                                            <div class="row">
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="email" name="email"  type="email" placeholder="Emailadres" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus >

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $errors->first('email') }}</strong>

                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="password" name="password"   type="password" placeholder="Wachtwoord" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">

                                                            <strong>{{ $errors->first('password') }}</strong>

                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="input-box col-12"><input type="submit" value="Login"></div>
                                            </div>
                                        </form>

                                        <form method="post" action="{{ route('register') }}" class="checkout-register-form">
                                            @csrf
                                            <div class="row">
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="firstname" name="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" type="text" placeholder="Voornaam"
                                                    value="{{ old('firstname') }}" required>
                                                    @if ($errors->has('firstname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('firstname') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="lastname" name="lastname" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" type="text" placeholder="Naam"
                                                           value="{{ old('lastname') }}" required>
                                                    @if ($errors->has('lastname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('lastname') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="mobilephone" name="mobilephone" class="form-control{{ $errors->has('mobilephone') ? ' is-invalid' : '' }}" type="text" placeholder="Gsmnr."
                                                           value="{{ old('mobilephone') }}" required>
                                                    @if ($errors->has('mobilephone'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('mobilephone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Emailadres"
                                                           value="{{ old('email') }}" required>
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="streetname" name="streetname" class="form-control{{ $errors->has('streetname') ? ' is-invalid' : '' }}" type="text" placeholder="Straat"
                                                           value="{{ old('streetname') }}" required>
                                                    @if ($errors->has('streetname'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('streetname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="housenumber" name="housenumber" class="form-control{{ $errors->has('housenumber') ? ' is-invalid' : '' }}" type="text" placeholder="nummer"
                                                           value="{{ old('streetname') }}" required>
                                                    @if ($errors->has('housenumber'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('housenumber') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="postalcode" name="postalcode" class="form-control{{ $errors->has('postalcode') ? ' is-invalid' : '' }}" type="text" placeholder="Postcode"
                                                           value="{{ old('postalcode') }}" required>
                                                    @if ($errors->has('postalcode'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('postalcode') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="city" name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" placeholder="Stad"
                                                           value="{{ old('city') }}" required>
                                                    @if ($errors->has('city'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('city') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="country" name="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" type="text" placeholder="Land"
                                                           value="{{ old('country') }}" required>
                                                    @if ($errors->has('country'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="input-box col-md-6 col-12 mb--20">

                                                </div>

                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="Wachtwoord" required>
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="input-box col-md-6 col-12 mb--20">
                                                    <input id="password-confirm" name="password_confirmation" class="form-control" type="password" placeholder="Wachtwoord" required>

                                                </div>

                                                <div class="input-box col-12"><input type="submit" value="Register"></div>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>

                            @endguest

                                @if(Auth::check())
                            <!-- Billing Method -->
                            <div class="single-accordion">
                                <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#billing-method">Klantgegevens</a>
                                <div id="billing-method" class="collapse">

                                    <div class="accordion-body billing-method fix">

                                        <form action="#" class="billing-form checkout-form">
                                            <div class="row">

                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="text" placeholder="{{ Auth::user()->firstname }}" disabled>
                                                </div>

                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="text" placeholder="{{ Auth::user()->lastname }}" disabled>
                                                </div>

                                                <div class="col-12 mb--20">
                                                    <input placeholder="{{ Auth::user()->address->straatNaam. " " . Auth::user()->address->nummer}} " type="text" disabled>
                                                </div>
                                                <div class="col-12 mb--20">
                                                    <input placeholder="{{ Auth::user()->address->stad}}" type="text" disabled>
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input type="text" placeholder="{{ Auth::user()->address->land }}" disabled>
                                                </div>
                                                <div class="col-md-6 col-12 mb--20">
                                                    <input placeholder="{{ Auth::user()->address->postcode}}" type="text" disabled>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <input type="email" placeholder="{{ Auth::user()->email }}" disabled>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <input placeholder="{{ Auth::user()->mobilephone }}" type="text" disabled>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>



                                <form method="POST" action="{{ route('createNewOrder') }}">
                                @csrf

                            <!-- Payment Method -->
                            <div class="single-accordion">
                                <a class="accordion-head collapsed" data-toggle="collapse" data-parent="#checkout-accordion" href="#payment-method">Betaal methode</a>
                                <div id="payment-method" class="collapse">
                                    <div class="accordion-body payment-method fix">

                                        <ul class="payment-method-list">

                                           <li> <input type="radio"  name="payment_methode" value="cash" id="cash" style="visibility: hidden;" checked/><label for="cash">Cash</label></li>
                                           <li> <input type="radio"  name="payment_methode" value="paypal" id="Paypal" style="visibility: hidden;"/><label for="Paypal">Paypal</label></li>

                                        </ul>


                                    </div>
                                </div>
                            </div>


                        </div><!-- Checkout Accordion Start -->
                    </div>



                    @else


                </div><!-- Checkout Accordion Start -->
            </div>

                    @endif


                    <!-- Order Details -->
                    <div class="col-lg-6 col-12 mb-30">

                        <div class="order-details-wrapper">
                            <h2>your order</h2>
                            <div class="order-details">

                                    <ul>
                                        <li><p class="strong">product</p><p class="strong">totaal</p></li>

                                        @foreach($cartItems->items as $item)

                                        <li><p>{{ $item['data']['name'] . " x ". $item['quantity'] }}</p><p>€ {{ $item['totalSinglePrice'] }}</p></li>

                                        @endforeach


                                        <li><p class="strong">Levering/Afhalen</p><p>
                                                <input type="radio" name="order_shipping" value="delivery" id="order_shipping"  checked /><label for="delivery">Levering</label><br />
                                                <input type="radio"  name="order_shipping" value="pickup" id="order_shipping" /><label for="pickup">Afhalen</label>
                                            </p></li>
                                        <li><p class="strong">Totaal bestelling</p><p class="strong">€ {{ $cartItems->totalPrice }}</p></li>
                                        <li><button class="food__btn">Plaats bestelling</button></li>
                                    </ul>

                                </form>
                            </div>
                        </div>


                    </div>


        </div>

        <!-- Checkout Section End-->
    </section>




@endsection