<?php

namespace App\Http\Controllers;

use App\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceiptController extends Controller
{
    public function index(){
        $reps = Receipt::where('user_id',Auth::user()->id)->get();
        $name = Receipt::where('user_id',Auth::user()->id)->first();
        $total = Receipt::where('user_id',Auth::user()->id)->sum('order_price');

        return view('Waiter.receipt',[
            'reps'=>$reps,
            'total'=>$total,
            'name'=>$name
        ]);
    }
    public function store(Request $request){

    }
}
