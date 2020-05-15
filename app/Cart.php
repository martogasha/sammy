<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable =[
        'order_name','order_desc','order_price','order_image','user_id'
    ];
}
