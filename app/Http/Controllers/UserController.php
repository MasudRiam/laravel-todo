<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function riam () {
        return "Masud Parvez riam";
    }

    function userName ($name) {
        return 'User name is '. $name;
    }

    function admin () {
        $name = ['riam', 'sahil', 'rohan', 'shihab'];
        return view ('admin.login', ['adminName' => $name]);
    }
};
