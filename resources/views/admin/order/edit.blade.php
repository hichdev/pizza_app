@extends('layouts.app')

@section('content')

    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Bestelling #{{ $order->id }}</h4>
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


                                        <table class="table table-border table-xs">
                                            <tbody>

                                            <tr>
                                                <td>Klant:</td>
                                                <td class="text-right">{{ $order->user->firstname ." " . $order->user->lastname}}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="icofont icofont-id-card"></i> Gsm nummer:</td>
                                                <td class="text-right">{{ $order->user->mobilephone }}</td>
                                            </tr>

                                            <tr>
                                                <td><i class="icofont icofont-spinner-alt-3"></i>Adres:</td>
                                                <td class="text-right">{{ $order->user->address->straatNaam. " ". $order->user->address->nummer. ", ". $order->user->address->stad. " ". $order->user->address->postcode }}</td>
                                            </tr>

                                            </tbody>
                                        </table>





                                        <form action="{{ route('admin.order.update', ['id' => $order->id]) }}" method="POST" enctype="multipart/form-data">

                                            {{ csrf_field() }}



                                            <div class="table-responsive">
                                                <div class="table-content">
                                                    <div class="project-table">
                                                        <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                            <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Naam</th>
                                                                <th>Aantal</th>
                                                                <th>Prijs</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>





                                                            @foreach($order_items as $item)
                                                                <tr>
                                                                    <td >
                                                                        {{ $item->id }}
                                                                    </td>
                                                                    <td >
                                                                        {{ $item->item_name }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $item->item_quantity }}
                                                                    </td>
                                                                    <td>
                                                                        €{{ $item->item_price }}
                                                                    </td>

                                                                </tr>




                                                            @endforeach





                                                            </tbody>







                                                        </table>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select name="status_id" class="form-control">


                                                        @foreach($statusses as $status)

                                                            <option value="{{ $status->id }}" {{ $status->id == $order->status_id ? 'selected' : '' }}>{{ $status->name }}</option>

                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-2"> </div>

                                                <div class="col-sm-10">
                                                    <button class="btn btn-primary waves-effect waves-light " type="submit" >Wijzig status</button>
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



