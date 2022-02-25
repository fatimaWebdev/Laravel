<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
use App\Http\Controller\ConUsers;


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

Route::post("login",[PostController::class,'getData' ]);
Route::view("ff",'login');*/

Route::get('/index', function(){
    return view('index');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/serves', function(){
    return view('serves');
});
Route::get('/app', function(){
    return view('app');
});
//Route::post("conusers",[PostController::class,'getData' ]);
Route::post('/conusers',GetController::class . '@index');
//Route::post("/conusers",[ConUsers::class,'getData']);
// Route::get('/conusers', function () {
// dd('asgsd');
// });
Route::view("login2",'user');
Route::view('noaccess','noaccess');
Route::view('home','home');

Route::group(['middlewere'=>['protectedPage']] ,function(){
    Route::view("users",'users');
});