<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $products = Order::all()->unique('user_id');
        return view('Admin.orders',[
            'products'=>$products
        ]);
    }
    public function store(Request $request){
        $complete = Order::where('user_id',$request->getUserId)->delete();
        return redirect()->back()->with('success','Order Successfully Completed');
    }
}
