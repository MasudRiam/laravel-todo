<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    //
    function inputF (Request $req) {
     $validated = $req->validate([
        'username' => 'required',
        'password' => 'required',
     ]);
    }
}
 