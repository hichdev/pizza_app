@extends('layouts.frontend')




@section('content')

    <!-- Start Slider Area -->
    <div class="slider__area slider--two">
        <div class="slider__activation--1">
            <!-- Start Single Slide -->
            <div class="slide fullscreen bg-image--7 poss--relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="slider__content">
                                <div class="slider__inner">

                                    <h2 style="background-color: red; width: 600px; padding: 10px; margin: 0 auto;">Pizza Order System </h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide__pizza">
                    <img src="{{ asset('frontend/images/shape/slider-pizza.png') }}" alt="pizza images">
                </div>
            </div>
            <!-- End Single Slide -->
        </div>
    </div>
    <!-- End Slider Area -->




@endsection