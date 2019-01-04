<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public $timestamps = false;


    public function user(){

        return $this->belongsTo('App\User');


    }

    public function status(){

    return $this->belongsTo('App\Status');

    }









}
