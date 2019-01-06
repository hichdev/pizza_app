<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    //
    public $timestamps = false;


    protected $fillable = ['item_id', 'order_id', 'item_quantity', 'item_name', 'item_price'];


    public function order(){

        return $this->belongsTo('App\Order');

    }


}
