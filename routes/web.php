<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Routerdemo;
use App\Http\Middleware\AgeChecker;
use App\Http\Middleware\CountryCheck;
use App\Http\Controllers\UserTest; // db users
use App\Http\Controllers\UserApiController; // api users


Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'getStudent']);
Route::get('usertest',[UserTest::class,'users']);

Route::get('studentapi',[UserApiController::class,'getuser']);

Route::get('/about/{name}', function ($name) {
    return view('about', ['name'=>$name]);
});

Route::get('/user-form', function () {
    return view('user-form');
});

Route::get('/user/{name}',[UserController::class,'getUser']);

Route::get('/admin/{name}',[UserController::class,'adminLogin']);

Route::post('/submit-form',[UserController::class,'userFormsubmit']);

// Route::view('url','url')->name('routedemo')->middleware('check1');

Route::view('url','url')->name('routedemo')->middleware([AgeChecker::class,CountryCheck::class]);

Route::view('url1','welcome')->middleware(CountryCheck::class);

Route::get('demourl/{name}',[Routerdemo::class, 'testdemo']);

Route::prefix('student')->group(function (){
    Route::view('routeprefix','routeprefix');
    Route::view('routeprefix1','routeprefix1');
    Route::view('routeprefix2','routeprefix2');
});

// Route::middleware(['check1'])->group(function () {
//     Route::view('url','url')->name('routedemo');
//     Route::view('url1','url1')->name('routedemo1');
//     Route::view('url2','url2')->name('routedemo2');
// });


// grouping routes using controller
/*
Route::controller(UserController::class)->group(function () {
    Route::get('usercontroller/{name}', 'getUser');
    Route::get('admincontroller/{name}', 'adminLogin');
    Route::post('submit-form-controller', 'userFormsubmit');
});

*/