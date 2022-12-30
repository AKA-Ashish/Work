<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Item_display_controller extends Controller
{

    function index()
    {
        $category= Http::withHeaders(['Authorization'=>'Bearer '.session()->get('token'),'Accept'=>'application/json'])
        ->get('http://127.0.0.1:8000/api/category')->json();
        $item= Http::withHeaders(['Authorization'=>'Bearer '.session()->get('token'),'Accept'=>'application/json'])
        ->get('http://127.0.0.1:8000/api/catitem')->json();
        return view('items',['data'=>$item,'category'=>$category]);
    }
    function get_category(Request $request)
    {
        $category= Http::withHeaders(['Authorization'=>'Bearer '.session()->get('token'),'Accept'=>'application/json'])
        ->get('http://127.0.0.1:8000/api/category')->json();
        $item= Http::withHeaders(['Authorization'=>'Bearer '.session()->get('token'),'Accept'=>'application/json'])
        ->get('http://127.0.0.1:8000/api/catitem/'.$request->category)->json();
        return view('items',['data'=>$item,'category'=>$category]);
    }
}

