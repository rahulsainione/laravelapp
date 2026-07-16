<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //

    function getUser($name){
        return "Hello, " . $name;
    }

    function adminLogin($name){
        if(View::exists('admin.login')){
            return view('admin.login', ['name' => $name]);
        }else{
            return "View not found";
        }
       
    }
}
