<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $fillable = [

        'straatNaam', 'nummer', 'postcode', 'stad', 'land'

    ];





}
