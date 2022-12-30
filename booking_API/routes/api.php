<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Booking_api;
use App\Http\Controllers\Category_api;
use App\Http\Controllers\Item_api;
use App\Http\Controllers\Post_booking_api;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\UserRegistration;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|dc xcbv vb
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/booking/{id?}',[Booking_api::class,'index']);
    Route::get('/catitem/{id?}',[Item_api::class,'index']);
    Route::get('/item/{id?}',[Item_api::class,'Item_id']);
    Route::get('/category/{id?}',[Category_api::class,'index']);
    Route::post('/addbooking',[Post_booking_api::class,'index']);
    });

Route::post('/login',[UserLogin::class,'index']);
Route::post('/register',[UserRegistration::class,'index']);
