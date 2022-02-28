<?php

use App\Http\Resources\todayResource;
use App\Http\Resources\upcomingResource;
use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    //get upcoming tasks
Route::get('/upcoming',function(){
    $upcoming = Upcoming::all();
    return upcomingResource::collection($upcoming);
});

// post upcoming task
Route::post('/upcoming
',function(Request $req){
    return Upcoming::create([   
        'taskId'=>$req->taskId,
        'title'=>$req->title,
        'waiting'=>$req->waiting,
        // 'completed'=>$req->completed,
        // 'approved'=>$req->approved
    ]);
});
// delete upcoming task
Route::delete('/upcoming{taskId}',function($taskId){
    DB::table('upcomings')->where('taskId',$taskId)->delete();
    // Today::destroy($taskId);
    return 204;
});

// today task api
// 
Route::get('/today',function(){
    $today = Today::all();
    return todayResource::collection($today);
});
// post today task
Route::post('/today',function(Request $req){
    Today::create([
        'taskId'=>$req->taskId,
        'title'=>$req->title,
        'waiting'=>$req->waiting,
    ]);
    // delete today task
    Route::delete('/today{taskId}',function($taskId){
        Today::destroy($taskId);
    });
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
