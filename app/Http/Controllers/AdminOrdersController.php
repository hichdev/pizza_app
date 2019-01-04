<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_item;
use App\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminOrdersController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth:adminusers');
    }


    public function index(){

        $orders = Order::orderBy('date', 'desc')->paginate(5);

        return view('admin.order.index', ['orders'=> $orders]);


    }


    public function edit($id){

        $order = Order::find($id);

        $order_items = Order_item::where('order_id', $id)->get();


        //dd($order_items)->all();

        return view('admin.order.edit')->with('order', $order)->with('statusses', Status::all())->with('order_items', $order_items);
    }

    /**
     * @param Request $request
     * @param $id
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id){

        $this->validate($request, [

            'status_id'=> 'required'


        ]);

        $order= Order::find($id);


        $order->status_id = $request->status_id;


        $order->save();

        Session::flash('success', 'Status van de bestelling werd gewijzigd');


        return redirect()->route('admin.order.index');




    }



}
