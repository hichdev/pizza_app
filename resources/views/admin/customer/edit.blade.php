@extends('layouts.app')

@section('content')

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Wijzig profiel van {{ $customer->firstname }}</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <!-- [ page content ] start -->
                        <div class="row">
                            <div class="col-sm-12">

                                <!-- Input Alignment card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <p></p>
                                    </div>
                                    @if(count($errors) > 0)

                                        <ul class="list-group">

                                            @foreach($errors->all() as $error)


                                                <li class="list-group-item text-danger">

                                                    {{ $error }}

                                                </li>


                                            @endforeach

                                        </ul>


                                    @endif
                                    <div class="card-block">
                                        <form action="{{ route('admin.customers.update', ['id' => $customer->id]) }}" method="POST">

                                            {{ csrf_field() }}

                                            <div class="form-group row">
                                                <label for="firstname" class="col-sm-2 col-form-label">Voornaam</label>
                                                <div class="col-sm-10">
                                                    <input id="firstname" name="firstname" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->firstname }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="lastname" class="col-sm-2 col-form-label">Achternaam</label>
                                                <div class="col-sm-10">
                                                    <input id="lastname" name="lastname" type="text" class="form-control form-control-normal"
                                                           value={{ $customer->lastname }}>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input id="email" name="email" type="email" class="form-control form-control-normal"
                                                           value="{{ $customer->email }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="mobilephone" class="col-sm-2 col-form-label">Gsm nummer</label>
                                                <div class="col-sm-10">
                                                    <input id="mobilephone" name="mobilephone" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->mobilephone }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="streetname" class="col-sm-2 col-form-label">Adres</label>
                                                <div class="col-sm-6">
                                                    <input id="streetname" name="streetname" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->address->straatNaam }}">
                                                </div>
                                                <div class="col-sm-1">
                                                    <input id="housenumber" name="housenumber" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->address->nummer }}">
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label for="city" class="col-sm-2 col-form-label">Stad</label>
                                                <div class="col-sm-10">
                                                    <input id="city" name="city" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->address->stad }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="postalcode" class="col-sm-2 col-form-label">Gsm nummer</label>
                                                <div class="col-sm-10">
                                                    <input id="postalcode" name="postalcode" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->address->postcode }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="country" class="col-sm-2 col-form-label">Land</label>
                                                <div class="col-sm-10">
                                                    <input id="country" name="country" type="text" class="form-control form-control-normal"
                                                           value="{{ $customer->address->land }}">
                                                </div>
                                            </div>





                                            <div class="form-group row">
                                                <div class="col-sm-2"> </div>

                                                <div class="col-sm-5">
                                                    <button class="btn btn-primary waves-effect waves-light " type="submit" >Wijzigingen opslaan</button>
                                                </div>


                                                <div class="col-sm-5">

                                                    <a href="{{ route('admin.customer.delete', ['id' => $customer->id]) }}" class="btn btn-danger waves-effect waves-light ">Verwijder profiel</a>


                                                </div>


                                            </div>



                                        </form>
                                    </div>
                                </div>
                                <!-- Input Alignment card end -->
                            </div>
                        </div>
                    </div>
                    <!-- Page body end -->
                </div>
            </div>
            <!-- Main-body end -->

        </div>
    </div>
    </div>
    <!-- [ page content ] end -->
    </div>
    </div>
    </div>
    </div>
    </div>

@endsection



