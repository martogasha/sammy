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
            'first'=>$request->input('first'),
            'last'=>$request->input('last'),
            'phone'=>$request->input('phone'),

        ]);
        return redirect(url('delivery'))->with('success','Delivery Person Registered Successfully');
    }
}
