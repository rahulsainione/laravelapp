<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudent(){


        $data = new \App\Models\Student;
        echo $data->dummyfunction();

        $student = 'App\Models\Student';


      
        return view('studentlist', ['students'=>$student::all()]);

    }
}
