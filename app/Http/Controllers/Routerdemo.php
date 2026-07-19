<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routerdemo extends Controller
{
    //

    function testdemo(){
       return to_route('routedemo', ["name"=>'John Doe']);
    }
}
