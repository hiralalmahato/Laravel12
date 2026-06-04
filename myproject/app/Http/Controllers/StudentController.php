<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create(){
        Student::create([
            'name'=>"Mahato",
            'email'=>"mahato66@gmail.com",
            'course'=>'Laravel'
        ]);
        return "Created";
    }

    public function read(){
        return Student::all();
    }

    public function update(){
        Student::find($id)->update([
            'course'=>'Full Stack'
        ]);

        return updated;
    }

    public function delete($id){
        Student::find($id)->delete();
        return "Deleted";
    }

}
