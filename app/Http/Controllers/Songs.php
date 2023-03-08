<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Songs extends Controller
{
    //
    function index(){
        return view('songs',['user'=>'anil']);
    }
}
