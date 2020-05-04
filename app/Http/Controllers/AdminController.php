<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $orders = Order::all()->unique('user_id');
        return view('Admin.dashboard',[
            'orders'=>$orders
        ]);
    }
}
