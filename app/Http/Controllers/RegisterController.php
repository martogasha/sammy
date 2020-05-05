<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function register(Request $request){
        $user = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'location'=>$request->input('location'),
            'password'=>Hash::make($request->input('password')),

        ]);
        if (User::where('role',2)){
            return redirect(url('/loginCustom'))->with('success','Register Successfull');
        }
        else{
            return redirect(url('register'))->with('error','Something Went Wrong');
        }
    }
}
