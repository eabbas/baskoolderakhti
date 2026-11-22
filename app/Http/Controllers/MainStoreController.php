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
        $request->file('img')->storeAs('store' , $name_img , 'public');
        main_store::create([
            'title' => $request->title,
            'summry' => $request->summry,
            'img' => $name_img
        ]);
        return to_route('main_store.create')->with('message' , "استوری با موفقیت ثبت شد");
        // dd($name_img);
        // main_store::create($request->all());
    }
    public function delete(main_store $main_store){
        dd($main_store->store);
    }
     public function add_store(Request $request){
        $main_store = main_store::find($request->input('id'));
        $stores = $main_store->store;
        return response()->json($stores);
    }
}
