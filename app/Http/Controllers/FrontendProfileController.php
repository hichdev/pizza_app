<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendProfileController extends Controller
{
    //



    public function orders(){


        $orders = Order::orderBy('date', 'desc')->where('user_id', Auth::user()->id)->get();



        $cart = Session::get('cart');

        return view('profile.orders', ['orders' => $orders])->with('cartItems', $cart);


    }


    public function details($id){

        $order = Order::find($id);

        $order_items = Order_item::where('order_id', $id)->get();

        $cart = Session::get('cart');


        return view('profile.orderDetails')->with('order', $order)->with('order_items', $order_items)->with('cartItems', $cart);




    }

}
