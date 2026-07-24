<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    //

    function login(Request $req){

$req->session()->put('user',$req->username);
$req->session()->put('password',$req->password);
$req->session()->flash('user',$req->username); // flash data will be available for the next request only

    return redirect('profile');
    }

    function logout(Request $req){

        // $req->session()->flush();
        $req->session()->pull('user');
        return redirect('profile');
    }
}
