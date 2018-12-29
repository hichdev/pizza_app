@extends('layouts.frontend')

@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--18">
        <div class="ht__bradcaump__wrap d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Menu Lijst</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Menu Grid Area -->
    <section class="food__menu__grid__area section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="food__nav nav nav-tabs" role="tablist">


                        @foreach($categories as $category)

                            <a id="nav-snacks-tab" class="{{ $category->name == 'pizza' ? 'active' : '' }}" data-toggle="tab" href="#{{ $category->name }}" role="tab">{{ $category->name }}</a>


                        @endforeach

                    </div>
                </div>
            </div>
            <div class="row mt--30">
                <div class="col-lg-12">
                    <div class="fd__tab__content tab-content" id="nav-tabContent">

                        @foreach($categories as $category)
                            <div class="food__list__tab__content tab-pane fade {{ $category->name == 'pizza' ? 'show active' : '' }}" id="{{ $category->name }}" role="tabpanel">

                            @foreach($category->product as $product)


                                <!-- Start Single Food -->
                                    <div class="single__food__list d-flex wow fadeInUp">
                                        <div class="food__list__thumb" >
                                            <a href="#">
                                                <img src="{{ $product->picture }}" alt="list food images" >
                                            </a>
                                        </div>
                                        <div class="food__list__inner d-flex align-items-center justify-content-between">
                                            <div class="food__list__details">
                                                <h2>{{ $product->name }}</h2>
                                                <p>{{ $product->description }}</p>
                                                <div class="list__btn">
                                                    <a class="food__btn grey--btn theme--hover" href="menu-details.html">Order Now</a>
                                                </div>
                                            </div>
                                            <div class="food__rating">
                                                <div class="list__food__prize">
                                                    <span>€ {{ $product->price }}</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Food -->

                                @endforeach

                            </div>


                        @endforeach





                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Menu Grid Area -->



@endsection



