<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $fillable = [

        'straatnaam', 'nummer', 'postcode', 'stad', 'land'

    ];





}
