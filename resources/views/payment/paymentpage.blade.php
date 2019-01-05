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

                            <li><a href="" id="paypal-button"></a></li>

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



<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
            sandbox: 'AWzxZt70OcDru9KtuGC2Th7yZasyDPlIjw69-kWex94SnOD99KkjuMbXF105v1WUcvPM_6gbUTJAJzvt',
            production: 'demo_production_client_id'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
            size: 'small',
            color: 'gold',
            shape: 'pill',
        },

        // Enable Pay Now checkout flow (optional)
        commit: true,

        // Set up a payment
        payment: function(data, actions) {
            return actions.payment.create({
                transactions: [{
                    amount: {
                        total: "{{ $payment_info['price'] }}",
                        currency: 'EUR'
                    }
                }]
            });
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                // Show a confirmation message to the buyer
                window.alert('Thank you for your purchase!');
                console.log(data);
            });
        }
    }, '#paypal-button');

</script>









