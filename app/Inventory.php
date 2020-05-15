<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'inventory_name','inventory_desc','inventory_price','inventory_image','inventory_quantity'
    ];
}
