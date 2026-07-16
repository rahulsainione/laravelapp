<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about/{name}', function ($name) {
    return view('about', ['name'=>$name]);
});

Route::get('/user/{name}',[UserController::class,'getUser']);

Route::get('/admin/{name}',[UserController::class,'adminLogin']);


