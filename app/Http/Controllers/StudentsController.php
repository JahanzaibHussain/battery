<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function add(){
        return view('student.add');
    }

    public function insert(Request $request){

        $student = new Student();

        $student->firstname  = $request->input('firstname');    
        $student->lastname   = $request->input('lastname');    
        $student->email      = $request->input('email');    
        $student->city       = $request->input('city');    

        $student->save();


        return "student has been saved";
    }
}
