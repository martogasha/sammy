<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Inventory::all();
        return view('Client.menu',[
            'products'=>$products
        ]);
    }
}
