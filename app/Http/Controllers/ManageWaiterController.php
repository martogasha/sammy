<?php

namespace App\Http\Controllers;

use App\User;
use App\Waiter;
use Illuminate\Http\Request;

class ManageWaiterController extends Controller
{
    public function index(){
        $products = User::where('user_role',3)->get();
        return view('Admin.manageWaiters',[
            'products'=>$products
        ]);
    }
    public function store(Request $request){
        $waiter = User::create([
            'user_name'=>$request->input('name'),
            'user_email'=>$request->input('email'),
            'user_phone'=>$request->input('phone'),
            'user_role'=>$request->input('role')
        ]);
        return redirect()->back()->with('success','Waiter Registered Successfully');
    }
}
