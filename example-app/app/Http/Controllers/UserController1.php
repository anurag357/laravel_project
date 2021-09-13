<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    //
    function testRequest(Request $req){

    	return $req->input();

    }
}
