@extends('layouts.frontend')

@section('content')


    <section class="htc__checkout bg--white section-padding--lg">
        <!-- Checkout Section Start-->
        <div class="checkout-section">
            <div class="container">
                <div class="row">




        <!-- Order Details -->
            <div class="col-lg-6 col-12 mb-30">


                <div class="order-details-wrapper">

                    <h2>Betaal je bestelling met paypal</h2>

                    <div class="order-details">


                        <ul>

                            <li><p class="strong">Bestelling status</p><p class="strong">

                                    @if($payment_info['status_id'] == 1)


                                </p>Nog niet betaald</li>




                            @endif

                            <li><p class="strong">Levering/Afhalen</p>

                                @if($payment_info['delivery'] == 'delivery')
                                    <p>

                                        Levering
                                    </p>

                                @else

                                    <p>Afhaling</p>

                                @endif
                            </li>

                            <li><p class="strong">Totaal bestelling</p><p class="strong">€ {{ $payment_info['price'] }} </p></li>

                            <li><button class="food__btn">Betaal bestelling</button></li>

                        </ul>

                    </div>

                </div>

            </div>

                </div>

        </div>
        </div>

        <!-- Checkout Section End-->
    </section>





















@endsection









