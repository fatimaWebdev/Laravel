<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class con6 extends Controller
{
    //
    function getData(Request $req){
        return $req->input;
    }
}

