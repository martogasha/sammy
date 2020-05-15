<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Inventory;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index(){
        $products = Delivery::all();
            return view('Admin.manageDeliveryPerson',[
                'products'=>$products
        ]);
    }
    public function store(Request $request){
        $delivery = Delivery::create([
            'delivery_firstName'=>$request->input('first'),
            'delivery_lastName'=>$request->input('last'),
            'delivery_phone'=>$request->input('phone'),

        ]);
        return redirect(url('delivery'))->with('success','Delivery Person Registered Successfully');
    }
}
