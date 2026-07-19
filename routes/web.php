<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Routerdemo;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about/{name}', function ($name) {
    return view('about', ['name'=>$name]);
});

Route::get('/user-form', function () {
    return view('user-form');
});

Route::get('/user/{name}',[UserController::class,'getUser']);

Route::get('/admin/{name}',[UserController::class,'adminLogin']);

Route::post('/submit-form',[UserController::class,'userFormsubmit']);

Route::view('url','url')->name('routedemo');

Route::get('demourl/{name}',[Routerdemo::class, 'testdemo']);

Route::prefix('student')->group(function (){
    Route::view('routeprefix','routeprefix');
    Route::view('routeprefix1','routeprefix1');
    Route::view('routeprefix2','routeprefix2');
});


// grouping routes using controller
/*
Route::controller(UserController::class)->group(function () {
    Route::get('usercontroller/{name}', 'getUser');
    Route::get('admincontroller/{name}', 'adminLogin');
    Route::post('submit-form-controller', 'userFormsubmit');
});

*/