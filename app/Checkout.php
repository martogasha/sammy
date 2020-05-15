<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'order_name','order_desc','order_price','user_id','order_image'
    ];
    public $timestamps = false;
}
