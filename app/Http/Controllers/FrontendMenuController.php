<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontendMenuController extends Controller
{
    //

    public function index(){

        $categories = Category::with('product')->get();


        return view('menu', ['categories' => $categories]);




    }








}
