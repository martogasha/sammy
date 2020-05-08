<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable=[
        'name','price','quantity','user_id','status','delivery'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
