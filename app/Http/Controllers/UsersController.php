<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function loadView(){
       return view('myusers'); //myusers here represents the view representing an html page 
    }
    public function viewLoad(){
        $data=["anil","Peter","Lucky","Bruce Lee"];
        return view("first",['users'=>$data]);
    }
}
