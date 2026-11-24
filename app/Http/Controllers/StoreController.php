<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\store;
use App\Models\main_store;

class StoreController extends Controller
{
    public function create(){
        $main_store = main_store::all();
        return view('admin.user.store.create' , ['main_store' => $main_store]);
    }
    public function store(Request $request){
//        dd($request->all());
        $name = request()->file('img')->getClientOriginalName();
        $format = request()->file('img')->getClientOriginalExtension();
//        dd($name);
        $request->file('img')->storeAs('store' , $name , 'public');
        store::create([
            'title' => $request->title,
            'summry' => $request->summry,
            'path' => $name,
            'format' => $format,
            'main_store_id' => $request->main_store_id
        ]);
        return to_route('store.create')->with('message' , "محتوای استوری با موفقیت ثبت شد");
    }
    public function delete(store $store){
        $store->delete();
        return to_route("store.index");

    }
    public function edit(store $store){
        $main_stores = main_store::all();
        return view("admin.user.store.edit" , ['store' => $store , 'main_stores' => $main_stores]);
    }
    public function update(Request $request){
        $store = store::find($request->id);
        $store->title = $request->title;
        $store->summry = $request->summry;
        $store->main_store_id = $request->main_store_id;
        $name = request()->file('file')->getClientOriginalName();
        $format = request()->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('store' , $name , 'public');
        $store->format = $format;
        $store->path = $name;
        $store->save();
        return to_route("store.index");
    }
    public function index(){    
        $stores = store::all();
        return view("admin.user.store.index" , ['stores' => $stores]);
    }
}
