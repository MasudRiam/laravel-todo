<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseView extends Controller
{
    function databaseSet(){
        $customer=DB::select('select * from customers');
        return view('database', ['totalCustomer' => $customer]);
    }
}
