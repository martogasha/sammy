<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name','price','desc','user_id','image','quantity'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
