<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
class UserRegistration extends Controller
{
    public function index(Request $request)
    {
        $validation=array(
            "name"=>"required|min:3",
            "email"=>"required|email|unique:users",
            "password"=>"required|min:6"
          );
          $validator=Validator::make($request->all(),$validation);
          if($validator->fails())
          {
                return response()->json($validator->errors(),401);
          }
          else{
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $result=$user->save();
        if($result)
        {
        return ["Result"=>"Registration Successful"];
        }
        else
        {
            return ["Result"=>"Registration Unsuccessful"];
        }
          }
        
    }
}
