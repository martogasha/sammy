<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $products = User::where('user_role',2)->get();
        return view('Admin.manageCustomers',[
            'products'=>$products
        ]);
    }
}
