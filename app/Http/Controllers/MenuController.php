<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Inventory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $prods = Inventory::all();
        $dels = Delivery::all();
        return view('Waiter.menu',[
            'prods'=>$prods,
            'dels'=>$dels
        ]);
    }
}
