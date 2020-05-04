<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $products = Inventory::all();
        return view('Client.HomePage',[
            'products'=>$products
        ]);
    }
}
