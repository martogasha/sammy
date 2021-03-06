<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::user()->id)->first();
        return view('Admin.profile',[
            'user'=>$user
        ]);
    }
}
