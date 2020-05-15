<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable=[
        'order_name','order_price','order_quantity','user_id','order_status','order_delivery'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
