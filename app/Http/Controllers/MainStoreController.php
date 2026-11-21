<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\main_store;
class MainStoreController extends Controller
{
    public function create(){
        return view('admin.user.main_store.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $name_img = request()->file('img')->getClientOriginalName();
        $request->file('img')->storeas('store' , $name_img , 'public');
        main_store::create([
            'title' => $request->title,
            'summry' => $request->summry,
            'img' => $name_img
        ]);
        // dd($name_img);
        // main_store::create($request->all());
    }
}
