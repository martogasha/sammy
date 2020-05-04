<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $checkouts = Checkout::where('user_id',Auth::user()->id)->get();
        $check = Checkout::where('user_id',Auth::user()->id)->sum('price');
        return view('Client.checkout',[
            'checkouts'=>$checkouts,
            'check'=>$check
        ]);
    }
    public function save(Request $request){
        $checkout = Checkout::where('user_id',Auth::user()->id)->get()->toArray();
        foreach ($checkout as $moveItem){
            Order::insert($moveItem);
            $deleteCart = Cart::where('user_id',Auth::user()->id)->delete();
            $deleteCheckout = Checkout::where('user_id',Auth::user()->id)->delete();

        }
        return redirect(url('/'))->with('success','Order Placed Successfully');
    }
}
