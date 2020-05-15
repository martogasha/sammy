<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable=[
        'delivery_firstName','delivery_lastName','delivery_phone'
    ];
}
