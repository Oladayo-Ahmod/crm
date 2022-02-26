<?php

use App\Http\Resources\todayResource;
use App\Http\Resources\upcomingResource;
use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// upcoming tasks api
Route::get('/upcoming',function(){
    $upcoming = Upcoming::all();
    return upcomingResource::collection($upcoming);
});
// today task api
Route::get('/today',function(){
    $today = Today::all();
    return todayResource::collection($today);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
