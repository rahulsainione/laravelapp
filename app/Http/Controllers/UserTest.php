<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTest extends Controller
{
    //

    function users(){
        
        $users = DB::select("select * from users");
        return view('usertest', ['users'=>$users]);
    }
}
