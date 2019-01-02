<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Session;

class PaymentsController extends Controller
{
    //


    public function showPaymentPage(){

        $payment_info = Session::get('payment_info');



        $cart = Session::get('cart');

        if($payment_info['status_id'] == 1){

            return view('payment.paymentpage', ['payment_info' => $payment_info])->with('cartItems', $cart);

        }else{
            return redirect()->route('/')->with('cartItems', $cart);
        }




    }





}
