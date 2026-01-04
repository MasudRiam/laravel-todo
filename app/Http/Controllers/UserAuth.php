<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAuth extends Controller
{
    //
    function login () {
        $users = DB::table('users')->get();
        return view('user/userAuth', ['totalUser' => $users]);
    }
}
