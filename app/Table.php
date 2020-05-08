<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable=[
        'name','email','phone','tableNo','desc','person','date'
    ];
}
