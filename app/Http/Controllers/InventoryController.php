<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\Order;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        $products = Inventory::all();
        return view('Admin.inventory',[
            'products'=>$products
        ]);
    }
    public function store(Request $request){
           $product = new Inventory();
           $product->name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->price = $request->input('price');

        $file = $request->file('image');
        $extension = $file->getClientOriginalName();
        $filename = time() . '.' . $extension;
        $file->move('uploads/cafe/', $filename);
        $product->image = $filename;

        $product->save();

        return redirect()->back()->with('success','Product added successfully');
    }
    public function deleteInventory(Request $request){
        $order = Inventory::where('id',$request->inventoryId)->delete();
        return redirect()->back()->with('success','Product Deleted Successfully');
    }
}
