@extends('layouts.app')

@section('content')


    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h4 class="m-b-10">Bestellingen</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Product list card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5></h5>
                                   </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <div class="table-content">
                                            <div class="project-table">
                                                <table id="e-product-list" class="table table-striped dt-responsive nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Datum</th>
                                                        <th>Klant</th>
                                                        <th>Status</th>
                                                        <th>Prijs</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @if(count($orders) != 0)




                                                    @foreach($orders as $order)
                                                        <tr>
                                                            <td >
                                                                {{ $order->id }}
                                                            </td>
                                                            <td >
                                                                {{ $order->date }}
                                                            </td>
                                                            <td>
                                                                {{ $order->user->firstname . ' '. $order->user->lastname }}
                                                            </td>
                                                            <td>
                                                                {{ $order->status->name }}
                                                            </td>
                                                            <td>
                                                                € {{ $order->price }}
                                                            </td>
                                                            <td class="action-icon">
                                                                <a href="{{ route('admin.order.edit', ['id'=> $order->id]) }}" class="btn btn-info col-sm-7 waves-effect waves-light btn-block">Details</a>
                                                            </td>
                                                        </tr>




                                                    @endforeach


                                                    @else


                                                        <tr>
                                                            <td class="text-center" colspan="6"><h2>Nog geen bestellingen geplaatst.</h2></td>




                                                        </tr>





                                                    @endif


                                                    </tbody>







                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center pagination">

                                    {{ $orders->links() }}

                                </div>
                            </div>
                            <!-- Product list card end -->
                        </div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
        </div>
    </div>
    </div>
    <!-- Main-body end -->


@endsection