<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Report;
use Illuminate\Http\Request;

class WaiterController extends Controller
{
    public function index(){
        $products = Inventory::all();
        return view('Waiter.inventory',[
            'products'=>$products
        ]);
    }
    public function waiterTable($id){
        $reports = Report::where('user_id',$id)->get();
        $name = Report::where('user_id',$id)->first();
        $rep = Report::where('user_id',$id)->sum('price');
        return view('Admin.waiterTable',[
            'reports'=>$reports,
            'rep'=>$rep,
            'name'=>$name
        ]);
    }
    public function table(){
        return view('Admin.waiterTable');
    }
}
