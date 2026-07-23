<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function getStudent(){
        $student = 'App\Models\Student';
        return $student::all();
    }
}
