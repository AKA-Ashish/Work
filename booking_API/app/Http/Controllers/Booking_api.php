<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class Booking_api extends Controller
{
    public function index($id=null)
    {
        $booking_id=DB::table('Booking')
                ->join('Item','booking.I_id','=','Item.I_id')
                ->where('Booking.U_id',$id)
                ->get();
        $booking=DB::table('Booking')
                ->join('Item','booking.I_id','=','Item.I_id')
                ->get();

        return $id?$booking_id:$booking;
    }
}
