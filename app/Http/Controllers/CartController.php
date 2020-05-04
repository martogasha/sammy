<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Checkout;
use App\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        $cartPrice = Cart::where('user_id',Auth::user()->id)->sum('price');

        return view('Client.cart',[
            'carts'=>$carts,
            'cartPrice'=>$cartPrice
        ]);
    }
    public function store(Request $request){
        $productId = Inventory::where('id',$request->productId)->first();
        $cart = Cart::create([
            'name'=>$productId->name,
            'desc'=>$productId->desc,
            'image'=>$productId->image,
            'price'=>$productId->price,
            'user_id'=>$request->user_id

        ]);
        $checkout = Checkout::create([
            'name'=>$productId->name,
            'desc'=>$productId->desc,
            'image'=>$productId->image,
            'price'=>$productId->price,
            'user_id'=>$request->user_id
        ]);
        return redirect(url('cart'))->with('success','Item added to cart successfully');
    }
    public function deleteCart(Request $request){
        $deleteCart = Cart::where('id',$request->cartId)->delete();
        return redirect()->back()->with('success','Product successfully deleted from cart');
    }
}
