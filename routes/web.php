<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
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

Route::get('/h', function () {
    return view('hh');
});

/*Route::get('/users/{name}', function () {
    return view(|"name",['name']=>$name);
});*/



//Route::view("welcome",'welcome')-> name('welcome');

/*Route::view("users",'users');
Route::view("about",'about');

Route::post("login",[PostController::class,'getData' ]);
Route::view("ff",'login');*/