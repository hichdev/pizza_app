<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendCartController extends Controller
{
    //


    public function showCart(){

       $cart = Session::get('cart');

        if($cart){

            //dump($cart);

            return view('cartproducts', ['cartItems' => $cart]);

        }else{


            return redirect()->route('menu');

        }

    }



    public function addToCart(Request $request, $id){

//        $request->session()->forget("cart");
//        $request->session()->flush();

        $prevCart =  $request->session()->get('cart');

        $cart = New Cart($prevCart);

        $product = Product::find($id);

        $cart->addItem($id,$product);

        $request->session()->put('cart', $cart);

        return redirect()->route('menu');
    }

    public function deleteItemFromCart(Request $request, $id){

        $cart = $request->session()->get('cart');


        if(array_key_exists($id, $cart->items)){

            unset($cart->items[$id]);

        }

        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);

        $updatedCart->updatePriceAndQuantity();

        $request->session()->put('cart',$updatedCart);

        return redirect()->back();


    }
}
