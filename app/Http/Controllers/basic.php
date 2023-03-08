<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class basic extends Controller
{
    //
    public function index($good)
    {   
        return ['good'=>'Iremide','age'=>350];
        echo $good;
        echo "<h1> Hello from Chasfat Project$ </h1>";

    }
}
