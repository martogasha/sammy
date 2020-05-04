<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $products = User::all();
        return view('Admin.manageCustomers',[
            'products'=>$products
        ]);
    }
}
