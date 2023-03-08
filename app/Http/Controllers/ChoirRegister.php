<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChoirRegister extends Controller
{
    //
    function register(){
        return view('choirregister');
    }
   
    function getData(Request $request){

        $request->validate([
            'names'=>'required | max:10',
            'password'=>'required | max:8',
        ]);

        return $request->input();

    }



}
