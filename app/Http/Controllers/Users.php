<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($name){
        echo $name;
        echo "<br/> Hello from the Users Controller of Chasfat Projects";
        return ["name"=>"Oluwafunmilayo","age"=>50];
    }
}
