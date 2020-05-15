<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Waiter extends Model
{
    protected $fillable=[
        'waiter_name','waiter_email'
    ];
}
