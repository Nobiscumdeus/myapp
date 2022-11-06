<?php

use Illuminate\Support\Facades\Route;
//defining the part to the controller here 

//The controllers are called here
use App\Http\Controller\About;
use App\Http\Controllers\myusers;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Users;
use App\Http\Controllers\forms;
use App\Http\Controllers\MathsController;
use App\Http\Controllers\member;
use App\Http\Controllers\upload;

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

//for the index function in Userscontroller 
Route::get('myusers',[UsersController::class,'index']);

Route::view("home","home")->middleware('protectedPage');

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
Route::view("noaccess","noaccess");
Route::get("maths",[MathsController::class,'getData']);

Route::view("inner","inner");

Route::put("userform",[UsersController::class,'textRequest']);
//instead of put , you can also use delete ,method the same way.
Route::view("login","login");
Route::post("loginauth",[Users::class,'userlogin']);
Route::view("profile","profile");

Route::get("/logout",function(){
    if(session()->has('username')){
        //We deleted the session now and return to the login page
        session()->pull('username');
    }
    return redirect("login");
});

Route::get("/login",function(){
    if(session()->has('username')){
        //We deleted the session now and return to the login page
        return redirect("profile");
    }
    return redirect("login");
});

Route::get("maths",[About::class,'obtainData']);

Route::view("add","add");
Route::post("addMember",[member::class,'addMember']);
Route::view("upload","file");

Route::post("upload",[upload::class,'index']);

Route::get('/profile/{lang}',function($lang){
    App::setlocale($lang);
    return view('profile');
});

Route::get("list",[myusers::class,'show']);