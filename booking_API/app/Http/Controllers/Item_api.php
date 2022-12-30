<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Item_api extends Controller
{
    public function index($id=null)
    {
        // $item=new Item();
        $item_id=DB::table('item')
                ->where('C_id',$id)
                ->get();
        $item=DB::table('item')
                ->get();
        return $id?$item_id:$item;
    }
    public function Item_id($id=null)
    {
        $item_id=DB::table('item')->where('I_id',$id)->get();
        $item=DB::table('item')->get();
        return $id?$item_id:$item;
    }
}
