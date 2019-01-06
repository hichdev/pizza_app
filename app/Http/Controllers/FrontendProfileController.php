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

        if($cart){
            $quantity = $cart->totalQuantity;

            return view('profile.orders', ['orders' => $orders])->with('cartItems', $cart)->with('quantity', $quantity);


        }else{
            return view('profile.orders', ['orders' => $orders])->with('cartItems', $cart);

        }




    }


    public function details($id){

        $order = Order::find($id);

        $order_items = Order_item::where('order_id', $id)->get();

        $cart = Session::get('cart');


        if($cart){

            $quantity = $cart->totalQuantity;


            return view('profile.orderDetails')->with('order', $order)->with('order_items', $order_items)->with('cartItems', $cart)->with('quantity', $quantity);


        }else{

            return view('profile.orderDetails')->with('order', $order)->with('order_items', $order_items)->with('cartItems', $cart);

        }



    }

    public function profileEdit(){

        $user = Auth::user();
        $cart = Session::get('cart');

        if ($cart){
            $quantity = $cart->totalQuantity;

            return view('profile.edit')->with('user', $user )->with('cartItems', $cart)->with('quantity', $quantity);
        }else{
            return view('profile.edit')->with('user', $user )->with('cartItems', $cart);
        }





    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function profileUpdate(Request $request){

        $this->validate($request, [

            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'mobilephone' => 'required|digits:11',
            'streetname' => 'required',
            'housenumber' => 'required|integer',
            'city' => 'required',
            'postalcode' => 'required|digits:4',
            'country' => 'required'

        ]);

        $user = Auth::user();







        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->firstname = $request->firstname;
        $user->mobilephone = $request->mobilephone;
        $user->address->straatNaam = $request->streetname;
        $user->address->nummer = $request->housenumber;
        $user->address->postcode = $request->postalcode;
        $user->address->stad = $request->city;
        $user->address->land = $request->country;
        $user->password = bcrypt($request->password);


        $user->save();
        $user->address->save();

        Session::flash('success', 'De aanpassingen werden opgeslaan');

        return redirect()->back();




    }

}
