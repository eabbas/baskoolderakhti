<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\store;
use App\models\main_store;

class StoreController extends Controller
{
    public function create(){
        $main_store = main_store::all();
        // dd($main_store);
        return view('admin.user.store.create' , ['main_store' => $main_store]);
    }
    public function store(Request $request){
        // dd($request->all());
        $name = request()->file('img')->getClientOriginalName();
        $format = request()->file('img')->getClientOriginalExtension();
        // dd($name);
        dd($format);
        
    }
}
