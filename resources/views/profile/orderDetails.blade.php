@extends('layouts.frontend')



@section('content')

    <div class="container">
        <div class="title">
            <h3>Bestelling #{{ $order->id }}</h3>
        </div>
        <div class="row">

            <div class="col-md-4 align-items-center">

                <ul class="list-group">
                    <li class="list-group-item disabled"><strong>Datum:</strong> {{ \Carbon\Carbon::parse($order->date)->format('d-m-Y')  }}</li>
                    <li class="list-group-item"><strong>Levering/Afhalen: </strong>{{ $order->delivery }}</li>
                    <li class="list-group-item"><strong>Betaal methode: </strong>{{ $order->payment_methode }}</li>
                    <li class="list-group-item"><strong>Status: </strong>{{ $order->status->name }}</li>
                    <li class="list-group-item"><strong>Totaal prijs: </strong>€{{ $order->price }}</li>

                </ul>
            </div>


            <div class="col-md-8">
                <h4>Bestelde producten:</h4>
                <br/>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Product naam</th>
                            <th>Prijs</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($order_items as $item)
                            <tr>
                                <td>{{ $item->item_name }}</td>
                                <td>{{ $item->item_price }}</td>
                            </tr>



                        @endforeach



                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>




@endsection