<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
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


    public function createOrder(){

        $cart = Session::get('cart');

        if ($cart){

            $date = date('Y-m-d H:i:s');
            $newOrderArray = array('user_id' => Auth::User()->id, 'date' => $date ,'status_id' => 1, 'price' => $cart->totalPrice  );
            $create_order = DB::table('orders')->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();


            foreach($cart->items as $cart_item){

                $item_id = $cart_item['data']['id'];
                $item_name = $cart_item['data']['name'];
                $item_price = $cart_item['data']['price'];
                $newItemsCurrentOrder = array('item_id' => $item_id, 'order_id' => $order_id, 'item_name' => $item_name, 'item_price' => $item_price);
                $created_order_items = DB::table('order_items')->insert($newItemsCurrentOrder);

            }

            Session::forget('cart');
            Session::flush();
            return redirect()->route('menu');

        }

    }

    public function checkoutProducts(){

        $cart = Session::get('cart');

        return view('checkoutProducts')->with('cartItems', $cart);




    }
}
