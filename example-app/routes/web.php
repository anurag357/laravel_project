<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController1;
use App\Http\Controllers\UserAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//get api call from here
Route::get("/users",[UserController::class,'index']);



//http request get and post methode here

// Route::get("submit",[UserController1::class,'testRequest']);
//Route::put("submit",[UserController1::class,'testRequest']);
//Route::delete("submit",[UserController1::class,'testRequest']);

Route::post("submit",[UserController1::class,'testRequest']);
Route::view("login",'users1');



// session call here
Route::view('login1','login');
Route::view('profile','profile');

Route::get('/logout' function(){

	if(session()->has('user')){
		session()->pull('user',null);
	}
	return redirect('login');
});
Route::post("/userform",[UserAuth::class,'userLogin']);