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

    function userFormsubmit(Request $req){ 

    // $req->validate([
    //     'name' => 'required|min:5|max:10',
    //     'email' => 'required|email'
    // ],[
    //     name.min => 'Name must be at least 5 characters'
    // ],[
    //     'name' => 'User Name',
    //     'email' => 'User Email'
    // ]


    // );

     $req->validate([
        'name' => 'required|min:5|max:10',
        'email' => 'required|email'
    ],[
        'name.min' => 'Name must be at least 5 characters'
    ]


    );

    print_r($req->all());

//    echo "Name: " . $req->input('name') . "<br>";
//    echo "Email: " . $req->input('email') . "<br>";

    }
}
