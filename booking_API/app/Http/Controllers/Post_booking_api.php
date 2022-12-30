<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Validator;
class Post_booking_api extends Controller
{
   public function index(Request $request)
   {
    $validation=array(
        "I_id"=>"required|min:3|numeric",
        "I_price"=>"required|numeric",
        "U_id"=>"required|numeric"
      );
      $validator=Validator::make($request->all(),$validation);
      if($validator->fails())
      {
            return response()->json($validator->errors(),401);
      }
      else{
    $booking=new Booking();
    $booking->I_id=$request->I_id;
    $booking->I_price=$request->I_price;
    $booking->U_id=$request->U_id;
    $result=$booking->save();
    if($result)
    {
    return ["Result"=>"Record inserted"];
    }
    else
    {
        return ["Result"=>"Record not inserted"];
    }
      }
   }
}
