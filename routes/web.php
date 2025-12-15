<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

//define other way route

Route::get ('/home/{roll}', function ($roll){
    return view ('home', ['roll' => $roll]);
});

Route::view ('/signin/{firstname}', 'admin.signIn', ['firstname' => 'firstname']);

Route::get ('/user', [UserController::class, 'riam']);
Route::get ('/user/{name}', [UserController::class, 'userName']);
Route::get ('/admin', [UserController::class, 'admin']); 