<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Order;
use App\Receipt;
use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $products = Order::all()->unique('user_id');
        return view('Admin.orders',[
            'products'=>$products,
        ]);
    }
    public function waiterOrder(){
        $prods = Order::where('user_id',Auth::user()->id)->get();
        $products = Inventory::all();
            return view('Waiter.order',[
                'prods'=>$prods,
                'products'=>$products

            ]);

    }
    public function processOrder(Request $request){
        $waiter = new Order();
        $waiter->name = $request->product;
        $waiter->quantity = $request->quantity;
        $waiter->price = $request->price;
        $waiter->user_id = Auth::user()->id;
        $waiter->save();

        $receipt = new Receipt();
        $receipt->name = $request->product;
        $receipt->quantity = $request->quantity;
        $total = ($request->price)*($request->quantity);
        $receipt->price = $total;
        $receipt->user_id = Auth::user()->id;
        $receipt->save();

        $report = new Report();
        $report->name = $request->product;
        $report->quantity = $request->quantity;
        $tot = ($request->price)*($request->quantity);
        $report->price = $tot;
        $report->user_id =Auth::user()->id;
        $report->save();

        $inv = Inventory::where('name',$request->product)->first();
        $quantity = $inv->quantity;
        $updateQuantity = $quantity - $request->quantity;
        $update = Inventory::where('name',$request->product)->update(['quantity'=>($updateQuantity)]);
        return redirect(url('waiterOrder'))->with('success','Order Taken Successfully');
    }
    public function reverseOrder(Request $request){
        $reverse = Inventory::where('name',$request->getProdName)->first();
        $quantity = $reverse->quantity;
        $updateQuantity = $quantity + $request->getQuantity;
        $rev= Inventory::where('name',$request->getProdName)->update(['quantity'=>($updateQuantity)]);
        $revs= Order::where('id',$request->getProdId)->delete();
        $revReceipt = Receipt::where('name',$request->getProdName)->delete();
        $revReport =Report::where('name',$request->getProdName)->delete();
        return redirect()->back()->with('success','Order Successfully Reversed');


    }
    public function store(Request $request){
        $complete = Order::where('id',$request->getProdId)->delete();
        $deleteReceipt = Receipt::where('name',$request->getPName)->delete();
        $delReport = Report::where('name',$request->getPName)->delete();
        return redirect()->back()->with('success','Order Successfully Deleted');
    }
    public function waiterComplete(){
        $complete = Order::where('user_id',Auth::user()->id)->delete();
        $comp = Receipt::where('user_id',Auth::user()->id)->delete();
        return redirect(url('waiter'))->with('success','Order Successfully Processed');
    }
}
