<?php

namespace App\Http\Controllers;

use App\Table;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $prods = Table::all();
        return view('Waiter.table',[
            'prods'=>$prods
        ]);
    }
    public function store(Request $request){
        $tabs = Table::all();
        foreach ($tabs as $tab)
            if ($request->tableNo == $tab->tableNo){
                return redirect(url('/'))->with('error','Table Already Taken');
            }
        else{
            $table = Table::create([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'tableNo'=>$request->input('tableNo'),
                'person'=>$request->input('person'),
                'date'=>$request->input('date'),
                'desc'=>$request->input('desc'),

            ]);
            return redirect(url('/'))->with('success','Table Booked Successfully');
        }
    }
    public function deleteTable(Request $request){
        $del = Table::where('id',$request->tableId)->delete();
        return redirect(url('table'))->with('success','Table Deleted Successfully');

    }
}
