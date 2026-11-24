<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\main_store;
use App\Models\store;
class MainStoreController extends Controller
{
    public function create(){
        return view('admin.user.main_store.create');
    }
    public function store(Request $request){
//         dd($request->all());
        $name_img = request()->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('store' , $name_img , 'public');
        main_store::create([
            'title' => $request->title,
            'summry' => $request->summry,
            'img' => $name_img
        ]);
        return to_route('main_store.create')->with('message' , "استوری با موفقیت ثبت شد");
    }
    public function delete(main_store $main_store){
        store::where('main_store_id' , $main_store->id)->delete();
        $main_store->delete();
        return to_route("main_store.index");
        // dd($main_store->store);
    }
     public function add_store(Request $request){
        $main_store = main_store::find($request->input('id'));
        $stores = $main_store->store;
        return response()->json($stores);
    }
    public function edit(main_store $main_store){
        return view("admin.user.main_store.edit" , ['main_store' => $main_store]);
    }
    public function update(Request $request){
        dd($request->all());
    }
    public function index(){
        $main_stores = main_store::all();
        return view("admin.user.main_store.index" , ['main_stores' => $main_stores]);
    }
    public function store_content(main_store $main_store){
        return view("admin.user..main_store.index_store_content" , ['main_store' => $main_store]);
    }
}
