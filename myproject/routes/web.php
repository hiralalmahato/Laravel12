<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',function(){
    return view('student');
});

Route::get('/form',function(){
    return view('form');
});
Route::get('/send-mail',[SendEmail::class,'send']);

Route::get('/show-form',[StudentForm::class,'showForm']);

Route::post('/submit-form',[StudentForm::class,'submitForm']);


