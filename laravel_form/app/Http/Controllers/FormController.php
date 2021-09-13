<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class FormController extends Controller
{
    function addData(Request $req){

    	$member= new Member;
    	$member->name=$req->user;
    	$member->email=$req->email;
    	$member->address=$req->address;
    	$member->save();
    	return redirect('add');


    }
}
