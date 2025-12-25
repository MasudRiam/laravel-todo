<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\DatabaseView;

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
Route::view ('/form', 'form');
Route::post ('/form-submit', [InputController::class, 'inputF']);

Route::get ('/user', [UserController::class, 'riam']);
Route::get ('/user/{name}', [UserController::class, 'userName']);
Route::get ('/admin', [UserController::class, 'admin']);
 
Route::view ('/dashboard/admin', 'admin.dashboard')->middleware('web');

Route::get ('/database-setup', [DatabaseView::class, 'databaseSet']);