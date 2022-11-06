<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Trying to connect to the database
use Illuminate\Support\Facades\DB;

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
    function index(){
        return DB::select("SELECT * FROM mathematics ");
    }
    function textRequest(Request $req){
        return $req->input();
    }
    
}
