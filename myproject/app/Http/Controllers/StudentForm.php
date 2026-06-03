<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentForm extends Controller
{
    //
    public function showForm(){
        return view('studentForm');
    }

    public function submitForm(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'course'=>'required'
        ],
        [
            "name.min"=>"Minimum 3 char alllowed",
            "name.max"=>"You are not allowed to enter characters above length 20",
            "name.regex"=>"Only charcters and spaces allowed",
            "password.regex"=>"Password must contain at least one capital, one numeric, one special character",
            "email.email" => "Enter a valid email address",
        ] 
        );
        return "Form Submitted Successfully";
    }
}
