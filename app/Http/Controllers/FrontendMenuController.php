<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendMenuController extends Controller
{
    //

    public function index(){

        $categories = Category::with('product')->get();

        $cart = Session::get('cart');

        return view('menu', ['categories' => $categories])->with('cartItems', $cart);


    }










}
