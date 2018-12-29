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

                                    <div class="slider__input">
                                        <input placeholder="Type Place, City.Division" type="text">
                                        <input class="res__search" placeholder="Restaurant" type="text">
                                        <div class="src__btn">
                                            <a href="#">Search</a>
                                        </div>
                                    </div>
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