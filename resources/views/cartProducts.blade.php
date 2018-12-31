@extends('layouts.frontend')


@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--18">
        <div class="ht__bradcaump__wrap d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Mijn keuze</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="cart-main-area section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ol-lg-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Afbeelding</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Prijs</th>
                                    <th class="product-quantity">Aantal</th>
                                    <th class="product-subtotal">Totaal</th>
                                    <th class="product-remove">Verwijder</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cartItems->items as $item )

                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img src="{{ $item['data']['picture'] }}" alt="product img" /></a></td>
                                    <td class="product-name"><p>{{ $item['data']['name'] }}</td>
                                    <td class="product-price"><span class="amount">€ {{ $item['data']['price'] }}</span></td>
                                    <td class="product-quantity">{{ $item['quantity'] }}</td>
                                    <td class="product-subtotal">{{ $item['totalSinglePrice'] }}</td>
                                    <td class="product-remove"><a href="{{ route('deleteItemFromCart', ['id'=> $item['data']['id']]) }}">X</a></td>
                                </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="cartbox__btn">
                        <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">

                            <li><a href="{{ route('checkoutProducts') }}">Afrekenen</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 offset-lg-9">
                    <div class="cartbox__total__area">

                        <div class="cart__total__amount">
                            <span>Totaal</span>
                            <span>{{ $cartItems->totalPrice }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->



@endsection