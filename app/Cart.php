<?php
/**
 * Created by PhpStorm.
 * User: hicham
 * Date: 29/12/2018
 * Time: 16:10
 */

namespace App;


class Cart
{

    public $items;
    public $totalQuantity;
    public $totalPrice;


    public function __construct($prevCart)
    {
        if ($prevCart != null){

            $this->items = $prevCart->items;
            $this->totalQuantity = $prevCart->totalQuantity;
            $this->totalPrice = $prevCart->totalPrice;


        }
        else{

            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;

        }


    }


    public function addItem($id, $product){






        if(array_key_exists($id, $this->items)){

            $productToAdd = $this->items[$id];
            $productToAdd['quantity']++;
            $productToAdd['totalSinglePrice'] = $productToAdd['quantity'] * $product->price;



        }else{

            $productToAdd = ['quantity' => 1, 'totalSinglePrice' => $product->price, 'data' => $product ];


        }


        $this->items[$id] = $productToAdd;
        $this->totalQuantity++;
        $this->totalPrice = $this->totalPrice + $product->price;



    }


    public function updatePriceAndQuantity(){

        $totalPrice = 0;
        $totalQuantity = 0;



        foreach($this->items as $item){


            $totalQuantity = $totalQuantity + $item['quantity'];
            $totalPrice = $totalPrice + $item['totalSinglePrice'];
        }



        $this->totalPrice = $totalPrice;

        $this->totalQuantity = $totalQuantity;




    }


}