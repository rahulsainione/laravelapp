<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTest extends Controller
{
    //

    function users(){
        
//         $users = DB::select("select * from users");
        $query = DB::table('users')->where('phone', '23232');

     //  dd($query->toRawSql());

        $users = $query->get();

        return view('usertest', ['users'=>$users]);
    }
}
