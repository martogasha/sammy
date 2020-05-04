<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable =[
        'name','desc','price','image','user_id'
    ];
}
