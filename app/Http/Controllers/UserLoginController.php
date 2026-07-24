<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    //

    function login(Request $req){

$req->session()->put('user',$req->username);
$req->session()->put('password',$req->password);

    return redirect('profile');
    }
}
