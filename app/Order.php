<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_name','order_price','order_desc','user_id','order_image','order_quantity','order_status','order_delivery'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
