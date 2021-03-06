<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Session::get('cart');



        if ($cart){

            $quantity = $cart->totalQuantity;

            return view('home')->with('cartItems', $cart)->with('quantity', $quantity);


        }else{

            return view('home')->with('cartItems', $cart);

        }



    }
}
