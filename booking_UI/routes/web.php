<?php

use App\Http\Controllers\Booking_controller;
use App\Http\Controllers\Item_display_controller;
use App\Http\Controllers\Login_UI;
use App\Http\Controllers\Registration_UI_Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;



Route::get('/registration',[Registration_UI_Controller::class,'index']);
Route::post('/registration',[Registration_UI_Controller::class,'register']);
Route::group(['middleware'=>"session"],function(){



    Route::get('/items',[Item_display_controller::class,'index']);
    Route::post('/items',[Item_display_controller::class,'get_category']);
    Route::get("/login", function () {
        return view('login');
    });
    Route::post("/login",[Login_UI::class,'index']);
    Route::get("/", function () {
        return view('home');
    });
    Route::get('book/{id}',[Booking_controller::class,'show_booking']);
    Route::post('bookconfirm',[Booking_controller::class,'make_booking']);
    Route::get('mybooking/{id}',[Booking_controller::class,'personal_booking']);
    Route::get("/logout", function () {
        if(session()->has('name'))
        {
            session()->pull('name',null);
            return redirect('login');
        }
    });
});


