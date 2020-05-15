<?php

namespace App\Http\Controllers;

use App\Delivery;
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
        $dels = Delivery::all();
        $products = Inventory::all();
            return view('Waiter.order',[
                'prods'=>$prods,
                'products'=>$products,
                'dels'=>$dels

            ]);

    }
    public function processOrder(Request $request){
        $waiter = new Order();
        $waiter->order_name = $request->product;
        $waiter->order_quantity = $request->quantity;
        $waiter->order_price = $request->price;
        $waiter->order_status = $request->mode;
        $waiter->order_delivery = $request->delivery;

        $waiter->user_id = Auth::user()->id;
        $waiter->save();

        $receipt = new Receipt();
        $receipt->order_name = $request->product;
        $receipt->order_quantity = $request->quantity;
        $receipt->order_status = $request->mode;
        $receipt->order_delivery = $request->delivery;
        $total = ($request->price)*($request->quantity);
        $receipt->order_price = $total;
        $receipt->user_id = Auth::user()->id;
        $receipt->save();

        $report = new Report();
        $report->order_name = $request->product;
        $report->order_quantity = $request->quantity;
        $report->order_status = $request->mode;
        $report->order_delivery = $request->delivery;
        $tot = ($request->price)*($request->quantity);
        $report->order_price = $tot;
        $report->user_id =Auth::user()->id;
        $report->save();

        $inv = Inventory::where('inventory_name',$request->product)->first();
        $quantity = $inv->quantity;
        $updateQuantity = $quantity - $request->quantity;
        $update = Inventory::where('inventory_name',$request->product)->update(['inventory_quantity'=>($updateQuantity)]);
        return redirect(url('waiterOrder'))->with('success','Order Taken Successfully');
    }
    public function reverseOrder(Request $request){
        $reverse = Inventory::where('inventory_name',$request->getProdName)->first();
        $quantity = $reverse->quantity;
        $updateQuantity = $quantity + $request->getQuantity;
        $rev= Inventory::where('inventory_name',$request->getProdName)->update(['inventory_quantity'=>($updateQuantity)]);
        $revs= Order::where('id',$request->getProdId)->delete();
        $revReceipt = Receipt::where('order_name',$request->getProdName)->delete();
        $revReport =Report::where('order_name',$request->getProdName)->delete();
        return redirect()->back()->with('success','Order Successfully Reversed');


    }
    public function store(Request $request){
        $complete = Order::where('user_id',$request->getUserId)->delete();
        $deleteReceipt = Receipt::where('order_name',$request->getPName)->delete();
        $delReport = Report::where('order_name',$request->getPName)->delete();
        return redirect()->back()->with('success','Order Successfully Deleted');
    }
    public function waiterComplete(){
        $complete = Order::where('user_id',Auth::user()->id)->delete();
        $comp = Receipt::where('user_id',Auth::user()->id)->delete();
        return redirect(url('waiter'))->with('success','Order Successfully Processed');
    }
}
