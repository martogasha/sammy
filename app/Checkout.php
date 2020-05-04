<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'name','desc','price','user_id','image'
    ];
    public $timestamps = false;
}
