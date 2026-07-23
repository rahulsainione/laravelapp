<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // by deafult it get modal name as table name in plural form. but if we want to use different table name then we can use below code
    protected $table = 'college_students';


    function dummyfunction(){
        return "this is dummy function";
    }
}
