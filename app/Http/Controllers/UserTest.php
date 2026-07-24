<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTest extends Controller
{
    //

    function users(){
        /*
//         $users = DB::select("select * from users");
        $query = DB::table('users')->where('phone', '23232');

     //  dd($query->toRawSql());

        $users = $query->get();

        return view('usertest', ['users'=>$users]);
        */


        $userInsert = DB::table('users')->insert(
            [
                'name'=>'test',
                'email'=>'test@gmail.com',
                'phone'=>'23232'

            ]
        );

        if($userInsert){
            return "User Inserted";
    } else {
            return "User Not Inserted";
        }
    }
 }
