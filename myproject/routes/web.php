<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentForm;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DataRetrival;
use App\Http\Controllers\SendFileController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',function(){
    return view('student');
});

Route::get('/form',function(){
    return view('form');
});

//email sending
Route::get('/send-mail',[SendEmail::class,'send']);

//form validation

Route::get('/show-form',[StudentForm::class,'showForm']);

Route::post('/submit-form',[StudentForm::class,'submitForm']);

//crud operation

Route::get('/create',[StudentController::class,'create']);
Route::get('/read',[StudentController::class,'read']);
Route::get('/update',[StudentController::class,'update']);
Route::get('/delete',[StudentController::class,'delete']);


//database connection check
Route::get('/check-db',function(){
    DB::connection()->getMongoClient();

    return "MongoDB Connected Successfully";
});


//data retrival
Route::post('/dataretrival',[DataRetrival::class,'store']);
Route::get('/form',function(){
    return view('DataRetrival');
});


//localization

Route::get('/local',function(){
    return view ('Localization');
});

//file uploading

Route::get('/upload',function(){
    return view ('SendFile');
});

Route::post('/upload',[SendFileController::class,'upload']);


//cookie

Route::get('/set-cookie',function(){
    return response("Cookie Set")->cookie('user','Mahato',21);

});

Route::get('/get-cookie',function(Request $request){
    return $request->cookie('user');
});

Route::get('delete-cookie',function(){
    return response("Cookie Deleted")->cookie('user',null,-1);
});


//Session
Route::get('/set-session',function(Request $request){
    $request->session()->put('user','Mahato');
    return "Session Stored";
});

Route::get('/get-session',function(Request $request){
    return  $request->session()->get('user');
});

Route::get('/delete-session',function(Request $request){
    $request->session()->forget('user');
    return "session-deleted";
});



