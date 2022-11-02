<?php

use Illuminate\Support\Facades\Route;
//defining the part to the controller here 

//The controllers are called here
use App\Http\Controller\About;
use App\Http\Controllers\myusers;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Users;
use App\Http\Controllers\forms;

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

//Writing route for other pages 
Route::get('/about',function(){
    #return view('about');
    //using the redirect 
    return redirect('welcome');
});
//However there is a shorter method
//Route::view('xyz','page') The sxy will be part of the parameter while the second parameter represents the page
//Route::view('greet','hello');
Route::view('welcome','welcome');
//using the route sometimes as functions
Route::get('hello/{id}',function($id='Olumide Adeola'){
    echo $id;

});
Route::get('about/{name}',function($name='null'){
    echo $name;

});

//Dealing with the controllers file in the Http
//Pattern is as follow: Route::get('path','controller file');
Route::get('users',[myusers::class,'index']);

//Now using the controller to load a view 
Route::get('myusers',[UsersController::class,'loadView']);

Route::view("home","home");

Route::get("hello",function(){
    return view("hello");
});

//How to display the content of the Controller 
//Route::get("path to the controller","Controller file");
Route::get("users/{name}",[Users::class,'index']);

Route::view("first/","first");

Route::get("here",[UsersController::class,'viewLoad']);

Route::post("forms",[forms::class,'getData']);
Route::view("login","forms");

