<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Winter extends Controller
{
    //
    function winter() {
        $dataAll = \App\Models\Winter::all();
        return $dataAll;
    }
}
