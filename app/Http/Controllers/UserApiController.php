<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserApiController extends Controller
{
    //

    function getuser(){
        
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
   $users = $response->json();
//    return $response->status();
       return view('userapi',['users'=>$users]);
    }
}

