<?php

namespace App\Http\Controllers;

use App\User;
use App\Waiter;
use Illuminate\Http\Request;

class ManageWaiterController extends Controller
{
    public function index(){
        $products = User::where('role',3)->get();
        return view('Admin.manageWaiters',[
            'products'=>$products
        ]);
    }
    public function store(Request $request){
        $waiter = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'role'=>$request->input('role')
        ]);
        return redirect()->back()->with('success','Waiter Registered Successfully');
    }
}
