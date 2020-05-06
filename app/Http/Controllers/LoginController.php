<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request)
    {

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,

        ])) {
            $user = User::where('email', $request->email)->first();

            if ($user->role == 1) {
                return redirect(url('admin'));

            } elseif ($user->role == 2) {
                return redirect(url('/'));
            }
            elseif ($user->role ==3){
                return redirect(url('waiter'));
            }
        } else {
            return redirect(url('loginCustom'))->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
}
