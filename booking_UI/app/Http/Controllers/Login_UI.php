<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class Login_UI extends Controller
{
    public function index(Request $request)
    {
         $request->validate([
            
            'email'=>'required|email',
            'password'=>'required'
        ]); 
       
      
        $response= Http::post('http://127.0.0.1:8000/api/login',[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        // if(Auth::attempt($data))
        if($response['status']=="Verified")
        {
            
                 $user=$response['user'];
                $request->session()->put('name',$user['name']);
                $request->session()->put('id',$user['id']);
                $request->session()->put('token',$response['token']);
              return redirect('/');
        }
        else
        {
            return back()->with('error','Wrong Login details');
        }

    }
}
