@extends('layouts.frontend')


@section('content')





    <div class="site-panel"style="margin-top:110px">
        <div class="container">
            <div class="row">

                <div class="col-md-9 ">
                    <div class= "content-box well">
                        <legend>Mijn bestellingen</legend>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Datum bestelling</th>
                                        <th>Afhalen/levering</th>
                                        <th>Status</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    @if(count($orders) != 0)

                                    @foreach($orders as $order)

                                        <tr class="danger">
                                            <td>{{ \Carbon\Carbon::parse($order->date)->format('d-m-Y')  }}</td>
                                            <td>{{ $order->delivery }}</td>
                                            <td>{{ $order->status->name }}</td>
                                            <td> <a href="{{ route('profile.orderDetails', ['id'=> $order->id]) }}" class="btn btn-info col-sm-7 waves-effect waves-light btn-block">Details</a></td>
                                        </tr>


                                    @endforeach



                                    @else

                                        <tr>
                                            <td><h2>Nog geen bestellingen geplaatst.</h2></td>

                                        </tr>


                                    @endif



                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

























@endsection